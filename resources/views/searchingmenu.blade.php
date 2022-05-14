@extends('layouts.main')
@section('container')
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-4 mb-3 searching1">
                <div class="card shadow-sm mb-4 mt-4 mx-5" data-aos="fade-up" data-aos-delay="400"
                    style="width: 18rem; border-radius:10px ">
                    <div class="card-body">
                        <img src="images/search1.png" alt="" width="100px" class="d-block mx-auto">
                        <h5 class="card-title text-center">Searching</h5>
                        <p class="card-text text-justify">Pengguna dapat melakukan pencarian Kain Endek dengan melakukan
                            input kriteria berupa komponen kain endek pada aplikasi SIEndek.</p>
                        <a href="/searching" class="btn btn-primary">Klik Disini</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3 searching2">
                <div class="searching2 card shadow-sm mb-4 mt-4 mx-5 " data-aos="fade-up" data-aos-delay="400"
                    style="width: 18rem; border-radius:10px;">
                    <div class="card-body">
                        <img src="images/search2.png" alt="" width="100px" class="d-block mx-auto">
                        <h5 class="card-title text-center">Simple Searching</h5>
                        <p class="card-text text-justify">Pengguna dapat melakukan pencarian Kain Endek yang ada di aplikasi
                            SIEndek dengan cara menulis nama endek yang diinginkan.</p>
                        <a href="/searching2" class="btn btn-primary">Klik Disini</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
