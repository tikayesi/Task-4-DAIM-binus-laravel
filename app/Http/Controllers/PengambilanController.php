<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengambilanController extends Controller
{
    public function index()
    {
    	$pengambilan = \DB::table('pengambilan')->paginate(10);

    	return view('pengambilan/pengambilan',['pengambilan' => $pengambilan]);
    }

    public function tambah(){
        return view('pengambilan/pengambilan_tambah', ['pengambilan' => []]);
    }

    public function save(Request $request){
        \DB::table('pengambilan')->insert([
            'nama_pengambil' => $request->nama_pengambil,
            'id_barang' => $request->id_barang,
            'jumlah_pengambilan' => $request->jumlah_pengambilan
        ]);
        return redirect('/pengambilan');
    }

    public function edit($id)
    {
        $pengambilan = \DB::table('pengambilan')->where('id_pengambilan', $id)->get();
        return view('pengambilan/pengambilan_edit', ['pengambilan' => $pengambilan]);
    }

    public function update(Request $request)
    {
        \DB::table('pengambilan')->where('id_pengambilan',$request->id_pengambilan)->update([
            'nama_pengambil' => $request->nama_pengambil,
            'id_barang' => $request->id_barang,
            'jumlah_pengambilan' => $request->jumlah_pengambilan
        ]);
        return redirect('/pengambilan');
    }

    public function delete($id)
{
	\DB::table('pengambilan')->where('id_pengambilan',$id)->delete();
	return redirect('/pengambilan');
}

}
