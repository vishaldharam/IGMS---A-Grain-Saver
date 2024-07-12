<?php 

if (isset($_POST["login"])) {
	$uname=$_POST["uname"];
	$pass=$_POST["pass"];
	$sql=mysql_query("select * from login_info where username='".$uname."' and password='".$pass."'");
		$var=mysql_num_rows($sql);
     if($var!=0){
     	$result=mysql_fetch_array($sql);
     	 $_SESSION["loginID"]=true;
     	 if ($uname=="admin" and $pass=="admin") {
     	 	# code...
     	 
     	 header("location:index1.php");
     	}
     	elseif ($uname=="patient" and $pass=="patient") {
     	header("location:index.php");	# code...
     	}
     }
     	else
     		$err="Wrong Username / Password";
}
 ?>

<!DOCTYPE html>
<head>
<title>Secure Health Share System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.css">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
</head>
<body class="signup-body">
		<div class="agile-signup">	
			
			<div class="content2">
				<div class="grids-heading gallery-heading signup-heading">
					<h2>Login</h2>
				</div>
				<form method="post">
					<input type="text" name="uname" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}">
					<input type="password" name="pass" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
					<input type="submit" class="register" name="login" value="Login">
				</form>
				<div class="signin-text">
					<?php echo $err; ?>
					
					<div class="clearfix"> </div>
				</div>
				
				<a href="index.php">Back To Home</a>
			</div>
			
			<!-- footer -->
			<div class="copyright">
				<p> All Rights Reserved . Design by <a href="">Department of Computer Engineering</a></p>
			</div>
			<!-- //footer -->
			
		</div>
	<script src="js/proton.js"></script>
</body>
</html>
