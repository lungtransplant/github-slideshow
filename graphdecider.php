<!DOCTYPE html>
<!--
	File Name: graphdecider.php
	Date:7/15/20
	Programmer: Maqsuda Kabir
	-->
<html>
	
    <head>  
    <title>Pulse GraphDecider Report</title>  
     <meta charset="utf-8">
      <html lang="en">
	   <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel=”stylesheet” href=style3.css>
    </head>  
        
   <BODY bgcolor ="blue"> 
      <header>
	<div class="plate">
	<p class="script"><span> </span></p>
	<p class="shadow text1">Pulse GraphDecider Report</p>
	
	<p class="script"><span> </span></p>
	</div>
 
	</header> 

<script type="text/javascript">
function changeStartDate()
{
oForm       = eval(document.getElementById("frmForm"));
iCustomerId = document.getElementById("startdate").value;
url         = "showDetails1.php?frm_action=3&cust_id=" +iCustomerId;
document.location = url;
}
</script>

<form name="frmForm" id="frmForm" >
<table border="0" cellspacing="2" cellpadding="2" width="50%">
<tr>
<td align="right" ><strong>GraphDecider</strong></td>
<td align="left"><select name="GraphDecider" id="graphdecider" onchange="javascript:changeGraphDecider();">
<option value="">--- Select ---</option>
   <option value="line-graph">Line-Graph (Raw Data)</option> 
  <option value=”box-plot”>Box-Plot (Summary Data)</option>
  <option value="column-graph">Column-Graph (Timeouts Data)</option>
    <option value="0">All</option> 


  
<?php if($_REQUEST['frm_action'] == 3) 
?>
 
<tr>
<td colspan="2">
<table  style="border:1px solid #003366;" cellspacing="2" cellpadding="2" width="100%" bgcolor="#003366">
<tr bgcolor="#EFEFEF">
   
<td><b><font color='Black'>Start Date</font></b><input type="date" name="myDate" id="myDate"></td>
  
<td><b><font color='Black'>End Date</font></b><input type="date" name="myDate" id="myDate">
</td>
  <td><b><font color='Black'>Category</font></b>
      <select name="select category">
            <option value="">--- Select ---</option>  
    <option value="averageresponsetime">Average Response Time</option> 
   
<?php
while($row1 = @mysql_fetch_array($aCustomer,MYSQL_ASSOC))
$startdate   = $row1['startdate'];
$enddate = $row1['enddate'];
$category   = $row1['category'];
?>

<tr bgcolor="#89cfef">
  <td><b><font color='#663300'>
</font></b></td>
<td><b><font color='#663300'><?php echo $enddate;?></font></b></td>
<td><b><font color='#663300'><?php echo $category;?></font></b></td>
 
<?php  ?>
   <table>
  <form method="post" action="http://webdevbasics.net/scripts/demo.php"> 
            <input type="submit" name="Submit" value="Submit"/>  
        </form>  
  </table>
    </body>  
</html>
