<!DOCTYPE html>
<html>
	<head>
		<title>Demo MVC</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	</head>
	<body>
		<div class="container">
			<br />
			
			<h3 align="center">MVC Demo</h3>
            <br />
            <div class="form-popup" id="myForm">
			<form id="myForm" method="post" action="http://localhost/demo/TemplateMVC/public/home/show" class="form-container">
			  <h1>Add Person</h1>
		  
			  <label for="first"><b>First Name</b></label>
			  <input type="text" id="first" placeholder="Enter First Name" name="first" required>
            <br>
			  <label for="last"><b>Last Name</b></label>
			  <input type="text" id="last" placeholder="Enter Last Name" name="last" required>
		  <br>
			  <button type="submit" id="btnSubmit" name="btnSubmit" class="btn">Add</button>
			</form>
		  </div>
		</div>
	</body>
</html>
