@extends('layouts.main')
@section('container')
    <div class="container">
        <p class="h3 mt-5">Searching Endek Berdasarkan Nama Endek</p>
        <div class="card shadow-sm">
            <div class="card-body">
                <form method="GET" action="" id="cari_endek">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Ketikan Nama Endek</label>
                        <input type="text" name="cari_namaEndek"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <input type="submit" class="btn btn-primary" name="cari_endek" value="Cari">
                    <input class="btn btn-danger" type="submit" name="reset" value="Reset">
                </form>
            </div>
        </div>
        <div class="card shadow-sm mb-4 mt-4">
            
            <div class="card-header py-3  bg-primary rounded">
                <h6 class="m-0 text-light text-center">Hasil Pencarian</h6>
            </div>
            <div class="card-body">
                @if ($data['resp'] == 0)
                    <h4 class="small font-weight-bold">Belum terdapat pencarian data<span> </h4>
                @elseif($data['resp'] == 1 && $data['jumlahEndek'] == 0)
                    <h4 class="small font-weight-bold">Data tidak ditemukan</h4>
                @else
                    <div class="row" id="hasilSearching">
                        @foreach ($data['hasilSearching'] as $item)
                            <div class="col-md-6 col-lg-3">
                                <div class="card card-hover mb-4">
                                    <img src="{{ asset('images/endek/' . $item['gambar'] . '') }}"
                                        style="opacity: 0.8; width:100%; height:200px" alt="{{ $item['nama'] }}">
                                    <div class="card-body">
                                        <a href="/detail/{{ str_replace(' ','_',$item['nama']) }}" class="text-decoration-none text-secondary">
                                            <h5 class="text-center">{{ str_replace('_', ' ', $item['nama']) }}</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
