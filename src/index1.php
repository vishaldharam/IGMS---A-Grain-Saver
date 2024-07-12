<?php 
session_start();
error_reporting(~E_ALL);
include("config.php");
if($_SESSION["loginID"]==true){
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
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/screenfull.js"></script>
 <link rel="stylesheet" href="assests/plugins/datatables/jquery.dataTables.min.css">
  <script src="assests/plugins/datatables/jquery.dataTables.min.js"></script> 
  <!-- bootstrap js -->
    <script src="assests/bootstrap/js/bootstrap.min.js"></script>


		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
		<style type="text/css" media="screen">
		#container {
    min-width: 310px;
    height: 400px;
    margin: 0 auto;
}	
		</style>
</head>
<body class="dashboard-page">

	<nav class="main-menu">
		<ul>
			<li>
				<a href="index1.php?menu=home1">
					<i class="fa fa-home nav_icon"></i>
					<span class="nav-text">
					Dashboard
					</span>
				</a>
			</li>
			<li>
				<a href="index1.php?menu=sensor1">
					<i class="fa fa-check-square-o nav_icon"></i>
					<span class="nav-text">
					Data
					</span>
				</a>
			</li>
			<li>
				<a href="index1.php?menu=report1">
					<i class="fa fa-bar-chart nav_icon"></i>
					<span class="nav-text">
					Suggestion
					</span>
				</a>
			</li>
			
	
		</ul>
		<ul class="logout">
			<li>
			<a href="logout1.php">
			<i class="icon-off nav-icon"></i>
			<span class="nav-text">
			Logout
			</span>
			</a>
			</li>
		</ul>
	</nav>
	<section class="wrapper scrollable">
		<nav class="user-menu">
			<a href="javascript:;" class="main-menu-access">
			<i class="icon-proton-logo"></i>
			<i class="icon-reorder"></i>
			</a>
		</nav>
		<section class="title-bar">
			<div class="">
				<h1><a href="index1.php"><img src="images/logo.png"> Secure Health Share System</a></h1>
			</div>
			
			<div class="header-right">
				<div class="profile_details_left">
					<div class="header-right-left">
						<!--notifications of menu start -->
						
					</div>	
					<div class="profile_details">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
										<span class="prfil-img"><i class="fa fa-user" aria-hidden="true"></i></span> 
										<div class="clearfix"></div>	
									</div>	
								</a>
								<ul class="dropdown-menu drp-mnu">
									
									<li> <a href=""><i class="fa fa-sign-out"></i> Logout</a> </li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</section>
		<div class="main-grid">
			<div class="agile-grids">	
				<!-- blank-page -->
				
				<?php
                 if ($_GET["menu"]=="home1" or $_GET["menu"]=="")
                 	include("home1.php");
                 else if ($_GET["menu"]=="report1")
                 	include("rep1.php");
                 else if ($_GET["menu"]=="sensor1")
                 	include("sensor1.php");
                 else if ($_GET["menu"]=="disease1")
                 	include("disease1.php");
                 
                 
				?>
				<!-- //blank-page -->
			</div>
		</div>
 
		<!-- footer -->
		<div class="footer">
			<p> All Rights Reserved . Design by <a href="">Department of Computer Engineering</a></p>
		</div>
		<!-- //footer -->
	</section>
	<script src="js/bootstrap.js"></script>
	<script src="js/proton.js"></script>
		
		<?php if($_GET["menu"]=="sensor" or $_GET["menu"]=="disease"){ ?>
  <script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} ); 
                    
              </script>
                       
<!--js -->
<link rel="stylesheet" href="assets/bootstrap/css/datatable1.css">
<script type="text/javascript" src="assets/jquery/datatable1.js"></script>
<script type="text/javascript" src="assets/jquery/datatable2.js"></script>
<script type="text/javascript" src="assets/jquery/datatable3.js"></script>
 <script src="assests/plugins/fileinput/js/plugins/canvas-to-blob.min.js'); ?>" type="text/javascript"></script> 
  <script src="assests/plugins/fileinput/js/plugins/sortable.min.js" type="text/javascript"></script> 
  <script src="assests/plugins/fileinput/js/plugins/purify.min.js" type="text/javascript"></script>
  <script src="assests/plugins/fileinput/js/fileinput.min.js"></script> 
   <?php } ?> 
</body>
</html>
<?php }
else {
 	include('login.php');
 } ?>