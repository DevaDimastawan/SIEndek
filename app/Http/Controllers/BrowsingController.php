<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrowsingController extends Controller

    {
        public function browsing(){

            //query untuk mengambil data endek, motif, bahan, sisir, as, ukuran, warna
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

 ?>