<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardControllerYayang extends Controller
{
    public function index()
    {
        $title = "Dashboard";
        $petugas = \DB::table('t_petugas_yayang')->count();
        $bagian = \DB::table('t_bagian_yayang')->count();
        $barang = \DB::table('t_barang_yayang')->count();
        $pengeluaran = \DB::table('t_pengeluaran_yayang')->count();
        return view('dashboard_yayang.index', compact('title', 'petugas', 'bagian', 'barang', 'pengeluaran'));
    }
}
