<!DOCTYPE html>
<html>
<head>
<title>Binus Task</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    @include('navigation.nav')
	<nav class="navbar navbar-light bg-light justify-content-between">
		<a class="navbar-brand">EDIT DATA barang</a>
	  </nav>

	<div class="container">
        @foreach($barang as $r)
	<form action="/barang/update" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="id_barang" value="{{ $r->id_barang }}"><br>
			  <div class="col">
				Nama barang <input class="form-control" type="text" name="nama_barang"
                placeholder="Tulis Nama barang" required="required" value="{{ $r->nama_barang}}"> <br/>
			  </div>
		<input class="btn btn-success btn-sm" type="submit" value="Simpan Data">
        <a class="btn btn-warning btn-sm" href="/barang">Batal</a>
	</form>
    @endforeach
	</div>

</body>
</html>
