<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Barang;
use App\Models\Lelang;

class BarangController extends Controller
{
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


        return redirect()->back()->with('success', 'Product and auction added successfully!');
    }
}
