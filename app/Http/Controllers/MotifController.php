<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MotifController extends Controller
{

        public function daftar()
    {
         //query untuk mengambil data motif yang terdapat pada ontologi endek.owl 1 dan disimpan pada variabel resultmotif
        $motif = $this->sparql->query('SELECT * WHERE {?motif a endek:Motif} ORDER BY ?motif');
        $resultmotif = [];
        foreach($motif as $item){
            array_push($resultmotif, [
                'nama'      => $this->parseData($item->motif->getURI()),
            ]);
        }
        $data = [
            'motif' => $resultmotif
        ];
        return view('motifendek.daftarmotif', $data, ['title' => 'Browsing']);
    }

        public function show($motif)
    {
         //query untuk mengambil data motif tertentu dan disimpan pada variabel hasil
         $getendek = $this->sparql->query("SELECT * WHERE {?motif endek:memilikiMotif endek:".$motif."; endek:memilikiGambar ?gambar .} ORDER BY ?motif");
         $hasil= [];
         $jumlah = 0;
         foreach($getendek as $item){
             array_push($hasil, [
                 'nama'            => $this->parseData($item->motif->getUri()),
                 'gambar'        => $this->parseData($item->gambar->getValue())
                 
             ]);
             $jumlah = $jumlah + 1;
         }
        
       
         $data = [
             'endek'  => $hasil,
             'jumlah'    => $jumlah,
             'motif'     => $motif
         ];
 
         return view('motifendek.endekmotif', $data, ['title' => 'Browsing']);

    }

}


