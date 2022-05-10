<!DOCTYPE html>
<html>
<head>
	<title>Tugas Binus</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<h3>List User</h3>

	<a class="btn btn-success btn-sm" href="/user/tambah"> + Tambah User </a>

	<br/>
	<br/>
    <div class="table-responsive">
	<table class="table table-striped table-hover">
		<tr>
            <th>No</th>
			<th>Nama Depan</th>
			<th>Nama Belakang</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Gender</th>
            <th>No Hp</th>
            <th>Role</th>
		</tr>
		@foreach($user as $key => $u)
		<tr>
            <td>{{ ++$key }}</td>
			<td>{{ $u->nama_depan }}</td>
			<td>{{ $u->nama_belakang }}</td>
            <td>{{ $u->alamat }}</td>
            <td>{{ $u->tanggal_lahir }}</td>
            <td>{{ $u->gender }}</td>
            <td>{{ $u->no_hp }}</td>
            <td>{{ $u->id_role }}</td>
            <td>
				<a type="button" class="btn btn-warning" href="/user/edit/{{ $r->id_user }}">Edit</a>
				<a type="button" class="btn btn-danger" href="/user/delete/{{ $r->id_user }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    </div>

</body>
</html>
