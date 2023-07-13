<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;

class PengeluaranitemControllerYayang extends Controller
{
    public function index()
    {
        $title = "Pengeluaran Item";
        $data = DB::table('t_pengeluaranitem_yayang')->get();
        return view('pengeluaranitem_yayang.index', compact('title', 'data'));
    }

    public function tambah()
    {
        $title = "Tambah Pengeluaran Item";
        return view('pengeluaranitem_yayang.tambah', compact('title'));
    }

    public function store(Request $request)
    {
        DB::table('t_pengeluaranitem_yayang')->insert([
            'ID' => $request->id,
            'NoBK' => $request->nobk,
            'BarangID' => $request->barangid,
            'Jumlah' => $request->jumlah,
        ]);
        return redirect('master/pengeluaranitem');
    }

    public function edit(Request $request, $id)
    {
        $data = DB::table('t_pengeluaranitem_yayang')->where('ID', $id)->first();
        $title = "Edit Data Pengeluaranitem";
        return view('pengeluaranitem_yayang.ubah', compact('data', 'title'));
    }

    public function update(Request $request, $id)
    {
        DB::table('t_pengeluaranitem_yayang')->where('ID', $id)->update([
            //'ID' => $request->id,
            'NoBK' => $request->nobk,
            'BarangID' => $request->barangid,
            'Jumlah' => $request->jumlah,
        ]);
        return redirect('master/pengeluaranitem');
    }

    public function delete($id)
    {
        DB::table('t_pengeluaranitem_yayang')->where('ID', $id)->delete();
        return redirect('master/pengeluaranitem');
    }
}
