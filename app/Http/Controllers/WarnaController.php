<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WarnaController extends Controller
{

        public function daftar()
    {
        //query untuk mengambil data tipe kulit skincare dan disimpan pada variabel result
        $warna = $this->sparql->query('SELECT * WHERE {?warna a endek:Warna} ORDER BY ?warna');
        $resultwarna = [];
        foreach($warna as $item){
            array_push($resultwarna, [
                'nama'      => $this->parseData($item->warna->getURI()),
            ]);
        }
        $data = [
            'warna' => $resultwarna
        ];
        return view('warnaendek.daftarwarna', $data, ['title' => 'Browsing']);
    }

        public function show($warna)
    {
         //query untuk mengambil data skincare berdasarkan tipe kulit tertentu dan disimpan pada variabel result
         $getendek = $this->sparql->query("SELECT * WHERE {?asendek endek:memilikiWarna endek:".$warna."; endek:memilikiGambar ?gambar .} ORDER BY ?warna");
         $hasil= [];
         $jumlah = 0;
         foreach($getendek as $item){
             array_push($hasil, [
                 'nama'            => $this->parseData($item->asendek->getUri()),
                 'gambar'        => $this->parseData($item->gambar->getValue())
                 
             ]);
             $jumlah = $jumlah + 1;
         }
        
       
         $data = [
             'endek'  => $hasil,
             'jumlah'    => $jumlah,
             'warna'     => $warna
         ];
 
         return view('warnaendek.endekwarna', $data, ['title' => 'Browsing']);

    }

}


