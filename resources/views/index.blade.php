<!DOCTYPE html>
<html>
<head>
	<title>Tugas Binus</title>
</head>
<body>

	<h2>www.malasngoding.com</h2>
	<h3>Data Pegawai</h3>

	{{-- <a href="/pegawai/tambah"> + Tambah Pegawai Baru</a> --}}

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Keterangan</th>
		</tr>
		@foreach($role as $r)
		<tr>
			<td>{{ $r->nama_role }}</td>
			<td>{{ $r->keterangan }}</td>
			{{-- <td>
				<a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td> --}}
		</tr>
		@endforeach
	</table>


</body>
</html>
