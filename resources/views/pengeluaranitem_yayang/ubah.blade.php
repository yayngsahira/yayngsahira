@extends('template.wrapper')
@section('title')
    {{ $title }}
@endsection
@section('content')
    <div class="row my-5">
        <h1>Edit Data Pengeluaran Item</h1>
        <form action="{{ url('master/pengeluaranitem/edit/' . $data->ID) }}" method='post'>
            {{ csrf_field() }}
            {{ method_field('put') }}
            <table>
                {{-- <input type="hidden" name="id_lama" value="{{ $data->id }}">    --}}
                <tr>
                    <td>NO BK </td>
                    <td><input type='number' name='nobk' value="{{ $data->NoBK }}"></td>
                </tr>

                <tr>
                    <td>Barang ID </td>
                    <td><input type='text' name='barangid' value="{{ $data->BarangID }}"></td>
                </tr>

                <tr>
                    <td>Jumlah </td>
                    <td><input type='text' name='jumlah' value="{{ $data->Jumlah }}"></td>
                </tr>
            </table>
            <div class="ml-0 mt-3" style="width: 50%">
                <a href="{{ asset('master/pengeluaranitem') }}" class="btn btn-success">Kembali</a>
                <input type='submit' value='Simpan' class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection
