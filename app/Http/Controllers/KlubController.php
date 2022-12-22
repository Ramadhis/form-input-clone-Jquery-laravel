<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\klub;

class KlubController extends Controller
{
    public function index()
    {
        $klub = klub::All();

        return view('klub.klub',['klub' => $klub]);
    }

    public function add()
    {
        return view('klub.add');
    }

    public function insert(Request $req){
        $nama = $req->nama;
        $cek = klub::where('nama',$nama)->first();
        if($cek != null){
            $msg = "data duplikat";
            return back()->with(
                [
                    'msg' => $msg,
                ]
            );
        }
        $data = [
            'nama' => $nama,
            'kota' => $req->klub_kota,
        ];
        $create = klub::create($data);
        
        return redirect('klub');
    }

    public function get_klub_data() {
        $klub = klub::Select('nama')->get();
        return response()->json(['success' => $klub]);
    }
}