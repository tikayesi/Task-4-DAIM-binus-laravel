<!DOCTYPE html>
<html>
<head>
<title>Binus Task</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

	<nav class="navbar navbar-light bg-light justify-content-between">
		<a class="navbar-brand">TAMBAH DATA USER</a>
	  </nav>

	<div class="container">
        @foreach($user as $u)
	<form action="/user/save" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $u->id_user }}"><br>
			  <div class="col">
				Nama Depan <input class="form-control" type="text" name="nama_depan"
                placeholder="Tulis Nama Depan" value="{{ $u->nama_depan }}" required="required"> <br/>
			  </div>
			  <div class="col">
				Nama Belakang <input class="form-control" type="text" name="nama_belakang"
                placeholder="Tulis Nama Belakang" value="{{ $u->nama_belakang }}" required="required"> <br/>
			  </div>
              <div class="col">
				Username <input class="form-control" type="text" name="username"
                placeholder="Tulis Username" value="{{ $u->username }}" required="required"> <br/>
			  </div>
              <div class="col">
				Password <input class="form-control" type="password" name="password"
                placeholder="Tulis Passwprd" value="{{ $u->password }}" required="required"> <br/>
			  </div>
              <div class="col">
				Alamat <input class="form-control" type="text" name="alamat"
                placeholder="Tulis Alamat" value="{{ $u->alamat }}" required="required"> <br/>
			  </div>
              <div class="col">
				Tanggal Lahir <input class="form-control" type="text" name="tanggal_lahir"
                placeholder="Tulis Tanggal Lahir" value="{{ $u->tanggal_lahir }}" required="required"> <br/>
			  </div>
              <div class="col">
				Gender <input class="form-control" type="text" name="gender"
                placeholder="Tulis Gender" value="{{ $u->gender }}" required="required"> <br/>
			  </div>
              <div class="col">
				No HP <input class="form-control" type="text" name="no_hp"
                placeholder="Tulis No Hp" value="{{ $u->no_hp }}" required="required"> <br/>
			  </div>
              <div class="col">
				Role <input class="form-control" type="text" name="id_role"
                placeholder="Tulis Role" value="{{ $u->id_role }}" required="required"> <br/>
			  </div>
		<input class="btn btn-success btn-sm" type="submit" value="Simpan Data">
        <a class="btn btn-warning btn-sm" href="/user">Batal</a>
	</form>
    @endforeach
	</div>

</body>
</html>
