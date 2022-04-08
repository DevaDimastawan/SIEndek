<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrowsingController extends Controller
{
    public function browsing(Request $request)
    {
    $motif = $this -> sparql -> query('SELECT * WHERE{?motif a endek:Motif}');
    
    $resultmotif=[];
    $count=0;
    
        foreach($motif as $item){
            array_push($resultmotif, [
                'motif' => $this->parseData($item->motif->getUri())
            ]);
            $count=$count+1;
        }
        if ($request->has('cari_kriteria') != ''){
            $resp = 1;
            $i = 0;
            $queryData=[];
            if($request->cari_motif != ''){
                $sql = 'SELECT * WHERE {?endek endek:memilikiMotif endek:'. $request->cari_motif. ' .?endek endek:memilikiGambar ?gambar}';
                $queryData=$this->sparql->query($sql);
            }
            
            $resultendek = [];
            foreach ($queryData as $item){
                array_push($resultendek, [
                    'nama' => $this->parseData($item->endek->getUri()),
                    'gambar' => $this->parseData($item->gambar->getValue())
                ]);
            }
            $jumlahendek = count($resultendek);
        }
        else{
            $resultendek = [];
            $jumlahendek = 0;
            $resp = 0;
            $sql=[];
        }
    
        $data = [
            'listmotif' => $resultmotif,
            "resp" =>$resp,
            'jumlahendek' => $jumlahendek,
            'listendek' => $resultendek
        ];
        
        return view('browsing',[
            'title' => 'Browsing',
            'page' => 'browsing',
            'list' => $data,
            'count' => $count
        ]);
    }
}   

?>