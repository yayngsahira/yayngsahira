@extends('template.wrapper')
@section('title')
    {{ $title }}
@endsection
@section('content')
    <div class="row my-5">
        <h1>Input Data Pengeluaran Item</h1>
        <form action="{{ asset('master/pengeluaranitem/tambah') }}" method='post'>
            {{ csrf_field() }}
            <table>
                <tr>
                    <td>ID </td>
                    <td><input type='number' name='id'></td>
                </tr>

                <tr>
                    <td>No BK </td>
                    <td><input type='number' name='nobk'></td>
                </tr>

                <tr>
                    <td>Barang ID </td>
                    <td><input type='text' name='barangid'></td>
                </tr>

                <tr>
                    <td>Jumlah </td>
                    <td><input type='number' name='jumlah'></td>
                </tr>
            </table>
            <div class="ml-0 mt-3" style="width: 50%">
                <a href="{{ asset('master/pengeluaranitem') }}" class="btn btn-success">Kembali</a>
                <input type='submit' value='Simpan' class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection
