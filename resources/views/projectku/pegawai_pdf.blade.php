<!DOCTYPE html>
<html>
<head>
	<title>Laporan PDF </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan PDF Pegawai</h4>
		<h6><a target="_blank" >LINEBOX</a></h5>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Tanggal Lahir</th>
				<th>Alamat</th>
				<th>Jenis Kelamin</th>
				<th>Telepon</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($pegawai as $p)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{$p->nama}}</td>
				<td>{{$p->ttl}}</td>
	
				<td>{{$p->email}}</td>
				<td>{{$p->jk}}</td>
				<td>{{$p->tlp}}</td>
				<td>{{$p->status}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>