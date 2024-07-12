<?php
//delete 
if (isset($_GET["delid"])) {
   mysql_query("delete from disease where d_id=".$_GET["delid"]);
}
 ?>
<div class="banner">
               <h2>
                  <a href="index1.php">Home</a>
                  <i class="fa fa-angle-right"></i>
                  Disease
               </h2>
            </div>
            
            <div class="blank">
               <div class="blank-page">
            <form method="post">

             <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
               <thead><tr><th>Sr. No.</th><th>Name</th><th>Temperature</th><th>Blood_Preasure</th><th>SPO2</th><th>Symtoms</th><th>Action</th></tr></thead>
               <tfoot><tr><th>Sr. No.</th><th>Name</th><th>Temperature</th><th>Blood_Preasure</th><th>SPO2</th><th>Symtoms</th><th>Action</th></tr></tfoot><tbody>
<?php 
$t=1;
$sql=mysql_query("select * from disease");
             while($row=mysql_fetch_array($sql)){
                echo "<tr><th>$t</th><th>$row[name]</th><th>$row[temp]</th><th>$row[bp]</th><th>$row[spo2]</th><th>$row[sym]</th><th><a href='index1.php?menu=report1' class='btn btn-danger'>GO</a></th></tr>";
$t++;
              }    
?>
</tbody>
</table>

               </div>   
            
            </div>               