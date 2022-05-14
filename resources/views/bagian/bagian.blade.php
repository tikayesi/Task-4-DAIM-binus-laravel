<!DOCTYPE html>
<html>
<head>
	<title>Tugas Binus</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    @include('navigation.nav')
    <div class="table-responsive mx-5">
        <h3>List Bagian</h3>

	<a class="btn btn-primary btn-sm" href="/bagian/tambah"> + Tambah Bagian </a>

	<br/>
	<br/>
	<table class="table table-striped table-hover center">
		<tr>
            <th>No</th>
			<th>Nama Bagian</th>
            <th>Aksi</th>
		</tr>
		@foreach($bagian as $key => $r)
		<tr>
            <td>{{ ++$key }}</td>
			<td>{{ $r->nama_bagian }}</td>
            <td>
				<a type="button" class="btn btn-primary btn-sm" href="/bagian/edit/{{ $r->id_bagian }}">Edit</a>
                <a type="button" class="btn btn-danger btn-sm"
                onclick="return confirm('Apakah anda yakin akan menghapus {{ $r->nama_bagian}} ?')" href="/bagian/delete/{{ $r->id_bagian }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $bagian->links() }}
    </div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
