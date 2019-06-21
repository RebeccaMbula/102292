<!DOCTYPE html>
<html>
<head>
	<!--<script src="{{ asset('js/app.js') }}" defer></script>-->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<title>
		Fees
	</title>
</head>
<body>

	

	<form>
		<div class="form-group">
			<label class="control-label col-sm-2" for="sid">Student id:</label>
			<div class="col-sm-10">
				<input type="number" class="form-control" id="studentID" placeholder="Enter student ID" min="1" name="studentID">
			</div>
		</div>
	</form>
	
	<table class="table">
		<thead>
			<tr>
				<th scope="col">ID</th>
		
				<th scope="col">Fees</th>
				<th scope="col">Date of payment</th>
			</tr>

		</thead>
		<tbody>
			@foreach($fee_payments as $fee_payment)
			<tr>
				<td>{{ $fee_payment->id }}</td>
				<td>{{ $fee_payment->amount }}</td>
				<td>{{ $fee_payment->created_at }}</td>
			</tr>
			@endforeach
		</tbody>

	</table>
</body>
</html>