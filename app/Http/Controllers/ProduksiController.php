<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduksiController extends Controller
{
    public function index()
    {
    	$produksi = \DB::table('produksi')->paginate(10);

    	return view('produksi/produksi',['produksi' => $produksi]);
    }

    public function tambah(){
        return view('produksi/produksi_tambah', ['produksi' => []]);
    }

    public function save(Request $request){
        \DB::table('produksi')->insert([
            'id_pesanan' => $request->id_pesanan,
            'id_barang' => $request->id_barang,
            'jumlah_produksi' => $request->jumlah_produksi,
            'lead_time' => $request->lead_time
        ]);
        return redirect('/produksi');
    }

    public function edit($id)
    {
        $produksi = \DB::table('produksi')->where('id_produksi', $id)->get();
        return view('produksi/produksi_edit', ['produksi' => $produksi]);
    }

    public function update(Request $request)
    {
        \DB::table('produksi')->where('id_produksi',$request->id_produksi)->update([
            'id_pesanan' => $request->id_pesanan,
            'id_barang' => $request->id_barang,
            'jumlah_produksi' => $request->jumlah_produksi,
            'lead_time' => $request->lead_time
        ]);
        return redirect('/produksi');
    }

    public function delete($id)
{
	\DB::table('produksi')->where('id_produksi',$id)->delete();
	return redirect('/produksi');
}

}
