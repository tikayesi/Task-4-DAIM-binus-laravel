<!DOCTYPE html>
<html>
<head>
	<title>Tugas Binus</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style type="text/css">
    .pagination li{
        float: left;
        list-style-type: none;
        margin:5px;
    }
</style>
</head>
<body>
    @include('navigation.nav')
    <div class="table-responsive mx-5">
        <h3>List Barang</h3>

	<a class="btn btn-primary btn-sm" href="/barang/tambah"> + Tambah Barang </a>

	<br/>
	<br/>
	<table class="table table-striped table-hover center">
		<tr>
            <th>No</th>
			<th>Nama Barang</th>
            <th>Aksi</th>
		</tr>
		@foreach($barang as $key => $r)
		<tr>
            <td>{{ ++$key }}</td>
			<td>{{ $r->nama_barang }}</td>
            <td>
				<a type="button" class="btn btn-primary btn-sm" href="/barang/edit/{{ $r->id_barang }}">Edit</a>
                <a type="button" class="btn btn-danger btn-sm"
                onclick="return confirm('Apakah anda yakin akan menghapus {{ $r->nama_barang}} ?')" href="/barang/delete/{{ $r->id_barang }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{-- <div class="row"> --}}
    <div class="col-2">
        {{ $barang->links() }}
</div>
{{-- </div> --}}
    </div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
