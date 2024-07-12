<?php 
if (isset($_POST["btn-send"])) {
	$re=mysql_query("INSERT INTO `disease` (`name`, `temp`, `bp`, `spo2`, `sym`) VALUES ( '".$_POST["disease"]."', '".$_POST["temp"]."', '".$_POST["bp"]."', '".$_POST["spo2"]."', '".$_POST["sym"]."')");
}

//delete 

 ?>
<div class="banner">
					<h2>
						<a href="index.php">Home</a>
						<i class="fa fa-angle-right"></i>
						Disease
					</h2>
				</div>
				
				<div class="blank">
					<div class="blank-page">
				<form method="post">
					<table class="table-condensed" width="50%" align="center">
						<tr><td><h3>Patient Information</h3></td></tr>
					<tr><td><input type="text"  required="" name="disease" class="form-control" placeholder="Patient  Name"></td></tr>
					<tr><td><input type="text"  required="" name="temp" class="form-control" placeholder="Temperature"></td></tr>
					<tr><td><input type="text" required=""  name="bp" class="form-control" placeholder="Blood_Preasure"></td></tr>
					<tr><td><input type="text" required=""  name="spo2" class="form-control" placeholder="SPO2"></td></tr>
					<tr><td><input type="text" required=""  name="sym" class="form-control" placeholder="Symtoms"></td></tr>
					<tr><td><input type="submit" name="btn-send" class="btn btn-primary"> &nbsp;&nbsp;<input type="reset" value="Reset" class="btn btn-danger"></td></tr>
              </table>
				</form>
				<br><br>
				
					</div>	
				
				</div>					