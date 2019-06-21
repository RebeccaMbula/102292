<!DOCTYPE html>
<html>
<head>
	<!--<script src="{{ asset('js/app.js') }}" defer></script>-->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<title>
		Fees
	</title>
</head>
<body>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Name</th>
				<th scope="col">Fees</th>
			</tr>
		</thead>
		<tbody>
			@foreach($records as $student)
			<tr>
				<td>{{ $student->id }}</td>
				<td>{{ $student->name }}</td>
				<td>{{ $student->fees_total }}</td>
			</tr>
			@endforeach
		</tbody>

	</table>
</body>
</html>