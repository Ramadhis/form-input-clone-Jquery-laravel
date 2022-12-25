<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\klub;
use App\Skor;


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
        // dd($req->klub1[0]);
        for ($i=0; $i <= count($req->input('klub1'))-1 ; $i++) { 
            $data[] = [
                'klub1' => $req->klub1[$i],
                'klub2' => $req->klub2[$i],
                'skor1' => $req->skor1[$i],
                'skor2' => $req->skor2[$i],
            ];
        }
        Skor::insert($data);
        return redirect('skor');
    }
}