<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
    	$pegawai = \DB::table('pegawai')->paginate(10);

    	return view('pegawai/pegawai',['pegawai' => $pegawai]);
    }

    public function tambah(){
        return view('pegawai/pegawai_tambah', ['pegawai' => []]);
    }

    public function save(Request $request){
        \DB::table('pegawai')->insert([
            'nama_pegawai' => $request->nama_pegawai,
        ]);
        return redirect('/pegawai');
    }

    public function edit($id)
    {
        $pegawai = \DB::table('pegawai')->where('id_pegawai', $id)->get();
        return view('pegawai/pegawai_edit', ['pegawai' => $pegawai]);
    }

    public function update(Request $request)
    {
        \DB::table('pegawai')->where('id_pegawai',$request->id_pegawai)->update([
            'nama_pegawai' => $request->nama_pegawai,
        ]);
        return redirect('/pegawai');
    }

    public function delete($id)
{
	\DB::table('pegawai')->where('id_pegawai',$id)->delete();
	return redirect('/pegawai');
}
}
