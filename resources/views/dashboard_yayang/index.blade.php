@extends('template.wrapper')
@section('title')
    {{ $title }}
@endsection
@section('content')
    <div class="row g-3 my-2">
        <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    <h3 class="fs-2">
                        @if ($petugas == '')
                            -
                        @else
                            {{ $petugas }}
                        @endif
                    </h3>
                    <p class="fs-5">petugas</p>
                </div>
                <i class="fas fa-book fs-1 primary-text border rounded-full secondary-bg p-3"></i>
            </div>
        </div>

        <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    <h3 class="fs-2">
                        @if ($bagian == '')
                            -
                        @else
                            {{ $bagian }}
                        @endif
                    </h3>
                    <p class="fs-5">bagian</p>
                </div>
                <i class="fas fa-hand-holding-usd fs-1 primary-text border rounded-full secondary-bg p-3"></i>
            </div>
        </div>

        <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    <h3 class="fs-2">
                        @if ($barang == '')
                            -
                        @else
                            {{ $barang }}
                        @endif
                    </h3>
                    <p class="fs-5">barang</p>
                </div>
                <i class="fas fa-user fs-1 primary-text border rounded-full secondary-bg p-3"></i>
            </div>
        </div>

        <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    <h3 class="fs-2">
                        @if ($pengeluaran == '')
                            -
                        @else
                            {{ $pengeluaran }}
                        @endif
                    </h3>
                    <p class="fs-5">pengeluaran</p>
                </div>
                <i class="fas fa-user fs-1 primary-text border rounded-full secondary-bg p-3"></i>
            </div>
        </div>
    </div>
@endsection
