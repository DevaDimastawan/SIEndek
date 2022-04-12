<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchingController extends Controller
{   
    public function searching (Request $request) 
    {
        $motif = $this -> sparql -> query('SELECT * WHERE{?motif a endek:Motif} ORDER BY ?motif');
        $bahan = $this -> sparql -> query('SELECT * WHERE{?bahan a endek:menggunakanBahan} ORDER BY ?bahan');
        $asmotif = $this -> sparql -> query('SELECT * WHERE{?asmotif a endek:AsKedetailanMotif} ORDER BY ?asmotif');
        $sisir = $this -> sparql -> query('SELECT * WHERE{?sisir a endek:Sisir} ORDER BY ?sisir');
        $ukurankain = $this-> sparql -> query('SELECT * WHERE{?ukurankain a endek:UkuranKain} ORDER BY ?ukurankain');
        $warna = $this -> sparql -> query('SELECT * WHERE{?warna a endek:Warna} ORDER BY ?warna');

        
        $resultmotif=[];
        $resultbahan=[];
        $resultasmotif=[];
        $resultsisir=[];
        $resultukurankain=[];
        $resultwarna=[];

        foreach($motif as $item){
            array_push($resultmotif, [
                'motif' => $this->parseData($item->motif->getUri())
            ]);
        }
        foreach($bahan as $item){
            array_push($resultbahan, [
                'bahan' => $this->parseData($item->bahan->getUri())
            ]);
        }
        foreach($sisir as $item){
            array_push($resultsisir, [
                'sisir' => $this->parseData($item->sisir->getUri())
            ]);
        }
        foreach($asmotif as $item){
            array_push($resultasmotif, [
                'bahan' => $this->parseData($item->asmotif->getUri())
            ]);
        }
        foreach($ukurankain as $item){
            array_push($resultukurankain, [
                'ukurankain' => $this->parseData($item->ukurankain->getUri())
            ]);
        }
        foreach($warna as $item){
            array_push($resultwarna, [
                'warna' => $this->parseData($item->warna->getUri())
            ]);
        }
        $sql=null;
        if ($request->has('cari_kriteria') != ''){
            $resp = 1;
            $sql = 'SELECT * WHERE {';
            $i = 0;
            if($request->cari_motif != ''){
                if ( $i == 0 ){
                    $sql = $sql . '?endek endek:memilikiMotif endek:' . $request->cari_motif;
                    $i++;
                }
                else{
                    $sql = $sql . '. ?endek endek:memilikiMotif endek:' . $request->cari_motif;
                }
            }
            else {
                $sql = $sql;
            }
    
            if($request->cari_bahan != ''){
                if ( $i == 0 ){
                    $sql = $sql . '?endek endek:menggunakanBahan endek:' . $request->cari_bahan;
                    $i++;
                }
                else{
                    $sql = $sql . '. ?endek endek:menggunakanBahan endek:' . $request->cari_bahan;
                }
            }
            else {
                $sql = $sql;
            }

            if($request->cari_sisir != ''){
                if ( $i == 0 ){
                    $sql = $sql . '?endek endek:memilikiSisir endek:' . $request->cari_sisir;
                    $i++;
                }
                else{
                    $sql = $sql . '. ?endek endek:memilikiSisir endek:' . $request->cari_sisir;
                }
            }
            else{
                $sql = $sql;
            }
        
            if($request->cari_as != ''){
                if ( $i == 0 ){
                    $sql = $sql . '?endek endek:memilikiAs endek:' . $request->cari_as;
                    $i++;
                }
                else{
                    $sql = $sql . '. ?endek endek:memilikiAs endek:' . $request->cari_as;
                }
            }
            else{
                $sql = $sql;
            }
            if($request->cari_ukurankain != ''){
                if ( $i == 0 ){
                    $sql = $sql . '?endek endek:memilikiUkuranKain endek:' . $request->cari_ukurankain;
                    $i++;
                }
                else{
                    $sql = $sql . '. ?endek endek:memilikiUkuranKain endek:' . $request->cari_ukurankain;
                }
            }
            
            if($request->cari_warna!= ''){
                if ( $i == 0 ){
                    $sql = $sql . '?endek endek:memilikiWarna endek:' . $request->cari_warna;
                    $i++;
                }
                else{
                    $sql = $sql . '. ?endek endek:memilikiWarna endek:' . $request->cari_warna;
                }
            }
            else{
                $sql = $sql;
            }

            $sql = $sql . '} ORDER BY ?endek';
            $querydata = $this->sparql->query($sql);
            $resultendek = [];
            if($i===0){
                $resultendek =[];
            }
            else{
                foreach ($querydata as $item){
                    array_push($resultendek, [
                        'nama' => $this->parseData($item->endek->getUri())

                    ]);
                }
            }
            
            $jumlahendek = count($resultendek);
        }

        else{
            $resultendek = [];
            $jumlahendek = 0;
            $resp = 0;
        }

        $data = [
            'listmotif' => $resultmotif,
            'listsisir' => $resultsisir,
            'listbahan' => $resultbahan,
            'listas' => $resultasmotif,
            'listukurankain' => $resultukurankain,
            'listwarna' => $resultwarna,
            "resp" =>$resp,
            'jumlahendek' => $jumlahendek,
            'listendek' => $resultendek,
            'query' => $sql
        ];
       
        return view('searching',[
            'title' => 'Searching',
            'page' => 'seacrhing',
            'list' => $data
        ]);
    }
}
?>