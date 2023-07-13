@extends('template.wrapper')
@section('title')
    {{ $title }}
@endsection
@section('content')
    <div class="row my-5">
        <h1>Edit Data Barang</h1>
        <form action="{{ url('master/barang/edit/' . $data->BarangID) }}" method='post'>
            {{ csrf_field() }}
            {{ method_field('put') }}
            <table>
                {{-- <input type="hidden" name="id_lama" value="{{ $data->id }}">    --}}
                <tr>
                    <td>Nama Barang </td>
                    <td><input type='text' name='nama' value="{{ $data->NamaBarang }}"></td>
                </tr>

                <tr>
                    <td>Satuan </td>
                    <td><input type='text' name='satuan' value="{{ $data->Satuan }}"></td>
                </tr>

                <tr>
                    <td>Harga </td>
                    <td><input type='text' name='harga' value="{{ $data->Harga }}"></td>
                </tr>

                <tr>
                    <td>Kategori ID </td>
                    <td><input type='text' name='kategoriid' value="{{ $data->KategoriID }}"></td>
                </tr>
            </table>
            <div class="ml-0 mt-3" style="width: 50%">
                <a href="{{ asset('master/barang') }}" class="btn btn-success">Kembali</a>
                <input type='submit' value='Simpan' class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection
