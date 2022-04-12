<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrowsingController extends Controller

    {
        public function browsing(){

            //query untuk mengambil data skincare, merek, jenis, rentang usia, masalah kulit, tipe kulit, waktu penggunaan
            $motif = $this->sparql->query('SELECT * WHERE {?motif a endek:Motif} ORDER BY ?motif');
            $bahan = $this->sparql->query('SELECT * WHERE {?bahan a endek:Bahan} ORDER BY ?bahan');
            $sisir = $this->sparql->query('SELECT * WHERE {?sisir a endek:Sisir} ORDER BY ?sisir');
            $as = $this->sparql->query('SELECT * WHERE {?asendek a endek:AsKedetailanMotif} ORDER BY ?asendek');
            $ukuran = $this->sparql->query('SELECT * WHERE {?ukuran a endek:UkuranKain} ORDER BY ?ukuran');
            $warna = $this->sparql->query('SELECT * WHERE {?warna a endek:Warna} ORDER BY ?warna');
            $jumlahendek = $jumlahmotif = $jumlahbahan = $jumlahsisir = $jumlahas = $jumlahukuran = $jumlahwarna = 0;
            foreach($motif as $item){
                $jumlahmotif = $jumlahmotif + 1;
            }
            foreach($bahan as $item){
                $jumlahbahan = $jumlahbahan + 1;
            }
            foreach($sisir as $item){
                $jumlahsisir = $jumlahsisir + 1;
            }
            foreach($as as $item){
                $jumlahas = $jumlahas + 1;
            }
            foreach($ukuran as $item){
                $jumlahukuran = $jumlahukuran + 1;
            }
            foreach($warna as $item){
                $jumlahwarna = $jumlahwarna + 1;
            }
            $data = array(
                'jumlahmotif'       => $jumlahmotif,
                'jumlahbahan'       => $jumlahbahan,
                'jumlahsisir'       => $jumlahsisir,
                'jumlahas'          => $jumlahas,
                'jumlahukuran'      => $jumlahukuran,
                'jumlahwarna'       => $jumlahwarna
            );
    

        return view('browsing', ['data' => $data, 'title' => 'Browsing',  ]);
    }
}

//     // public function browse($cari_kriteria, $browse){
//         if($cari_kriteria == 'warna'){
//             $warna_endek= $this->sparql->query('SELECT * WHERE { ?kain endek:memilikiWarna endek:".$warna.");
//             $rowReq = [];
//             foreach ($warna_endek as $item) {
//                 array_push($rowReq, [
//                     'minMemori' => $this->parseData($item->minMemori->getValue()),
//                     'minProsesor' => $this->parseData($item->minProsesor->getValue()),
//                     'minSO' => $this->parseData($item->minSO->getValue()),
//                     'minRAM' => $this->parseData($item->minRAM->getValue())
//                 ]);
//             }
//             $handphone = $this->sparql->query('SELECT * WHERE{?hp handphone:memilikiGambar ?gambar.?hp handphone:nilaiHarga ?harga .?hp handphone:memilikiRAM ?ram .?ram handphone:nilaiRAM ?nilaiRAM FILTER(?nilaiRAM >= '.$rowReq[0]['minRAM']. ').?hp handphone:memilikiMemori ?memori .?memori handphone:nilaiMemori ?nilaiMemori FILTER(?nilaiMemori >= ' . $rowReq[0]['minMemori'] . ').?hp handphone:memilikiProsesor ?prosesor .?prosesor handphone:nilaiProsesor ?nilaiProsesor FILTER(?nilaiProsesor >= ' . $rowReq[0]['minProsesor'] . ').?hp handphone:memilikiSistemOperasi ?so .?so handphone:nilaiSistemOperasi ?nilaiSO FILTER(?nilaiSO >= ' . $rowReq[0]['minSO'] . ')}');
//         }
//         else{
//             $handphone = $this->sparql->query('SELECT * WHERE{?hp handphone:memiliki' . $kriteria . ' handphone:' . $jelajah . ' .?hp handphone:nilaiHarga ?harga .?hp handphone:memilikiGambar ?gambar} ORDER BY ?hp');
//         }
//         $resultHandphone = [];
//         foreach ($handphone as $item) {
//             array_push($resultHandphone, [
//                 'nama' => $this->parseData($item->hp->getUri()),
//                 'gambar' => $this->parseData($item->gambar->getValue()),
//                 'harga' => $this->parseData($item->harga->getValue()),
//             ]);
//         }
//         $data = [
//             'listHandphone' => $resultHandphone,
//             'count' => count($resultHandphone)
//         ];
//         return view('jelajah', [
//             'title' => 'Hasil Penjelajahan',
//             'page' => 'Hasil Penjelajahan',
//             'data' => $data
//         ]);
//     }   
//     // $motif = $this -> sparql -> query('SELECT * WHERE{?motif a endek:Motif}');
    
//     // $resultmotif=[];
//     // $count=0;
    
//     //     foreach($motif as $item){
//     //         array_push($resultmotif, [
//     //             'motif' => $this->parseData($item->motif->getUri())
//     //         ]);
//     //         $count=$count+1;
//     //     }
//     //     if ($request->has('cari_kriteria') != ''){
//     //         $resp = 1;
//     //         $i = 0;
//     //         $queryData=[];
//     //         if($request->cari_motif != ''){
//     //             $sql = 'SELECT * WHERE {?endek endek:memilikiMotif endek:'. $request->cari_motif. ' .?endek endek:memilikiGambar ?gambar}';
//     //             $queryData=$this->sparql->query($sql);
//     //         }
            
//     //         $resultendek = [];
//     //         foreach ($queryData as $item){
//     //             array_push($resultendek, [
//     //                 'nama' => $this->parseData($item->endek->getUri()),
//     //                 'gambar' => $this->parseData($item->gambar->getValue())
//     //             ]);
//     //         }
//     //         $jumlahendek = count($resultendek);
//     //     }
//     //     else{
//     //         $resultendek = [];
//     //         $jumlahendek = 0;
//     //         $resp = 0;
//     //         $sql=[];
//     //     }
    
//     //     $data = [
//     //         'listmotif' => $resultmotif,
//     //         "resp" =>$resp,
//     //         'jumlahendek' => $jumlahendek,
//     //         'listendek' => $resultendek
//     //     ];
        
//     //     return view('browsing',[
//     //         'title' => 'Browsing',
//     //         'page' => 'browsing',
//     //         'list' => $data,
//     //         'count' => $count
//     //     ]);
//     // }
// }   

// ?>