@extends('layouts.main')

@section('container')
<div class="container-fluid" data-aos="fade" data-aos-duration="1500">
  <div class="p-5">
      <div class="container p-5 pt-3 pb-6" style="border-radius: 10px; background-color:#293A5E;">
          <h1 class="display-5 fw-bold text-light">Searching</h1>
          <p class="fs-4" style="color: #DBE6FD">Masukan Kriteria Endek Yang Ingin Dicari :</p>
          <form action="" method="GET" id="cari_kriteria ">
              <div class="row">
                <div class="col">
                  <p class="h4 text-white mt-2">Kriteria 1 Motif</p>
              <div class="dropdown"> 
               <select class="btn dropdown-toggle mt-2" name="cari_motif" id="cari_motif" style=" background-color: white">
                 <option value="">Pilihlah salah satu</option>
                 <option value="Flora">Flora</option>
                 <option value="Fauna">Fauna</option>
                 <option value="Figuratif">Figuratif</option>
                 <option value="Dekoratif">Dekoratif</option>
                 <option value="Geometris">Geometris</option>
               </select>
              </div>
            </div>
            
            <div class="col">
              <p class="h4 text-white mt-2">Kriteria 2 Bahan</p>
              <div class="dropdown"> 
                <select class="btn dropdown-toggle mt-2" name="cari_bahan" id="cari_bahan" style=" background-color: white">
                  <option value="">Pilihlah salah satu</option>
                  <option value="Benang_Katun">Benang Katun</option>
                  <option value="Benang_Sutra">Benang Sutra</option>
                </select>
               </div>
            </div>
          </div>
    
          <div class="row">
            <div class="col">
              <p class="h4 text-white mt-2">Kriteria 3 Sisir</p>
              <div class="dropdown"> 
                <select class="btn dropdown-toggle mt-2" name="cari_sisir" id="cari_sisir" style=" background-color: white">
                  <option value="">Pilihlah salah satu</option>
                  <option value="70">Sisir 70</option>
                  <option value="80">Sisir 80</option>
                </select>
               </div>
            </div>
    
            <div class="col">
              <p class="h4 text-white mt-2">Kriteria 4 AS (Ketajaman Motif)</p>
              <div class="dropdown"> 
                <select class="btn dropdown-toggle mt-2" name="cari_as" id="cari_as" style=" background-color: white">
                  <option value="">Pilihlah salah satu</option>
                  <option value="As_2">As 2</option>
                  <option value="As_3">As 3</option>
                  <option value="As_4">As 4</option>
                </select>
               </div>
            </div>
          </div>
          <div class="row">
    
            <div class="col">
              <p class="h4 text-white mt-2">Kriteria 5 Ukuran Kain</p>
              <div class="dropdown"> 
                <select class="btn dropdown-toggle mt-2" name="cari_ukurankain" id="cari_ukurankain" style=" background-color: white">
                  <option value="">Pilihlah salah satu</option>
                  <option value="2.25x1.05m">Ukuran 2.25x1.05m</option>
                  <option value="2.25x1.5m">Ukuran 2.25x1.5m</option>
                </select>
               </div>
            </div>
            <div class="col">
              <p class="h4 text-white mt-2">Kriteria 6 Pilihan Warna</p>
                <div class="dropdown"> 
                  <select class="btn dropdown-toggle mt-2" name="cari_warna" id="cari_warna" style=" background-color: white">
                    <option value="">Pilihlah salah satu</option>
                    @foreach($list['listwarna'] as $item)
                      <option value="{{ $item['warna'] }}">{{ $item['warna'] }} </option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
        </div>
          <div class="mt-4 container">
            <input class="btn btn-primary fs-4" type="submit" name="cari_kriteria" value="Cari">
            <input class="btn btn-danger fs-4" type="submit" name="reset" value="Reset">
            <div class="col mb-3">
              @if($list['resp']==0)
              <h4></h4>
              @else
              <div class=" mt-3 card btn bg-secondary bg-opacity-100" style="width: fit-content;">
                <tr><h4>Query</h4>
                  <th>{{ $list['query']}}</th>
                </tr>

              </div>
              @endif
            </div>
          </div>
      
       
      </form>

      <div class="container p-5 pt-3 pb-4 mt-4"
          style="border-radius: 10px; background-color:#293A5E; position:relative;">
          <p class="display-5 fw-bold" style="color: white">Hasil Pencarian</p>
          @if ($list['resp'] == 0)
              <h4 class="small font-weight-bold text-light"> Belum terdapat pencarian data<span></h4>
          @elseif($list['resp'] == 1 && $list['jumlahendek'] == 0)
              <h4 class="small font-weight-bold"> Data tidak ditemukan<span></h4>
          @else
              <ol class="list-group list-group-numbered">
                  @foreach ($list['listendek'] as $item)
                      <li class="text-white hover:text-blue-300"><a class="text-white hover:text-blue-300 text-decoration-none">
                             <a href="/detail/{{ $item['nama'] }}">{{ str_replace('_', ' ', $item['nama']) }}</a>
                      </li>
                  @endforeach
              </ol>
          @endif
      </div>
  </div>
</div>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script>
  var select = document.getElementById('cari_warna');
  multi(select, [])
</script>

@endsection
