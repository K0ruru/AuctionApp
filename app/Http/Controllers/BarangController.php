<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Barang;
use App\Models\Lelang;

class BarangController extends Controller
{
    public function queryProduct()
{
    // Retrieve all Barang records
    $barang = Barang::all();

    // Loop through each Barang record to add the 'status' from the Lelang table
    foreach ($barang as $item) {
        // Retrieve the status from the Lelang table for the current Barang record
        $status = Lelang::where('id_barang', $item->id_barang)->value('status');

        // Add the status to the current Barang record
        $item->status = $status;
    }

    // Pass the modified $barang collection to the view
    return view('page.ProductListAdmin', ['barang' => $barang]);
}


    public function addProduct(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'nama_barang' => 'required|string|max:255',
            'tgl_date' => 'required|date',
            'harga_awal' => 'required|integer|min:100000|max:5000000',
            'deskripsi' => 'required|string|max:255',
        ]);

        // If validation fails, redirect back with errors and old input
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create a new Barang record
        $barang = Barang::create([
            'nama_barang' => $request->nama_barang,
            'tgl_date' => $request->tgl_date,
            'harga_awal' => $request->harga_awal,
            'deskripsi' => $request->deskripsi,
        ]);


        return redirect()->route('query.product')->with('success', 'Product and auction added successfully!');
    }
}
