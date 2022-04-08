<?php
namespace App\Http\Controllers;

class DashboardController extends Controller 
{
    public function show()
    {
        $endek = $this->sparql->query('SELECT * WHERE{?edk a endek:KainEndek. ?edk endek:memilikiGambar ?gambar}ORDER BY ?edk');
        $result = [];
        foreach ($endek as $edk) {
            array_push($result, [
                'nama_endek' => $this->parseData($edk->edk->getUri()),
                'gambar' => $this->parseData($edk->gambar->getValue())
            ]);
        }
        return view('dashboard',[
            'title' => 'Dashboard',
            'list' => $result
        ]);
    }

}
?>