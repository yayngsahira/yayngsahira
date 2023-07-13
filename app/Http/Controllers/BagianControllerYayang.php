<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;

class BagianControllerYayang extends Controller
{
    public function index()
    {
        $title = "Bagian";
        $data = DB::table('t_bagian_yayang')->get();
        return view('bagian_yayang.index', compact('title', 'data'));
    }

    public function tambah()
    {
        $title = "Tambah Bagian";
        return view('bagian_yayang.tambah', compact('title'));
    }

    public function store(Request $request)
    {
        DB::table('t_bagian_yayang')->insert([
            'BagianID' => $request->bagianid,
            'NamaBagian' => $request->nama,
            'KepalaBagian' => $request->kepala,
            'Telp' => $request->telpon
        ]);
        return redirect('master/bagian');
    }

    public function edit(Request $request, $id)
    {
        $data = DB::table('t_bagian_yayang')->where('BagianID', $id)->first();
        $title = "Edit Data Bagian";
        return view('bagian_yayang.ubah', compact('data', 'title'));
    }

    public function update(Request $request, $id)
    {
        DB::table('t_bagian_yayang')->where('BagianID', $id)->update([
            // 'BagianID' => $request->bagianid,
            'NamaBagian' => $request->nama,
            'KepalaBagian' => $request->kepala,
            'Telp' => $request->telpon
        ]);
        return redirect('master/bagian');
    }

    public function delete($id)
    {
        DB::table('t_bagian_yayang')->where('BagianID', $id)->delete();
        return redirect('master/bagian');
    }
}
