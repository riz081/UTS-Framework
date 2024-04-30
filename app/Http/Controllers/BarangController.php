<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Satuan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataBarang = Barang::latest()->paginate(8);
        return view('content.index', compact('dataBarang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dataSatuan = Satuan::all();
        return view('content.create', compact('dataSatuan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate form data
        $validator = Validator::make($request->all(), [
            'kode_barang'       => 'required|unique:barangs',
            'nama_barang'       => 'required',
            'harga_barang'      => 'required|numeric',
            'deskripsi_barang'  => 'required',
            'satuan_id'         => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create data
        Barang::create([
            'kode_barang'       => $request->kode_barang,
            'nama_barang'       => $request->nama_barang,
            'harga_barang'      => $request->harga_barang,
            'deskripsi_barang'  => $request->deskripsi_barang,
            'satuan_id'         => $request->satuan_id,
        ]);

        return redirect()->route('barang.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dataBarang = Barang::findOrFail($id);

        return view('content.show', compact('dataBarang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dataBarang = Barang::findOrFail($id);
        $dataSatuan = Satuan::all();

        return view('content.edit', compact('dataBarang', 'dataSatuan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate form data
        $validator = Validator::make($request->all(), [
            'kode_barang'       => 'required|unique:barangs',
            'nama_barang'       => 'required',
            'harga_barang'      => 'required|numeric',
            'deskripsi_barang'  => 'required',
            'satuan_id'         => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $dataBarang = Barang::findOrFail($id);

        // Update data
        $dataBarang->update([
            'kode_barang'       => $request->kode_barang,
            'nama_barang'       => $request->nama_barang,
            'harga_barang'      => $request->harga_barang,
            'deskripsi_barang'  => $request->deskripsi_barang,
            'satuan_id'         => $request->satuan_id,
        ]);

        return redirect()->route('barang.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $dataBarang = Barang::findOrFail($id);

         $dataBarang->delete();
 
         //redirect to index
         return redirect()->route('barang.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
