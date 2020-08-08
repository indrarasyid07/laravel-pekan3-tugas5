<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; 

class PertanyaanController extends Controller
{
    public function create(){
        return view('Hari5.pertanyaan');
    }

    public function store(Request $request){
        // dd($request->all());
        $query=DB::table('pertanyaan1')->insert([
            "judul"=>$request["judul"],
            "isi"=>$request["isi"]
        ]);

        return redirect('/pertanyaan')->with('success','Pertanyaan Berhasil Disimpan!');
    }

    public function index(){
        $pertanyaan1 = DB::table('pertanyaan1')->get();
        // dd($pertanyaan);
        return view('Hari5.index',compact('pertanyaan1'));
    }
}
