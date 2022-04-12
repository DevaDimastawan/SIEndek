@extends('layouts.main')
@section('container')
    <div class="py-22 d-block" style="background-image: url('images/endek app.jpg'); background-repeat:no-repeat; width:100%">
        <div class="display display-1 text-center pt-5 fw-semibold" style="color: white"> About <br> SIEndek</div>
        <p class="text-center pb-5 px-5 text-white">SIEndek merupakan sebuah aplikasi berbasis website yang memiliki
            informasi terkait endek. </p>
        <p class="text-center display-3 py-2 text-light fw-normal" style="background-color: #4065AE">Features</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col" data-aos="fade-up" data-aos-duration="1500">
                <img src="images/searching.png" alt="" width="420" class="d-block mx-auto mt-4">
            </div>
            <div class="col px-3" data-aos="fade-up" data-aos-duration="1500">
                <p class="display-1 mt-4">Searching</p>
                <p>Fitur Searching merupakan fitur pertama pada Website SIENDEK. Dimana pada fitur ini pengguna
                    dapat melakukan pencarian Endek dengan memilih beberapa kriteria yang ada pada website dan hasil
                    dari inputan pengguna tersebut akan menampilkan data sesuai dengan yang ada pada aplikasi.</p>
            </div>
            <div class="row mt-5">
                <div class="col p-10 ml-15" data-aos="fade-up" data-aos-duration="1500">
                    <p class="display-1 ml-10">Browsing</p>
                    <p class="ml-10">Fitur Browsing merupakan fitur yang memberikan pengguna bisa melakukan
                        penjelajahan dari data Endek yang ada pada aplikasi dengan memilih satu kriteria dari endek yaitu :
                        Motif,Sisir, As, Bahan, Ukuran, dan Warna.
                    </p>
                </div>
                <div class="col pt-10" data-aos="fade-up" data-aos-duration="1500">
                    <img src="images/browsing.png" alt="" width="420" class="d-block mx-auto">
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
@endsection
