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
        <h3>List pemesanan</h3>

	<a class="btn btn-primary btn-sm" href="/pemesanan/tambah"> + Tambah pemesanan </a>

	<br/>
	<br/>
	<table class="table table-striped table-hover center">
		<tr>
            <th>No</th>
			<th>Nama pemesan</th>
            <th>Barang</th>
            <th>Jumlah Pesanan</th>
            <th>Proses</th>
            <th>Aksi</th>
		</tr>
		@foreach($pemesanan as $key => $r)
		<tr>
            <td>{{ ++$key }}</td>
			<td>{{ $r->nama_pemesan }}</td>
            <td>{{ $r->id_barang }}</td>
            <td>{{ $r->jumlah_pesanan }}</td>
            <td>{{ $r->proses }}</td>
            <td>
				<a type="button" class="btn btn-primary btn-sm" href="/pemesanan/edit/{{ $r->id_pesanan }}">Edit</a>
                <a type="button" class="btn btn-danger btn-sm"
                onclick="return confirm('Apakah anda yakin akan menghapus {{ $r->nama_pemesan}} ?')" href="/pemesanan/delete/{{ $r->id_pesanan }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{-- <div class="row"> --}}
    <div class="col-2">
        {{ $pemesanan->links() }}
</div>
{{-- </div> --}}
    </div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
