<!DOCTYPE html>
<html>
<head>
<title>Binus Task</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

	<nav class="navbar navbar-light bg-light justify-content-between">
		<a class="navbar-brand">EDIT DATA ROLE</a>
	  </nav>

	<div class="container">
        @foreach($role as $r)
	<form action="/role/update" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $r->id_role }}"><br>
			  <div class="col">
				Nama Role <input class="form-control" type="text" name="nama_role"
                placeholder="Tulis Nama Role" required="required" value="{{ $r->nama_role}}"> <br/>
			  </div>
			  <div class="col">
                Keterangan <textarea class="form-control" name="keterangan">{{ $r->keterangan}}</textarea><br/>
            </div>
		<input class="btn btn-success btn-sm" type="submit" value="Simpan Data">
        <a class="btn btn-warning btn-sm" href="/role">Batal</a>
	</form>
    @endforeach
	</div>

</body>
</html>
