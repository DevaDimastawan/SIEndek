<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class Searching2Controller extends Controller
{
    
    public function index(Request $request){
        
        if($request->has('cari_endek')!='' && $request->cari_namaEndek !=''){
            
            $resp = 1;
            $sql = "SELECT ?endek
            (COALESCE (?gambar,?missing) as ?gambarnull) 
                WHERE{VALUES ?missing {'missing.jpg'}
                {?endek a endek:KainEndek}
  OPTIONAL{?endek endek:memilikiGambar ?gambar}} ORDER BY ?endek";
            
            $queryData = $this->sparql->query($sql);
            $resultEndek = [];
            foreach($queryData as $item){
                array_push($resultEndek,[
                    'nama'=> str_replace('_',' ',$this->parseData($item->endek->getUri())),
                    'gambar'=>$this->parseData($item->gambarnull->getValue())
                ]);
            }
            
            // @dd($resultEndek);
            $resultSearching=[];
            
            for($i=0;$i<count($resultEndek);$i++){
                if(preg_match("/".$request->cari_namaEndek."/i", $resultEndek[$i]['nama'])){
                    array_push($resultSearching,[
                        'nama' => $resultEndek[$i]['nama'],
                        'gambar' => $resultEndek[$i]['gambar']
                    ]);
                }
            }
            
            $jumlahEndek = count($resultSearching);
        }
        else{
            $resultSearching=[];
            $jumlahEndek=0;
            $resp=0;
            $sql='';
        }
        
        $data =[
            'hasilSearching'=>$resultSearching,
            'jumlahEndek'=>$jumlahEndek,
            'resp'=>$resp
        ];
        return view('searching2',[
            'title'=>'Searching Endek Berdasarkan Nama Endek',
            'data'=>$data,
            'sql'=>$sql
        ]);
    }
    
}
