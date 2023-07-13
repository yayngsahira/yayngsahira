@extends('template.wrapper')
@section('title')
    {{ $title }}
@endsection
@section('content')
    <div class="row my-5">
        <h1>Input Data Petugas</h1>
        <form action="{{ asset('master/petugas/tambah') }}" method='post'>
            {{ csrf_field() }}
            <table>
                <tr>
                    <td>Petugas ID </td>
                    <td><input type='number' name='petugasid'></td>
                </tr>

                <tr>
                    <td>Nama </td>
                    <td><input type='text' name='nama'></td>
                </tr>

                <tr>
                    <td>Alamat </td>
                    <td><input type='text' name='alamat'></td>
                </tr>

                <tr>
                    <td>Handphone </td>
                    <td><input type='text' name='handphone'></td>
                </tr>

                <tr>
                    <td>Password </td>
                    <td><input type='text' name='password'></td>
                </tr>

                <tr>
                    <td>Level </td>
                    <td><input type='text' name='level'></td>
                </tr>

            </table>
            <div class="ml-0 mt-3" style="width: 50%">
                <a href="{{ asset('master/petugas') }}" class="btn btn-success">Kembali</a>
                <input type='submit' value='Simpan' class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection
