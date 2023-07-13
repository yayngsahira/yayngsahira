@extends('template.wrapper')
@section('title')
    {{ $title }}
@endsection
@section('content')
    <div class="row my-5">
        <h1>Input Data Pengeluaran</h1>
        <form action="{{ asset('master/pengeluaran/tambah') }}" method='post'>
            {{ csrf_field() }}
            <table>
                <tr>
                    <td>No BK </td>
                    <td><input type='number' name='nobk'></td>
                </tr>

                <tr>
                    <td>Tanggal </td>
                    <td><input type='date' name='tanggal'></td>
                </tr>

                <tr>
                    <td>No Reff </td>
                    <td><input type='date' name='noreff'></td>
                </tr>

                <tr>
                    <td>Bagian ID </td>
                    <td><input type='text' name='bagianid'></td>
                </tr>

                <tr>
                    <td>Petugas ID </td>
                    <td><input type='text' name='petugasid'></td>
                </tr>

                <tr>
                    <td>Keterangan </td>
                    <td><input type='text' name='keterangan'></td>
                </tr>
            </table>
            <div class="ml-0 mt-3" style="width: 50%">
                <a href="{{ asset('master/pengeluaran') }}" class="btn btn-success">Kembali</a>
                <input type='submit' value='Simpan' class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection
