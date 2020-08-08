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

    public function show($id){
        $pertanyaan = DB::table('pertanyaan1')->where('id',$id)->first();
        return view('Hari5.show', compact('pertanyaan'));
    }

    public function edit($id){
        $pertanyaan = DB::table('pertanyaan1')->where('id',$id)->first();
        return view('Hari5.edit', compact('pertanyaan'));
    }

    public function update($id, Request $request){
        $query= DB::table('pertanyaan1')
                    ->where('id',$id)
                    ->update([
                        'judul'=>$request['judul'],
                        'isi'=>$request['isi']
                    ]);
        return redirect('/pertanyaan')->with('success','Berhasil Update Question!');
    }
    public function destroy($id){
        $query= DB::table('pertanyaan1')
                    ->where('id',$id)
                    ->delete();
        return redirect('pertanyaan')->with('success','Question berhasil Dihapus!');
    }
}