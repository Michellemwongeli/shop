
<!DOCTYPE html>
<html>
<head>
<title>ORDERS</title> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<form action="server.php" method="post">
		<h2>Orders Form</h2>
		
		
			<label>Order_details:</label>
			<input required type="order" name="order_details">
		</div>
		<div>
			<label>Time:</label>
			<input required id="time" type="time" name="time">
		</div>
		<br>
		
		<div>
			<button type="Submit" id="btn-order" name="btn-order">send</button>
		</div>

	</form>

<script>
 let data = new FormData();
 data.append("order", order);




        $("#order-form").submit( function(event){
        
        event.preventDefault();
       
        }
		$.ajax({
		  url: 'server.php',
		  data: data,
		  processData: false,
		  contentType: false,
		  type: 'POST',
		  success: function(response){
		    console.log(response);
		  }
		});


</script>


</body>
</html>