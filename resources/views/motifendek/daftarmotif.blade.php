@extends('layouts.main')
@section('container')
    <div class="container mt-5">
        <div class="row justify-content-center mt-5">
            @foreach ($motif as $item)
                <div class="text-dark my-2 mx-4 daftarmotif" style="width:200px;">
                    <div style="width: 200px; height:200px; border-radius:10px; background-color:white; box-shadow: 0 0 29px 0 rgba(68, 88, 144, 0.12); font-size:20px"  class=" bg-blue-800 d-flex justify-content-center align-items-center">
                        <a class="card-title" style="text-decoration:none"
                            href="{{ route('showendekmotif', [$item['nama']]) }}">{{ $item['nama'] }} <i
                                class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </div>
                    </div>
            @endforeach
        </div>
    </div>
@endsection
