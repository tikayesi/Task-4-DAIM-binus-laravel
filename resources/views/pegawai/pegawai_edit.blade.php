<!DOCTYPE html>
<html>
<head>
<title>Binus Task</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    @include('navigation.nav')
	<nav class="navbar navbar-light bg-light justify-content-between">
		<a class="navbar-brand">EDIT DATA PEGAWAI</a>
	  </nav>

	<div class="container">
        @foreach($pegawai as $r)
	<form action="/pegawai/update" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="id_barang" value="{{ $r->id_pegawai }}"><br>
			  <div class="col">
				Nama pegawai <input class="form-control" type="text" name="nama_pegawai"
                placeholder="Tulis Nama pegawai" required="required" value="{{ $r->nama_pegawai }}"> <br/>
			  </div>
              <div class="col">
				Username <input class="form-control" type="text" name="username"
                placeholder="Tulis Username" required="required" value="{{ $r->username }}"> <br/>
			  </div>
              <div class="col">
				Password <input class="form-control" type="password" name="password"
                placeholder="Tulis Password" required="required" value="{{ $r->password }}"> <br/>
			  </div>
              <div class="col">
				Alamat <input class="form-control" type="text" name="alamat_pegawai"
                placeholder="Tulis Alamat" required="required" value="{{ $r->alamat_pegawai }}"> <br/>
			  </div>
              <div class="col">
				Handphone <input class="form-control" type="number" name="hp_pegawai"
                placeholder="Tulis Nomor Handphone" required="required" value="{{ $r->hp_pegawai }}"> <br/>
			  </div>
              <div class="col">
				Nama bagian <input class="form-control" type="text" name="id_bagian"
                placeholder="Tulis Nama pegawai" required="required" value="{{ $r->id_bagian }}"> <br/>
			  </div>
		<input class="btn btn-success btn-sm" type="submit" value="Simpan Data">
        <a class="btn btn-warning btn-sm" href="/pegawai">Batal</a>
	</form>
    @endforeach
	</div>

</body>
</html>
