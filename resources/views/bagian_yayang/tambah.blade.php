@extends('template.wrapper')
@section('title')
    {{ $title }}
@endsection
@section('content')
    <div class="row my-5">
        <h1>Input Data Bagian</h1>
        <form action="{{ asset('master/bagian/tambah') }}" method='post'>
            {{ csrf_field() }}
            <table>
                <tr>
                    <td>Bagian ID </td>
                    <td><input type='number' name='bagianid'></td>
                </tr>

                <tr>
                    <td>Nama Bagian </td>
                    <td><input type='text' name='nama'></td>
                </tr>

                <tr>
                    <td>Kepala Bagian </td>
                    <td><input type='text' name='kepala'></td>
                </tr>

                <tr>
                    <td>Telpon </td>
                    <td><input type='text' name='telpon'></td>
                </tr>
            </table>
            <div class="ml-0 mt-3" style="width: 50%">
                <a href="{{ asset('master/bagian') }}" class="btn btn-success">Kembali</a>
                <input type='submit' value='Simpan' class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection
