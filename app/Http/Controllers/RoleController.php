<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    public function index()
    {
    	$role = DB::table('role')->get();

    	return view('role',['role' => $role]);
    }

    public function tambah(){
        return view('role_tambah', ['role' => []]);
    }

    public function save(Request $request){
        DB::table('role')->insert([
            'nama_role' => $request->nama_role,
            'keterangan' => $request->keterangan,
        ]);
        return redirect('/role');
    }

    public function edit($id)
    {
        $role = DB::table('role')->where('id_role', $id)->get();
        return view('role_edit', ['role' => $role]);
    }

    public function update(Request $request)
    {
        DB::table('role')->where('id_role',$request->id_role)->update([
            'nama_role' => $request->nama_role,
            'keterangan' => $request->keterangan,
        ]);
        return redirect('/role');
    }

    public function delete($id)
{
	DB::table('role')->where('id_role',$id)->delete();
	return redirect('/role');
}

}
