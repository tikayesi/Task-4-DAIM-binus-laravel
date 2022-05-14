<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BagianController extends Controller
{
    public function index()
    {
    	$bagian = \DB::table('bagian')->paginate(10);

    	return view('bagian/bagian',['bagian' => $bagian]);
    }

    public function tambah(){
        return view('bagian/bagian_tambah', ['bagian' => []]);
    }

    public function save(Request $request){
        \DB::table('bagian')->insert([
            'nama_bagian' => $request->nama_bagian,
        ]);
        return redirect('/bagian');
    }

    public function edit($id)
    {
        $bagian = \DB::table('bagian')->where('id_bagian', $id)->get();
        return view('bagian/bagian_edit', ['bagian' => $bagian]);
    }

    public function update(Request $request)
    {
        \DB::table('bagian')->where('id_bagian',$request->id_bagian)->update([
            'nama_bagian' => $request->nama_bagian,
        ]);
        return redirect('/bagian');
    }

    public function delete($id)
{
	\DB::table('bagian')->where('id_bagian',$id)->delete();
	return redirect('/bagian');
}

}
