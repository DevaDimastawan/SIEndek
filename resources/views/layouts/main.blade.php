<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="icon" href={{ asset('images/favicon.ico') }}>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400&display=swap" rel="stylesheet">
    <title>SIEndek | {{ $title }}</title>

    <style>
        body {
            font-family: 'Fira Sans', sans-serif;
        }
        
        .browsing .card-body{
        padding: 30px;
        position: relative;
        overflow: hidden;
        background: #fff;
        box-shadow: 0 0 29px 0 rgba(68, 88, 144, 0.12);
        transition: all 0.3s ease-in-out;
        border-radius: 8px;
        z-index: 1;
        }
        .browsing .card-body:hover::before{
        background: #106eea;
        top: 0;
        border-radius: 0px;
        
        }
        .browsing .card-body::before{
        content: "";
        position: absolute;
        background: #cbe0fb;
        right: 0;
        left: 0;
        bottom: 0;
        top: 100%;
        transition: all 0.3s;
        z-index: -1;
        }
        .browsing .card-body:hover{
        color: white
        }
        .daftarmotif{
        transition:.5s;
        
        }

        .daftarmotif:hover{
        transform:scale(1.1);
        }
        .daftarbahan{
        transition:.5s;
        
        }

        .daftarbahan:hover{
        transform:scale(1.1);
        }
        .daftaras{
        transition:.5s;
        
        }

        .daftaras:hover{
        transform:scale(1.1);
        }
        .daftarukuran{
        transition:.5s;
        
        }

        .daftarukuran:hover{
        transform:scale(1.1);
        }
        .daftarwarna{
        transition:.5s;
        
        }

        .daftarwarna:hover{
        transform:scale(1.1);
        }

        .daftarsisir{
        transition:.5s;
        
        }

        .daftarsisir:hover{
        transform:scale(1.1);
        }

        .browsing .card-body:hover .btn{
        background-color: white !important;
        color: #106eea !important;
        }
        .endek{
        color: white
        }

        .endek:hover{
        color: #FBBD5A
        }
        .text-justify{
            text-align: justify
        }
    </style>

</head>

<body class="position-static">
    <!--Nav Bar-->

    @include('partials.navbar')

    <div>
        @yield('container')
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Footer-->

    <script src="{{ asset('js/aos.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js"
        integrity="sha512-FHZVRMUW9FsXobt+ONiix6Z0tIkxvQfxtCSirkKc5Sb4TKHmqq1dZa8DphF0XqKb3ldLu/wgMa8mT6uXiLlRlw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            AOS.init({
          duration: 1000,
          easing: 'ease-in-out',
          once: true,
          mirror: false
        });
        </script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    -->
</body>
@include('partials.footer')

</html>
