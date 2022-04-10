@extends('layouts.main')
@section ('container')
<div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center px-3">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Data)</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $data['count']}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    @foreach($list['listendek'] as $item)
    <div class="col-md-3"> 
        <div class="card mt-4" style="width: 18rem;">
            <img src="{{ asset('images/Endek/'.$item['gambar'])}}" class="card-img-top" alt="..." style="width:200px; height:200px;">
            <div class="card-body">
            <h5 class="card-title">{{ str_replace('_',' ',$item ['nama'])}}</h5>
            <a href="/detail/{{ $item['nama'] }}" class="btn btn-primary">Lihat Detail</a>
            </div>
        </div>  
    </div>
    @endforeach
</div>   
@endsection