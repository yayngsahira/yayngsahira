@extends('template.wrapper')
@section('title')
    {{ $title }}
@endsection
@section('content')
    <div class="row my-5">
        <h1>Edit Data Pengeluaran</h1>
        <form action="{{ url('master/pengeluaran/edit/' . $data->NoBK) }}" method='post'>
            {{ csrf_field() }}
            {{ method_field('put') }}
            <table>
                {{-- <input type="hidden" name="id_lama" value="{{ $data->id }}">    --}}
                <tr>
                    <td>Tanggal </td>
                    <td><input type='date' name='tanggal' value="{{ $data->Tanggal }}"></td>
                </tr>

                <tr>
                    <td>No Reff </td>
                    <td><input type='date' name='noreff' value="{{ $data->NoReff }}"></td>
                </tr>

                <tr>
                    <td>Bagian ID </td>
                    <td><input type='text' name='bagianid' value="{{ $data->BagianID }}"></td>
                </tr>

                <tr>
                    <td>Petugas ID </td>
                    <td><input type='text' name='petugasid' value="{{ $data->PetugasID }}"></td>
                </tr>

                <tr>
                    <td>Keterangan </td>
                    <td><input type='text' name='keterangan' value="{{ $data->Keterangan }}"></td>
                </tr>
            </table>
            <div class="ml-0 mt-3" style="width: 50%">
                <a href="{{ asset('master/pengeluaran') }}" class="btn btn-success">Kembali</a>
                <input type='submit' value='Simpan' class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection
