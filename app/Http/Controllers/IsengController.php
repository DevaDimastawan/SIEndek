<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Iseng;


class IsengController extends Controller
{
    public function index()
    {
        return view('iseng', [
            "title" => "Iseng" ,
            "posts" => iseng:: all()
        ]);
        
    }
    public function show($slug)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => iseng::find($slug)
    
        ]);
    }
}
