<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index()
    {
    	$pemesanan = \DB::table('pemesanan')->paginate(10);

    	return view('pemesanan/pemesanan',['pemesanan' => $pemesanan]);
    }

    public function tambah(){
        return view('pemesanan/pemesanan_tambah', ['pemesanan' => []]);
    }

    public function save(Request $request){
        \DB::table('pemesanan')->insert([
            'nama_pemesan' => $request->nama_pemesanan,
            'id_barang' => $request->id_barang,
            'jumlah_pesanan' => $request->jumlah_pesanan,
            'proses' => $request->proses
        ]);
        return redirect('/pemesanan');
    }

    public function edit($id)
    {
        $pemesanan = \DB::table('pemesanan')->where('id_pesanan', $id)->get();
        return view('pemesanan/pemesanan_edit', ['pemesanan' => $pemesanan]);
    }

    public function update(Request $request)
    {
        \DB::table('pemesanan')->where('id_pesanan',$request->id_pemesanan)->update([
            'nama_pemesan' => $request->nama_pemesanan,
            'id_barang' => $request->id_barang,
            'jumlah_pesanan' => $request->jumlah_pesanan,
            'proses' => $request->proses
        ]);
        return redirect('/pemesanan');
    }

    public function delete($id)
{
	\DB::table('pemesanan')->where('id_pesanan',$id)->delete();
	return redirect('/pemesanan');
}

}
