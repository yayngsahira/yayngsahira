@extends('template.wrapper')
@section('title')
    {{ $title }}
@endsection
@section('content')
    <div class="row my-5">
        <h3 class="fs-4 mb-3">Data Barang</h3>
        <div class="ml-0 mb-3" style="width: 25%">
            <a href="{{ route('tambahbarang') }}" class="btn btn-primary col-6">Tambah</a>
        </div>
        <div class="row">
            <div class="col">
                <table id="tabel-data" class="table bg-white table-striped table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Barang ID</th>
                            <th>Nama Barang</th>
                            <th>Satuan</th>
                            <th>Harga</th>
                            <th>Kategori ID</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item->BarangID }}</td>
                                <td>{{ $item->NamaBarang }}</td>
                                <td>{{ $item->Satuan }}</td>
                                <td>{{ $item->Harga }}</td>
                                <td>{{ $item->KategoriID }}</td>
                                <td>
                                    <a href="{{ url('master/barang/edit/' . $item->BarangID) }}"
                                        class="btn btn-sm btn-primary">Ubah</a>
                                    <a href="{{ url('master/barang/delete/' . $item->BarangID) }}"
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
