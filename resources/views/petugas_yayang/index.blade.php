@extends('template.wrapper')
@section('title')
    {{ $title }}
@endsection
@section('content')
    <div class="row my-5">
        <h3 class="fs-4 mb-3">Data Petugas</h3>
        <div class="ml-0 mb-3" style="width: 25%">
            <a href="{{ route('tambahpetugas') }}" class="btn btn-primary col-6">Tambah</a>
        </div>
        <div class="row">
            <div class="col">
                <table id="tabel-data" class="table bg-white table-striped table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Petugas ID</th>
                            <th>Nama Petugas</th>
                            <th>Alamat</th>
                            <th>Handphone</th>
                            <th>Password</th>
                            <th>Level</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item->PetugasID }}</td>
                                <td>{{ $item->NamaPetugas }}</td>
                                <td>{{ $item->Alamat }}</td>
                                <td>{{ $item->Handphone }}</td>
                                <td>{{ $item->Password }}</td>
                                <td>{{ $item->Level }}</td>
                                <td>
                                    <a href="{{ url('master/petugas/edit/' . $item->PetugasID) }}"
                                        class="btn btn-sm btn-primary">Ubah</a>
                                    <a href="{{ url('master/petugas/delete/' . $item->PetugasID) }}"
                                        class="btn btn-sm btn-danger">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
