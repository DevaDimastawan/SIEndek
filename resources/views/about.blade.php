@extends('layouts.main')

@section('container')

<div class="py-20" style="background-image: url('images/endek app.jpg');">
  <h1 class="text-3xl font-semibold text-center pt-10 text-white"> About <br> SIEndek App</h1>
  <p class="text-center pb-5 px-5 text-white">SIEndek App merupakan sebuah aplikasi berbasis website yang memiliki informasi terkait endek. </p>
</div>
<div>
  <p class="text-center display-3 py-2 text-light fw-normal" style="background-color: #4065AE">Features</p>
  <div class="">
    <div class="container">
      <div class="row">
        <div class="col" data-aos="fade-up" data-aos-duration="1500">
          <img src="images/searching.png" alt="" width="420" class="d-block mx-auto mt-4">
        </div>
        <div class="col px-3" data-aos="fade-up" data-aos-duration="1500">
          <p class="display-1 mt-4">Searching</p>
          <p>Fitur Searching merupakan fitur pertama pada Website SIENDEK. Dimana pada fitur ini pengguna dapat melakukan pencarian Endek dengan memilih beberapa kriteria yang ada pada website dan hasil dari inputan pengguna tersebut akan menampilkan data sesuai dengan yang ada pada aplikasi.</p>
        </div>
        <div class="row">
          <div class="col p-10 ml-15" data-aos="fade-up" data-aos-duration="1500">
            <p class="display-1 ml-10">Browsing</p>
            <p class="ml-10">Fitur Browising merupakan fitur yang dimana pengguna bisa melakukan penjelajahan dari data Endek yang ada pada aplikasi dengan memilih satu kriteria yaitu Motif</p>
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