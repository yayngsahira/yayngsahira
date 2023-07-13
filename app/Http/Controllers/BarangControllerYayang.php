<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;

class BarangControllerYayang extends Controller
{
    public function index()
    {
        $title = "Barang";
        $data = DB::table('t_barang_yayang')->get();
        return view('barang_yayang.index', compact('title', 'data'));
    }

    public function tambah()
    {
        $title = "Tambah Barang";
        return view('barang_yayang.tambah', compact('title'));
    }

    public function store(Request $request)
    {
        DB::table('t_barang_yayang')->insert([
            'BarangID' => $request->barangid,
            'NamaBarang' => $request->nama,
            'Satuan' => $request->satuan,
            'Harga' => $request->harga,
            'KategoriID' => $request->kategoriid,
        ]);
        return redirect('master/barang');
    }

    public function edit(Request $request, $id)
    {
        $data = DB::table('t_barang_yayang')->where('BarangID', $id)->first();
        $title = "Edit Data Barang";
        return view('barang_yayang.ubah', compact('data', 'title'));
    }

    public function update(Request $request, $id)
    {
        DB::table('t_barang_yayang')->where('BarangID', $id)->update([
            // 'BarangID' => $request->barangid,
            'NamaBarang' => $request->nama,
            'Satuan' => $request->satuan,
            'Harga' => $request->harga,
            'KategoriID' => $request->kategoriid,
        ]);
        return redirect('master/barang');
    }

    public function delete($id)
    {
        DB::table('t_barang_yayang')->where('BarangID', $id)->delete();
        return redirect('master/barang');
    }
}
