<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
    	$barang = \DB::table('barang')->paginate(10);

    	return view('barang/barang',['barang' => $barang]);
    }

    public function tambah(){
        return view('barang/barang_tambah', ['barang' => []]);
    }

    public function save(Request $request){
        \DB::table('barang')->insert([
            'nama_barang' => $request->nama_barang,
        ]);
        return redirect('/barang');
    }

    public function edit($id)
    {
        $barang = \DB::table('barang')->where('id_barang', $id)->get();
        return view('barang/barang_edit', ['barang' => $barang]);
    }

    public function update(Request $request)
    {
        \DB::table('barang')->where('id_barang',$request->id_barang)->update([
            'nama_barang' => $request->nama_barang,
        ]);
        return redirect('/barang');
    }

    public function delete($id)
{
	\DB::table('barang')->where('id_barang',$id)->delete();
	return redirect('/barang');
}

}
