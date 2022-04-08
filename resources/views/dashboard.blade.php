@extends('layouts.main')

@section('container')
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
                                    <i class="fas fa-calendar fa-2x text-gray-300">{{ count($list) }}</i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h1 class="text-center mt-3 text-3xl font-bold">Dashboard</h1>
    <p class="text-center mt-3 text-lg">Here are the <span class="text-indigo-500">collections of our Endek</span>.</p>
</div>
    <div class="container">
        <div class="row">
        @foreach($list as $edk)
            <div class="col-lg-3 col-md-6 col-sm-6 mb-2 justify-content-center">
                <div class="card mt-5 container">
                    <img src="images/endek/{{ $edk['gambar'] }}" class="card-img-top" alt="..." style="width:200px; height:200px;">
                    <div class="card-body">
                        <h5 class="card-title">{{ str_replace('_',' ',$edk['nama_endek'])  }}</h5>
                        <?php $nama_endek = str_replace(' ','_',$edk['nama_endek']) ?>
                        <a href="/detail/{{$edk['nama_endek']}}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
