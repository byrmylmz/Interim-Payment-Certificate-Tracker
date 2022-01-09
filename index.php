
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />
	<title>IPC Team Login</title>
	
	 <!-------------------------------------------------------->
	 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	 <!-------------------------------------------------------->


	<link href="http://fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400italic,400,700italic,700,900italic,900" rel="stylesheet" type="text/css">
	
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css" />
	

</head>
<body>

<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    echo "
    
    <section class='container'>
    <section class='login-form'>
        <form method='post' action='authenticate.php' role='login'>
            <section class='form-outer'>
                <h2>Please Login</h2>
                <input type='text' name='username' placeholder='Username' id='username' required class='form-control input-lg' />
                <input  type='password' name='password' placeholder='Password' id='password' required class='form-control input-lg' />
              <button type='submit' name='go' class='btn btn-info btn-block'>Sign in</button>
            </section>
            <div class='form-outer'>
                
                To create account contact with IPC Team
            </div>
        </form>
        <div class='form-links'>
            <a href='#'>
        </div>
    </section>
</section>
    
    
    ";
	exit;
}else{header('Location:dashboard.php');}


?>
	
	
</body>
</html>


