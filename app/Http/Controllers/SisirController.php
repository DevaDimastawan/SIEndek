<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SisirController extends Controller
{

        public function daftar()
    {
         //query untuk mengambil data sisir yang terdapat pada ontologi endek.owl 1 dan disimpan pada variabel resultsisir
        $sisir = $this->sparql->query('SELECT * WHERE {?sisir a endek:Sisir} ORDER BY ?sisir');
        $resultsisir = [];
        foreach($sisir as $item){
            array_push($resultsisir, [
                'nama'      => $this->parseData($item->sisir->getURI()),
            ]);
        }
        $data = [
            'bahan' => $resultsisir
        ];
        return view('sisirendek.daftarsisir', $data, ['title' => 'Browsing']);
    }

        public function show($sisir)
    {
         //query untuk mengambil data sisir tertentu dan disimpan pada variabel hasil
         $getendek = $this->sparql->query("SELECT * WHERE {?sisir endek:memilikiSisir endek:".$sisir."; endek:memilikiGambar ?gambar .} ORDER BY ?sisir");
         $hasil= [];
         $jumlah = 0;
         foreach($getendek as $item){
             array_push($hasil, [
                 'nama'            => $this->parseData($item->sisir->getUri()),
                 'gambar'        => $this->parseData($item->gambar->getValue())
                 
             ]);
             $jumlah = $jumlah + 1;
         }
        
       
         $data = [
             'endek'  => $hasil,
             'jumlah'    => $jumlah,
             'sisir'     => $sisir
         ];
 
         return view('sisirendek.endeksisir', $data, ['title' => 'Browsing']);

    }

}


