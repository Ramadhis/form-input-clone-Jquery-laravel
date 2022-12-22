<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\klub;

class SkorController extends Controller
{
    public function index()
    {
        
        return view('skor.index');
    }

    public function add()
    {
        $klub = klub::All();
        return view('skor.add',['klub' => $klub]);
    }

    public function insert(Request $req){
        dd($req);
    }
}
