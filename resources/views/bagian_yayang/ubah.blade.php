@extends('template.wrapper')
@section('title')
    {{ $title }}
@endsection
@section('content')
    <div class="row my-5">
        <h1>Edit Data Bagian</h1>
        <form action="{{ url('master/bagian/edit/' . $data->BagianID) }}" method='post'>
            {{ csrf_field() }}
            {{ method_field('put') }}
            <table>
                {{-- <input type="hidden" name="id_lama" value="{{ $data->id }}">    --}}
                <tr>
                    <td>Nama Bagian </td>
                    <td><input type='text' name='nama' value="{{ $data->NamaBagian }}"></td>
                </tr>

                <tr>
                    <td>Kepala Bagian </td>
                    <td><input type='text' name='kepala' value="{{ $data->KepalaBagian }}"></td>
                </tr>

                <tr>
                    <td>Telpon </td>
                    <td><input type='text' name='telpon' value="{{ $data->Telp }}"></td>
                </tr>
            </table>
            <div class="ml-0 mt-3" style="width: 50%">
                <a href="{{ asset('master/bagian') }}" class="btn btn-success">Kembali</a>
                <input type='submit' value='Simpan' class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection
