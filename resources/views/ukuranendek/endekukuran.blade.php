@extends('layouts.main')
@section('container')
    @if ($jumlah > 0)
        <div class="container">
            <div class="row">
                <div class="row no-gutters align-items-center px-3">
                    <div class="col">
                        <div class="col-xl-3 col-md-6 mb-2 pt-4">
                            <div class="card border-left-primary shadow h-100 py-2 container mt-3 mr-3">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center px-3">
                                        <div class="col container">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Data</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300">{{ count($endek) }}</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($endek as $item)
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-2 justify-content-center">
                        <div class="card mt-5 container">
                            <img src="/images/Endek/{{ $item['gambar'] }}" class="card-img-top"
                                style="width:200px; height:200px;" alt="Gambar {{ $item['nama'] }}.jpg">
                            <div class="card-body">
                                <h5 class="card-title">{{ str_replace('_', ' ', $item['nama']) }}</h5>
                                <a href="/detail/{{ $item['nama'] }}" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="font-weight-normal ml-3">Tidak ada data endek dengan motif {{ $ukuran }}</p>
    @endif
@endsection
