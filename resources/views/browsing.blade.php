@extends('layouts.main')
@section('container')
    <div class=" container mt-5 browsing">
        <div class="row text-center justify-content-center">
            <div class="col-lg-4 mb-3 mx-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card-body">
                    <h5 class="card-title">Motif</h5>
                    <p class="card-text">Jumlah : {{ $data['jumlahmotif'] }}</p>
                    <a href="{{ route('daftarmotif') }}" class="btn btn-primary">Tampilkan</a>
                </div>
            </div>
            <div class="col-lg-4 mb-3 mx-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card-body">
                    <h5 class="card-title">Bahan</h5>
                    <p>Jumlah : {{ $data['jumlahbahan'] }}</p>
                    <a href="{{ route('daftarbahan') }}" class="btn btn-primary">Tampilkan</a>
                </div>
            </div>

            <div class="col-lg-4 mb-3 mx-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card-body">
                    <h5 class="card-title">Sisir</h5>
                    <p>Jumlah : {{ $data['jumlahsisir'] }}</p>
                    <a href="{{ route('daftarsisir') }}" class="btn btn-primary">Tampilkan</a>
                </div>
            </div>

            <div class="col-lg-4 mb-3 mx-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card-body">
                    <h5 class="card-title">As</h5>
                    <p>Jumlah : {{ $data['jumlahas'] }}</p>
                    <a href="{{ route('daftaras') }}" class="btn btn-primary">Tampilkan</a>
                </div>
            </div>

            <div class="col-lg-4 mb-3 mx-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card-body">
                    <h5 class="card-title">Ukuran</h5>
                    <p>Jumlah : {{ $data['jumlahukuran'] }}</p>
                    <a href="{{ route('daftarukuran') }}" class="btn btn-primary">Tampilkan</a>
                </div>
            </div>


            <div class="col-lg-4 mb-3 mx-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card-body">
                    <h5 class="card-title">Warna</h5>
                    <p>Jumlah : {{ $data['jumlahwarna'] }}</p>
                    <a href="{{ route('daftarwarna') }}" class="btn btn-primary">Tampilkan</a>
                </div>
            </div>
        </div>
    </div>

    {{-- <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4 class="title"><a href="">Magni Dolores</a></h4>
                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon"><i class="bx bx-world"></i></div>
                        <h4 class="title"><a href="">Nemo Enim</a></h4>
                        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section> --}}
@endsection
