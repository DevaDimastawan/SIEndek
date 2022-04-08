<?php
namespace App\Http\Controllers;

class DetailController extends Controller 
{
    public function index($namaendek){
        $detail = $this->sparql->query('SELECT * WHERE
        {VALUES ?Endek{endek:'.$namaendek.'}.
            ?Endek endek:memilikiMotif ?Motif.
            ?Endek endek:memilikiDeskripsi ?Deskripsi.
            ?Endek endek:menggunakanBahan ?Bahan.
            ?Endek endek:memilikiUkuranKain ?UkuranKain.
            ?Endek endek:memilikiAs ?AsKedetailanMotif.
            ?Endek endek:memilikiWarna ?Warna.
            ?Endek endek:memilikiSisir ?Sisir.
            ?Endek endek:memilikiCorak ?Corak.
            ?Endek endek:berasalDariKabupaten ?Kabupaten.
            ?Endek endek:memilikiGambar ?Gambar
            
        }');
        $result=[];
        foreach ($detail as $dtl) {
            array_push($result, [
                'Nama' =>$this->parseData($dtl->Endek->getUri()),
                'Deskripsi' => $this->parseData($dtl->Deskripsi->getValue()),
                'Motif' => $this->parseData($dtl->Motif->getUri()),
                'Bahan' => $this->parseData($dtl->Bahan->getUri()),
                'UkuranKain' => $this->parseData($dtl->UkuranKain->getUri()),
                'As' => $this->parseData($dtl->AsKedetailanMotif->getUri()),
                'Warna' => $this->parseData($dtl->Warna->getUri()),
                'Sisir' => $this->parseData($dtl->Sisir->getUri()),
                'Corak' => $this->parseData($dtl->Corak->getUri()),
                'Kabupaten' => $this->parseData($dtl->Kabupaten->getUri()),
                'Gambar' => $this->parseData($dtl->Gambar->getValue())
            ]);
        }
        
        return view('detail', [
            "title" => 'Detail Endek',
            "page" => "detail",
            "detail" => $result
        ]);
    }  
    }


?>