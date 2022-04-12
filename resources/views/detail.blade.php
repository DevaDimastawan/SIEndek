@extends('layouts.main')

@section('container')
    <div class="card mb-3 mt-5 container" style="margin:auto">
        <div class="row no-gutters">
            <div class="col">
                <img src="{{ asset('images/Endek/' . $detail[0]['Gambar']) }}" class="card-img" alt="..."
                    style="height:500px">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    @foreach ($detail as $item)
                        <h5 class="card-title">{{ str_replace('_', ' ', $item['Nama']) }}</h5>
                        <p class="card-text">{{ $item['Deskripsi'] }}</p>
                        <div class="container py-8 text-lg" style="border-radius:10px; background:#4065AE">
                            <div class="row pt-3">
                                <div class="col md-6">
                                    <p class="h5 py-4 px-5 text-light">Motif : {{ $item['Motif'] }}</p>
                                    <p class="h5 py-4 px-5 text-light">Sisir : {{ $item['Sisir'] }}</p>
                                    <p class="h5 py-4 px-5 text-light">As : {{ str_replace('_', ' ', $item['As']) }}</p>
                                    <p class="h5 py-4 px-5 text-light">Corak : {{ $item['Corak'] }}</p>
                                </div>
                                <div class="col md-6">
                                    <p class="h5 py-4 px-5 text-light">Bahan : {{ str_replace('_', ' ', $item['Bahan']) }}
                                    <p class="h5 py-4 px-5 text-light">Ukuran : {{ $item['UkuranKain'] }}</p>
                                    <p class="h5 py-4 px-5 text-light">Warna : {{ $item['Warna'] }}</p>
                                    <p class="h5 py-4 px-5 text-light">Kabupaten : {{ $item['Kabupaten'] }}</p>
                                </div>
                            </div>
                            
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
                                {{-- <div class="grid grid-cols-2 gap-8 ">
                                <div>
                                    <p class="text-light">Motif : {{ $item['Motif'] }}</p>
                                </div>
                                <div>
                                    <p class="text-light">Sisir : {{ $item['Sisir'] }}</p>
                                </div>
                                <div>
                                    <p class="text-light">As : {{ str_replace('_', ' ', $item['As']) }}</p>
                                </div>
                                <div>
                                    <p class="text-light">Corak : {{ $item['Corak'] }}</p>
                                </div>
                                <div>
                                    <p class="text-light">Bahan : {{ str_replace('_', ' ', $item['Bahan']) }}
                                </div>
                                <div>
                                    <p class="text-light">Ukuran : {{ $item['UkuranKain'] }}</p>
                                </div>
                                <div>
                                    <p class="text-light">Warna : {{ $item['Warna'] }}</p>
                                </div>
                                <div>
                                    <p class="text-light">Kabupaten : {{ $item['Kabupaten'] }}</p>
                                </div>
                            </div> --}}
                            {{-- <div class="col md-6">
                            
                        </div> --}}
@endsection
