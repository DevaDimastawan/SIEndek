@extends('layouts.main')
@section('container')
@if($jumlah > 0)
          <div class="row">
            @foreach($endek as $item)
              <div class="card border-warning text-dark my-2 mx-4 " style="width: 18rem; height:19rem">
                <img src="/images/endek/{{ $item['gambar']}}" class="card-img-top" style="height : 70%; width : 100%;" alt="Gambar {{ $item['nama'] }}.jpg">
                <div class=" text-center">
                    <h5 class="card-title">{{ str_replace('_',' ',$item['nama'])  }}</h5>
                    <a class="card-title  btn btn-sm btn-warning" href="/detail/{{$item['nama']}}" class="btn btn-primary">Detail</a>
                </div>
            </div>

            @endforeach
          </div>
        @else
          <p class="font-weight-normal ml-3">Tidak ada data endek dengan motif  {{ $motif }}</p>
        @endif
@endsection