<!Doctype html>
<html>
	<head>
	<title>
	
	</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
	</head>

	<body>
	<div class="container-fluid container-custom" >
		

		<nav class="navbar navbar-default navbar-custom">
			
				
				<div class="row">
					<div class="col-md-2 navbar-header">
					<h1>Socialbook</h1>
					</div>
						<div class="col-md-offset-4 col-md-4">
					
						
							<form class="navbar" role="search">
							
							<div class="form-group">
							<input type="text" class="form-control" id="search" placeholder="Search for friend!">
							</div>
						</div>
							<p class="col-md-2">
							<button type="submit" class="btn btn-primary">Search</button></p>
							
					
						</form>

						
						
					</div>
		
		</nav>
		<div class="container">
	
		<h1 align="center">Complete your profile!</h1>
			
			<div class="row">
			
			<div class="col-md-offset-4 col-md-4 col-md-offset-4">
			
				<form class="form-group">
					<p><input type="text" class="form-control" id="name" value="<?php echo "Name"?>"></p>
					<p>	<input type="email" class="form-control" id="email" value="<?php echo "Email"?>"></p>
					<p><input type="text" class="form-control" id="phone" value="<?php echo "Phone"?>"></p>
					<p>	<input type="email" class="form-control" id="address" value="<?php echo "Address"?>"></p>
					<p><input type="file" name="file[]" multiple="multiple">Upload your picture</p>
					<p><button type="submit" class="form-control btn btn-primary">Save</button></p>
				</form>

			</div> 
		</div>
	</div>
</nav>
</div>
			</body>
			</html>
