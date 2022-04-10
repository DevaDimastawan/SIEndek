<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BahanController extends Controller
{

        public function daftar()
    {
        //query untuk mengambil data tipe kulit skincare dan disimpan pada variabel result
        $bahan = $this->sparql->query('SELECT * WHERE {?bahan a endek:Bahan} ORDER BY ?bahan');
        $resultbahan = [];
        foreach($bahan as $item){
            array_push($resultbahan, [
                'nama'      => $this->parseData($item->bahan->getURI()),
            ]);
        }
        $data = [
            'bahan' => $resultbahan
        ];
        return view('bahanendek.daftarbahan', $data, ['title' => 'Browsing']);
    }

        public function show($bahan)
    {
         //query untuk mengambil data skincare berdasarkan tipe kulit tertentu dan disimpan pada variabel result
         $getendek = $this->sparql->query("SELECT * WHERE {?bahan endek:menggunakanBahan endek:".$bahan."; endek:memilikiGambar ?gambar .} ORDER BY ?bahan");
         $hasil= [];
         $jumlah = 0;
         foreach($getendek as $item){
             array_push($hasil, [
                 'nama'            => $this->parseData($item->bahan->getUri()),
                 'gambar'        => $this->parseData($item->gambar->getValue())
                 
             ]);
             $jumlah = $jumlah + 1;
         }
        
       
         $data = [
             'endek'  => $hasil,
             'jumlah'    => $jumlah,
             'bahan'     => $bahan
         ];
 
         return view('bahanendek.endekbahan', $data, ['title' => 'Browsing']);

    }

}


