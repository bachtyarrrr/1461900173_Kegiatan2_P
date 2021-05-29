<!DOCTYPE html>
<html>
<head>
	<title>Anggota</title>
</head>
<body>
<a href="{{url('/home')}}">
        <input type="button" value="HOME"></input>
    </a>
    <a href="{{url('/anggota')}}">
        <input type="button" value="SELECT"></input>
    </a>
    <a href="{{url('/like')}}">
        <input type="button" value="SELECT LIKE"></input>
    </a>
    <a href="{{url('/join')}}">
        <input type="button" value="SELECT JOIN"></input>
    </a>
    <a href="{{url('/joinlike')}}">
        <input type="button" value="SELECT JOIN LIKE"></input>
    </a>
	<h3>Data Anggota</h3>
	<br/>
 
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Jenis Kelamin</th>
			<th>No Telpon</th>
		</tr>
		@foreach($like as $l)
		<tr>
			<td>{{ $l->anggota_nama }}</td>
			<td>{{ $l->anggota_alamat }}</td>
			<td>{{ $l->anggota_jk }}</td>
			<td>{{ $l->anggota_telp }}</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>