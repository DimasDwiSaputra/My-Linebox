<!DOCTYPE html>
<html>
<head>
	<title>Laporan PDF Gaji</title>
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
		<h5>Laporan PDF Gaji</h4>
		<h6><a target="_blank" >Linebox</a></h5>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
      <td>No</td>
      <td>Nama</td>
      <td>Sabtu</td>
      <td>Senin</td>
      <td>Selasa</td>
      <td>Rabu</td>
      <td>Kamis</td>
      <td>Jumat</td>
      <td>Cost</td>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($gaji as $p)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{$p->nama}}</td>
				<td>{{$p->sabtu}}</td>
				<td>{{$p->senin}}</td>
				<td>{{$p->selasa}}</td>
				<td>{{$p->rabu}}</td>
				<td>{{$p->kamis}}</td>
				<td>{{$p->jumat}}</td>
				<td>{{$p->cost}}</td>
			</tr>
			@endforeach
		</tbody>
		 <tfoot>
    <tr>
      <td colspan="8" style="text-align: center;" class="font-weight-bold">Total</td>
      <td colspan="2">Rp.{{number_format($jumlah)}}</td>
    </tr>
  </tfoot>
	</table>
 
</body>
</html>