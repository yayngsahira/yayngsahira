@extends('template.wrapper')
@section('title')
    {{ $title }}
@endsection
@section('content')
    <div class="row my-5">
        <h3 class="fs-4 mb-3">Data Bagian</h3>
        <div class="ml-0 mb-3" style="width: 25%">
            <a href="{{ route('tambahbagian') }}" class="btn btn-primary col-6">Tambah</a>
        </div>
        <div class="row">
            <div class="col">
                <table id="tabel-data" class="table bg-white table-striped table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Bagian ID</th>
                            <th>Nama Bagian</th>
                            <th>Kepala Bagian</th>
                            <th>Telpon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item->BagianID }}</td>
                                <td>{{ $item->NamaBagian }}</td>
                                <td>{{ $item->KepalaBagian }}</td>
                                <td>{{ $item->Telp }}</td>
                                <td>
                                    <a href="{{ url('master/bagian/edit/' . $item->BagianID) }}"
                                        class="btn btn-sm btn-primary">Ubah</a>
                                    <a href="{{ url('master/bagian/delete/' . $item->BagianID) }}"
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
