<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

  <h2>Pay fees</h2>
  <form class="form-horizontal" method="post" action="{{ url('fees') }}">
  	{{ csrf_field() }}

    <div class="form-group">
      <label class="control-label col-sm-2" for="sid">Student id:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="sid" placeholder="Enter student ID" min="1" name="sid" required>
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-2" for="fpaid">Fees paid:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="fpaid" placeholder="Pay fees" name="fpaid" required>
      </div>
    </div>
         
   
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
