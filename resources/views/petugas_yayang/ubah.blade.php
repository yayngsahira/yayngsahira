@extends('template.wrapper')
@section('title')
    {{ $title }}
@endsection
@section('content')
    <div class="row my-5">
        <h1>Edit Data Petugas</h1>
        <form action="{{ url('master/petugas/edit/' . $data->PetugasID) }}" method='post'>
            {{ csrf_field() }}
            {{ method_field('put') }}
            <table>
                {{-- <input type="hidden" name="id_lama" value="{{ $data->id }}">    --}}
                <tr>
                    <td>Nama </td>
                    <td><input type='text' name='nama' value="{{ $data->NamaPetugas }}"></td>
                </tr>

                <tr>
                    <td>Alamat </td>
                    <td><input type='text' name='alamat' value="{{ $data->Alamat }}"></td>
                </tr>

                <tr>
                    <td>Handphone </td>
                    <td><input type='text' name='handphone' value="{{ $data->Handphone }}"></td>
                </tr>

                <tr>
                    <td>Password </td>
                    <td><input type='text' name='password' value="{{ $data->Password }}"></td>
                </tr>

                <tr>
                    <td>Level </td>
                    <td><input type='text' name='level' value="{{ $data->Level }}"></td>
                </tr>

            </table>
            <div class="ml-0 mt-3" style="width: 50%">
                <a href="{{ asset('master/petugas') }}" class="btn btn-success">Kembali</a>
                <input type='submit' value='Simpan' class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection
