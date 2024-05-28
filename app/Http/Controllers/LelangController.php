<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Lelang;

class LelangController extends Controller
{
    public function addLelang(Request $request) {
        // Validate the request data
        $request->validate([
            'end_date' => 'required|date|after_or_equal:today', // Assuming end date must be in the future
            // Add more validation rules if needed
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

}
