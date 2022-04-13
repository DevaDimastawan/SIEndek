@extends('layouts.main')

@section('container')
    <!-- Home Content - Carousel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src={{ asset('images/endek-carousel.png') }} class="d-block w-100" alt="Endek Carousel"
                    style="filter: brightness(35%)">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <img src={{ asset('images/endek-carousel-22.png') }} class="d-block w-100" alt="Endek Carousel"
                    style="filter: brightness(35%)">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <img src={{ asset('images/endek-carousel-33.png') }} class="d-block w-100" alt="Endek Carousel"
                    style="filter: brightness(35%); width:800px height:225px">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Home Content -->
    <div class=" container mt-5">
        <div class="row">
            <div class="pl-5 col-md-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column">
                <div class="container">
                    <h1 class="text-4xl font-bold" data-aos="fade-up" style="color: #4065AE">Endek</h1>
                    <p class="text-justify" data-aos="fade-up" data-aos-delay="400 py-3">Endek adalah salah satu hasil
                        kerajinan tenun yang memiliki ragam hias yang beragam dan dikerjakan dengan menggunakan teknik ikat
                        tunggal atau single ikat. Kain endek mulai berkembang sejak abad ke-16, yaitu masa pemerintahan Raja
                        Dalem Waturenggong di Gelgel, Klungkung. Kain endek ini kemudian berkembang di sekitar daerah
                        Klungkung, salah satunya adalah di Desa Sulang. Di desa Sulang, kain tenun endek dipelopori oleh
                        Wayan Rudja yang saat itu memiliki tenaga kerja sekitar 200 karyawan.</p>
                    <p class="text-justify" data-aos="fade-up" data-aos-delay="400 py-3">Meskipun kain endek telah ada
                        sejak Kerajaan Gelgel, tetapi endek baru mulai berkembang pesat di desa Sulang setelah masa
                        kemerdekaan. Perkembangan kain endek di Desa Sulang dimulai pada tahun 1975 dan kemudian berkembang
                        pesat pada tahun 1985 hingga sekarang. Kain endek memiliki ciri khas lewat corak, motif, warna yang
                        digunakan. Setiap simbol dalam kain endek sarat akan makna tersendiri. Kain ini memiliki beberapa
                        motif yang Jenis motif pada kain endek yaitu Dekoratif,Fauna,Figuratif,Flora,Geometris</p>
                    <div data-aos="fade-up" data-aos-delay="800">
                        <a class="btn btn-primary" href="/dashboard" role="button">Lihat Endek</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                <img src="images/home1.png" class="img-fluid animated" alt="" style="vh-100">
            </div>
        </div>
    </div>

    <div class=" container mt-5">
    <div class="row">
        <div class="pl-5 col-md-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column">
            <div class="container">
                <img class="mx-auto py-3 img-fluid animated" style="vh-100"
                        src={{ asset('images/endek-preserving.png') }} alt="Endek Preserving" />
            </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 mt-5">
                <div data-aos="fade-up" data-aos-delay="900">
                    <h1 class="fw-bold py-3" style="color: #4065AE; font-size: 65px;">Let's Preserving</h1>
                </div>
                <div data-aos="fade-up" data-aos-delay="900">
                    <h1 class="py-3" style="font-size: 65px;">Our Heritage</h1>
                </div>
                <div data-aos="fade-up" data-aos-delay="900">
                    <h1 class="py-3" style="font-size: 65px;">About</h1>
                </div>
                <div data-aos="fade-up" data-aos-delay="900">
                    <h1 class="fw-bold py-3" style="color: #4065AE; font-size: 65px;">Endek</h1>
                </div>
                <div data-aos="fade-up" data-aos-delay="900">
                    <h1 class="pt-3" style="font-size: 65px;">From This Website</h1>
                </div>
            </div>
        </div>
    </div>










    

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
@endsection
