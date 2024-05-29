<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Lelang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LelangController extends Controller
{
    public function addLelang(Request $request)
    {
        // Validate the request data
        $request->validate([
            'end_date' => 'required|date|after_or_equal:today', // Assuming end date must be in the future
        ]);

        // Retrieve the product ID from the request
        $id_barang = $request->input('id_barang');

        // Retrieve the product details
        $product = Barang::where('id_barang', $id_barang)->first();

        // Retrieve the current authenticated user's ID
        $userId = auth()->guard('petugas')->id();

        // Create a new Lelang instance
        $lelang = new Lelang();
        $lelang->id_user = null; // User ID is null for now
        $lelang->id_petugas = $userId; // Assuming the current authenticated user is the admin
        $lelang->id_barang = $id_barang;
        $lelang->tgl_lelang = $request->end_date;
        $lelang->harga_akhir = $product->harga_awal; // Use the initial price as the current price
        $lelang->status = 'buka'; // Assuming the auction is active upon creation
        $lelang->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Auction opened successfully.');
    }

    public function queryLelang()
    {
        // Retrieve all records from the lelang table
        $lelangs = Lelang::all();

        // Extract all id_barang values from the lelang records
        $idBarangValues = $lelangs->pluck('id_barang')->toArray();

        // Retrieve the corresponding records from the barang table using the extracted id_barang values
        $barangs = Barang::whereIn('id_barang', $idBarangValues)->get();

        // Create an associative array to map id_barang to barang details
        $barangMap = $barangs->keyBy('id_barang');

        // Merge the lelang data with the corresponding barang data
        $lelangs = $lelangs->map(function ($lelang) use ($barangMap) {
            $lelang->barang = $barangMap->get($lelang->id_barang);
            return $lelang;
        });

        // Pass the merged data to the 'page.Home' view
        return view('page.Home', ['lelangs' => $lelangs]);
    }

    public function placeBid(Request $request)
    {
        try {
            // Validate the request data
            $validatedData = $request->validate([
                'bid_amount' => 'required|numeric|min:0', // Ensure bid_amount is numeric and non-negative
                'id_lelang' => 'required|exists:lelang,id_lelang', // Ensure id_lelang exists in the lelangs table
            ]);

            // Get the Lelang instance
            $lelang = Lelang::findOrFail($validatedData['id_lelang']);

            // Check if the bid amount is greater than the current harga_akhir
            if ($validatedData['bid_amount'] > $lelang->harga_akhir) {
                // Update the harga_akhir with the new bid amount
                $lelang->harga_akhir = $validatedData['bid_amount'];

                // Update the id_user with the currently logged in user's id
                $lelang->id_user = auth()->guard('masyarakat')->id();

                // Save the changes
                $lelang->save();

                // Return a success response
                return response()->json(['success' => true, 'message' => 'Bid placed successfully'], 200);
            } else {
                // Return a response indicating that the bid amount must be greater than the current bid
                return response()->json(['success' => false, 'error' => 'Bid amount must be greater than the current bid'], 422);
            }
        } catch (\Exception $e) {
            // Log the error message for debugging
            Log::error('Error placing bid: ' . $e->getMessage());

            // Return a server error response
            return response()->json(['success' => false, 'error' => 'An error occurred while placing the bid. Please try again later.'], 500);
        }
    }
}
