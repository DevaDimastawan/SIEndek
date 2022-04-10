<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UkuranController extends Controller
{

        public function daftar()
    {
        //query untuk mengambil data tipe kulit skincare dan disimpan pada variabel result
        $ukuran = $this->sparql->query('SELECT * WHERE {?ukuran a endek:UkuranKain} ORDER BY ?ukuran');
        $resultukuran = [];
        foreach($ukuran as $item){
            array_push($resultukuran, [
                'nama'      => $this->parseData($item->ukuran->getURI()),
            ]);
        }
        $data = [
            'ukuran' => $resultukuran
        ];
        return view('ukuranendek.daftarukuran', $data, ['title' => 'Browsing']);
    }

        public function show($ukuran)
    {
         //query untuk mengambil data skincare berdasarkan tipe kulit tertentu dan disimpan pada variabel result
         $getendek = $this->sparql->query("SELECT * WHERE {?ukuran endek:memilikiUkuranKain endek:".$ukuran."; endek:memilikiGambar ?gambar .} ORDER BY ?ukuran");
         $hasil= [];
         $jumlah = 0;
         foreach($getendek as $item){
             array_push($hasil, [
                 'nama'            => $this->parseData($item->ukuran->getUri()),
                 'gambar'        => $this->parseData($item->gambar->getValue())
                 
             ]);
             $jumlah = $jumlah + 1;
         }
        
       
         $data = [
             'endek'  => $hasil,
             'jumlah'    => $jumlah,
             'ukuran'     => $ukuran
         ];
 
         return view('ukuranendek.endekukuran', $data, ['title' => 'Browsing']);

    }

}


