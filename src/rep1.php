<?php 
if (isset($_POST["btn-send"])) {
  $re=mysql_query("INSERT INTO `sugg_info` (`name`, `tab`, `syrup`, `pow`, `time`) VALUES ( '".$_POST["disease"]."', '".$_POST["tab"]."', '".$_POST["syrup"]."', '".$_POST["pow"]."', '".$_POST["time"]."')");
}
if (isset($_GET["id"])) {
  mysql_query("delete from disease where id=".$_GET["id"]);
}
?>
<div class="banner">
					<h2>
						<a href="index1.html">Home</a>
						<i class="fa fa-angle-right"></i>
						Suggestion
					</h2>
				</div>
				
				<div class="blank">
					<div class="blank-page">
            <form method="post">
          <table class="table-condensed" width="50%" align="center">
            <tr><td><h3>Doctor Suggestions</h3></td></tr>
          <tr><td><input type="text"  required="" name="disease" class="form-control" placeholder="Disease_Name"></td></tr>
          <tr><td><input type="text"  required="" name="tab" class="form-control" placeholder="Tablets"></td></tr>
          <tr><td><input type="text" required=""  name="syrup" class="form-control" placeholder="Syrups"></td></tr>
          <tr><td><input type="text" required=""  name="pow" class="form-control" placeholder="Powders"></td></tr>
          <tr><td><input type="text" required=""  name="time" class="form-control" placeholder="Time Required to cover"></td></tr>
          <tr><td><input type="submit" name="btn-send" class="btn btn-primary"> &nbsp;&nbsp;<input type="reset" value="Reset" class="btn btn-danger"></td></tr>
              </table>
        </form>

					</div>	
				
	
         <div class="blank">
               <div class="blank-page">
            <form method="post">

             <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
               <thead><tr><th>Sr. No.</th><th>Disease_name</th><th>Tablets</th><th>Syrups</th><th>Powder</th><th>Duration</th></tr></thead>
              
<?php 
$t=1;
$sql=mysql_query("select * from sugg_info");
             while($row=mysql_fetch_array($sql)){
                echo "<tr><th>$t</th><th>$row[name]</th><th>$row[tab]</th><th>$row[syrup]</th><th>$row[pow]</th><th>$row[time]</th></tr>";
$t++;
              }    
?>
</tbody>
</table>
</form></div>

               </div>   
            
            </div>            				<