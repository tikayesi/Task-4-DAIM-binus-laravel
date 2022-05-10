<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
    	$user = DB::table('user')->get();

    	return view('user',['user' => $user]);
    }

    public function tambah(){
        return view('user_tambah', ['user' => []]);
    }

    public function save(Request $request){
        DB::table('user')->insert([
            'nama_depan' => $request->nama_depan,
            'nama_belakang' => $request->nama_belakang,
            'username' => $request->username,
            'password' => $request->password,
            'alamat' => $request->alamat,
            'tanggal_lahir' => $request->tanggal_lahir,
            'gender' => $request->gender,
            'no_hp' => $request->no_hp,
            'id_role' => $request->id_role
        ]);
        return redirect('/user');
    }

    public function edit($id)
    {
        $user = DB::table('user')->where('id_user', $id)->get();
        return view('user_edit', ['user' => $user]);
    }

    public function update(Request $request)
    {
        DB::table('user')->where('id_user',$request->id_user)->update([
            'nama_depan' => $request->nama_depan,
            'nama_belakang' => $request->nama_belakang,
            'username' => $request->username,
            'password' => $request->password,
            'alamat' => $request->alamat,
            'tanggal_lahir' => $request->tanggal_lahir,
            'gender' => $request->gender,
            'no_hp' => $request->no_hp,
            'id_role' => $request->id_role
        ]);
        return redirect('/role');
    }

    public function delete($id)
{
	DB::table('user')->where('id_user',$id)->delete();
	return redirect('/user');
}

}
