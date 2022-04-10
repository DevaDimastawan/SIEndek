@extends('layouts.main')
@section('container')
@if($jumlah > 0)
<div class="container">
    <div class="row">
        @foreach ($endek as $item)
            <div class="col-lg-3 col-md-6 col-sm-6 mb-2 justify-content-center">
                <div class="card mt-5 container">
                    <img src="/images/endek/{{ $item['gambar'] }}" class="card-img-top" style="width:200px; height:200px;" alt="Gambar {{ $item['nama'] }}.jpg">
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
          <p class="font-weight-normal ml-3">Tidak ada data endek dengan motif  {{ $sisir }}</p>
        @endif
@endsection
