@extends('layouts.main')
@section('container')
<div>
    <h1 class="pt-20 text-3xl font-semibold text-center">Browse Endek</h1>
    <div class="container">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2 mt-5">
                <div class="card-body">
                    <div class="row no-gutters align-items-center px-3">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Endek</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $list['jumlahendek']}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form action="" method="GET" id="cari_kriteria">
            <div class="row">
                <div class="col">
                    <p class="h5 text-dark mt-2">Pilih Motif</p>
                    <div class="dropdown"> 
                    <select class="btn btn-light dropdown-toggle mt-2 shadow" name="cari_motif" id="cari_motif">
                    <option value="">Pilihlah salah satu</option>
                    @foreach($list['listmotif'] as $item)
                        <option value="{{ $item['motif'] }}">{{ $item['motif'] }}</option>
                    @endforeach
                    </select>
                    </div>
                </div>
            </div> 
            <div class="container mt-3">
                <input type="submit" class="btn btn-primary" value="Submit" name="cari_kriteria">
                <input type="submit" class="btn btn-danger"  name="reset" value="Reset">
            </div>   
        </form>
        
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
         
    </div>
@endsection