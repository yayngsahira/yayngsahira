<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;

class PengeluaranControllerYayang extends Controller
{
    public function index()
    {
        $title = "Pengeluaran";
        $data = DB::table('t_pengeluaran_yayang')->get();
        return view('pengeluaran_yayang.index', compact('title', 'data'));
    }

    public function tambah()
    {
        $title = "Tambah Pengeluaran";
        return view('pengeluaran_yayang.tambah', compact('title'));
    }

    public function store(Request $request)
    {
        DB::table('t_pengeluaran_yayang')->insert([
            'NoBK' => $request->nobk,
            'Tanggal' => $request->tanggal,
            'NoReff' => $request->noreff,
            'BagianID' => $request->bagianid,
            'PetugasID' => $request->petugasid,
            'Keterangan' => $request->keterangan,
        ]);
        return redirect('master/pengeluaran');
    }

    public function edit(Request $request, $id)
    {
        $data = DB::table('t_pengeluaran_yayang')->where('NoBK', $id)->first();
        $title = "Edit Data Pengeluaran";
        return view('pengeluaran_yayang.ubah', compact('data', 'title'));
    }

    public function update(Request $request, $id)
    {
        DB::table('t_pengeluaran_yayang')->where('NoBK', $id)->update([
            //'NoBK' => $request->nobk,
            'Tanggal' => $request->tanggal,
            'NoReff' => $request->noreff,
            'BagianID' => $request->bagianid,
            'PetugasID' => $request->petugasid,
            'Keterangan' => $request->keterangan,
        ]);
        return redirect('master/pengeluaran');
    }

    public function delete($id)
    {
        DB::table('t_pengeluaran_yayang')->where('NoBK', $id)->delete();
        return redirect('master/pengeluaran');
    }
}
