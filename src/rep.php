<div class="banner">
					<h2>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
						Report
					</h2>
				</div>
				
				<div class="blank">
					<div class="blank-page">
<?php  

 $sql=mysql_query("select * from sugg_info");
 
  	$row=mysql_fetch_array($sql);

   $dname=$row[name];
echo "<br><br>Disease: <b><p class='badge badge-danger'><font color=#fff size='5'>$row[name]</font></p></b>";
echo "<br> Tablets: $row[tab] | Syrups: $row[syrup] | powder: $row[pow] <br>
<br>
<h4>Time Required to Cover : $row[time] </h4> <br>";
    ?>




     
	</div>	
          <div class="blank">
          <div class="blank-page">
				 <a href="print.php" class="btn btn-danger">Click for Print</a>
</div>
				</div>			</div>
        		