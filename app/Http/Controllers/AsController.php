<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsController extends Controller
{

        public function daftar()
    {
         //query untuk mengambil data askedetailanmotif yang terdapat pada ontologi endek.owl 1 dan disimpan pada variabel resultbahan
        $asendek = $this->sparql->query('SELECT * WHERE {?asendek a endek:AsKedetailanMotif} ORDER BY ?asendek');
        $resultasendek = [];
        foreach($asendek as $item){
            array_push($resultasendek, [
                'nama'      => $this->parseData($item->asendek->getURI()),
            ]);
        }
        $data = [
            'asendek' => $resultasendek
        ];
        return view('asendek.daftaras', $data, ['title' => 'Browsing']);
    }

        public function show($asendek)
    {
          //query untuk mengambil data as yang terdapat pada ontologi endek.owl 1 dan disimpan pada variabel hasil
         $getendek = $this->sparql->query("SELECT * WHERE {?asendek endek:memilikiAs endek:".$asendek."; endek:memilikiGambar ?gambar .} ORDER BY ?asendek");
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
             'asendek'     => $asendek
         ];
 
         return view('asendek.endekas', $data, ['title' => 'Browsing']);

    }

}


