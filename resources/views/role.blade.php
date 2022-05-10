<!DOCTYPE html>
<html>
<head>
	<title>Tugas Binus</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<h3>List Role</h3>

	<a class="btn btn-success btn-sm" href="/role/tambah"> + Tambah Role </a>

	<br/>
	<br/>
    <div class="table-responsive">
	<table class="table table-striped table-hover">
		<tr>
            <th>No</th>
			<th>Nama</th>
			<th>Keterangan</th>
            <th>Aksi</th>
		</tr>
		@foreach($role as $key => $r)
		<tr>
            <td>{{ ++$key }}</td>
			<td>{{ $r->nama_role }}</td>
			<td>{{ $r->keterangan }}</td>
            <td>
				<a type="button" class="btn btn-warning" href="/role/edit/{{ $r->id_role }}">Edit</a>
				<a type="button" class="btn btn-danger" href="/role/delete/{{ $r->id_role }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    </div>

</body>
</html>
