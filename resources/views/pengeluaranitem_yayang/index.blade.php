@extends('template.wrapper')
@section('title')
    {{ $title }}
@endsection
@section('content')
    <div class="row my-5">
        <h3 class="fs-4 mb-3">Data Pengeluaran Item</h3>
        <div class="ml-0 mb-3" style="width: 25%">
            <a href="{{ route('tambahpengeluaranitem') }}" class="btn btn-primary col-6">Tambah</a>
        </div>
        <div class="row">
            <div class="col">
                <table id="tabel-data" class="table bg-white table-striped table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID</th>
                            <th>No BK</th>
                            <th>Barang ID</th>
                            <th>Jumlah</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item->ID }}</td>
                                <td>{{ $item->NoBK }}</td>
                                <td>{{ $item->BarangID }}</td>
                                <td>{{ $item->Jumlah }}</td>
                                <td>
                                    <a href="{{ url('master/pengeluaranitem/edit/' . $item->ID) }}"
                                        class="btn btn-sm btn-primary">Ubah</a>
                                    <a href="{{ url('master/pengeluaranitem/delete/' . $item->ID) }}"
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
