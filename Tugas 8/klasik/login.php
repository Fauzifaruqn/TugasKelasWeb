<!DOCTYPE html>
<html>
	<head>
		<title>DAFTAR MAHASISWA</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">    
			<div class="panel panel-info" >
				<div class="panel-heading">
					<div class="panel-title">Sign In</div>
				</div>     
				<div style="padding-top:30px" class="panel-body" >
					<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
					<form id="loginform" class="form-horizontal" role="form" action="aksi.php" method="post">
						<div style="margin-bottom: 25px" class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input id="login-username" type="text" class="form-control" name="username" placeholder="username">
						</div>						
						<div style="margin-bottom: 25px" class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<input id="login-password" type="password" class="form-control" name="password" placeholder="password">
						</div>  
						<div style="margin-top:10px" class="form-group">
							<!-- Button -->
							<div class="col-sm-12 controls">
								<input type="submit" class="btn btn-success" name="login" value="LOGIN">
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12 control">
								<div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
									Don't have an account! 
									<a href="http://localhost/klasik/form.php" >
										Sign Up Here
									</a>
								</div>
							</div>
						</div>    
					</form>     
				</div>                     
			</div>  
		</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	</body>
</html>