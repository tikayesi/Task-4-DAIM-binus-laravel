<!DOCTYPE html>
<html>
<head>
<title>Binus Task</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    @include('navigation.nav')
	<nav class="navbar navbar-light bg-light justify-content-between">
		<a class="navbar-brand">EDIT DATA BAGIAN</a>
	  </nav>

	<div class="container">
        @foreach($bagian as $r)
	<form action="/bagian/update" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="id_bagian" value="{{ $r->id_bagian }}"><br>
			  <div class="col">
				Nama Bagian <input class="form-control" type="text" name="nama_bagian"
                placeholder="Tulis Nama Bagian" required="required" value="{{ $r->nama_bagian}}"> <br/>
			  </div>
		<input class="btn btn-success btn-sm" type="submit" value="Simpan Data">
        <a class="btn btn-warning btn-sm" href="/bagian">Batal</a>
	</form>
    @endforeach
	</div>

</body>
</html>
