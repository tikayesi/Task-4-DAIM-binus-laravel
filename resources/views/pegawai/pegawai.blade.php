<!DOCTYPE html>
<html>
<head>
	<title>Tugas Binus</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    @include('navigation.nav')
    <div class="table-responsive mx-5">
        <h3>List pegawai</h3>

	<a class="btn btn-primary btn-sm" href="/pegawai/tambah"> + Tambah pegawai </a>

	<br/>
	<br/>
	<table class="table table-striped table-hover center">
		<tr>
            <th>No</th>
			<th>Nama</th>
            <th>Username</th>
            <th>Alamat</th>
            <th>Handphone</th>
            <th>Nama Bagian</th>
            <th>Aksi</th>
		</tr>
		@foreach($pegawai as $key => $r)
		<tr>
            <td>{{ ++$key }}</td>
			<td>{{ $r->nama_pegawai }}</td>
            <td>{{ $r->username }}</td>
            <td>{{ $r->alamat_pegawai }}</td>
            <td>{{ $r->hp_pegawai }}</td>
            <td>{{ $r->id_bagian }}</td>
            <td>
				<a type="button" class="btn btn-primary btn-sm" href="/pegawai/edit/{{ $r->id_pegawai }}">Edit</a>
                <a type="button" class="btn btn-danger btn-sm"
                onclick="return confirm('Apakah anda yakin akan menghapus {{ $r->nama_pegawai}} ?')" href="/pegawai/delete/{{ $r->id_pegawai }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{-- <div class="row"> --}}
    <div class="col-2">
        {{ $pegawai->links() }}
</div>
{{-- </div> --}}
    </div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
