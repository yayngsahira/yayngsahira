@extends('template.wrapper')
@section('title')
    {{ $title }}
@endsection
@section('content')
    <div class="row my-5">
        <h1>Input Data Barang</h1>
        <form action="{{ asset('master/barang/tambah') }}" method='post'>
            {{ csrf_field() }}
            <table>
                <tr>
                    <td>Barang ID </td>
                    <td><input type='number' name='barangid'></td>
                </tr>

                <tr>
                    <td>Nama Barang </td>
                    <td><input type='text' name='nama'></td>
                </tr>

                <tr>
                    <td>Satuan </td>
                    <td><input type='text' name='satuan'></td>
                </tr>

                <tr>
                    <td>Harga </td>
                    <td><input type='text' name='harga'></td>
                </tr>

                <tr>
                    <td>Kategori ID </td>
                    <td><input type='text' name='kategoriid'></td>
                </tr>
            </table>
            <div class="ml-0 mt-3" style="width: 50%">
                <a href="{{ asset('master/barang') }}" class="btn btn-success">Kembali</a>
                <input type='submit' value='Simpan' class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection
