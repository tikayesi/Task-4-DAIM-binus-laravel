<!DOCTYPE html>
<html>
<head>
<title>Binus Task</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    @include('navigation.nav')
	<nav class="navbar navbar-light bg-light justify-content-between">
		<a class="navbar-brand">TAMBAH DATA PEGAWAI</a>
	  </nav>

	<div class="container">
	<form action="/pegawai/save" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
			  <div class="col">
				Nama pegawai <input class="form-control" type="text" name="nama_pegawai"
                placeholder="Tulis Nama pegawai" required="required"> <br/>
			  </div>
              <div class="col">
				Username <input class="form-control" type="text" name="username"
                placeholder="Tulis Username" required="required"> <br/>
			  </div>
              <div class="col">
				Password <input class="form-control" type="password" name="password"
                placeholder="Tulis Password" required="required"> <br/>
			  </div>
              <div class="col">
				Alamat <input class="form-control" type="text" name="alamat"
                placeholder="Tulis Alamat" required="required"> <br/>
			  </div>
              <div class="col">
				Handphone <input class="form-control" type="number" name="handphone"
                placeholder="Tulis Nomor Handphone" required="required"> <br/>
			  </div>
              <div class="col">
				Nama bagian <input class="form-control" type="text" name="id_bagian"
                placeholder="Tulis Nama pegawai" required="required"> <br/>
			  </div>
		<input class="btn btn-success btn-sm" type="submit" value="Simpan Data">
        <a class="btn btn-warning btn-sm" href="/pegawai">Batal</a>
	</form>
	</div>

</body>
</html>
