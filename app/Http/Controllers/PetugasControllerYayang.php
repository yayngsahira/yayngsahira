<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;

class PetugasControllerYayang extends Controller
{
    public function index()
    {
        $title = "Petugas";
        $data = DB::table('t_petugas_yayang')->get();
        return view('petugas_yayang.index', compact('title', 'data'));
    }

    public function tambah()
    {
        $title = "Tambah Petugas";
        return view('petugas_yayang.tambah', compact('title'));
    }

    public function store(Request $request)
    {
        DB::table('t_petugas_yayang')->insert([
            'PetugasID' => $request->petugasid,
            'NamaPetugas' => $request->nama,
            'Alamat' => $request->alamat,
            'Handphone' => $request->handphone,
            'Password' => $request->password,
            'Level' => $request->level
        ]);
        return redirect('master/petugas');
    }

    public function edit(Request $request, $id)
    {
        $data = DB::table('t_petugas_yayang')->where('PetugasID', $id)->first();
        $title = "Edit Data Petugas";
        return view('petugas_yayang.ubah', compact('data', 'title'));
    }

    public function update(Request $request, $id)
    {
        DB::table('t_petugas_yayang')->where('PetugasID', $id)->update([
            'NamaPetugas' => $request->nama,
            'Alamat' => $request->alamat,
            'Handphone' => $request->handphone,
            'Password' => $request->password,
            'Level' => $request->level,
        ]);
        return redirect('master/petugas');
    }

    public function delete($id)
    {
        DB::table('t_petugas_yayang')->where('PetugasID', $id)->delete();
        return redirect('master/petugas');
    }
}
