<!DOCTYPE html>
<html>
<head>
	<title>Export PDF</title>
</head>
<body>

<table border="1" align="center">
	<thead>
		<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Email</th>
		<th>Photo</th>
	</tr>
	</thead>
	<tbody>
		@foreach($contact as $cont)
			<tr>
				<td> {{ $cont->id }} </td>
				<td> {{$cont->name}} </td>
				<td> {{$cont->email}} </td>
				<td> {{$cont->photo}} </td>
			</tr>
		@endforeach
	</tbody>
</table>

</body>
</html>