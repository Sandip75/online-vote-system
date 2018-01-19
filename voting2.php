<!DOCTYPE html>
<html>
<head>
 <title></title>
<link rel = "stylesheet"
   type = "text/css"
   href = "voting2.css" />

</head>
<body>
</body>
</html>
<?php
include 'c.php';
$d=mysqli_query($connection,"SELECT * FROM vote");

while($r = mysqli_fetch_array($d))
{
   $ss1 = $r['sajal'];
   $ss2 = $r['saurav'];
   $ss3 = $r['sam'];
   $sum = $ss1 + $ss2 + $ss3 ;
   if($sum!=0){
   $p_ss1 = round($ss1*100/$sum).'%';
   $p_ss2 = round($ss2*100/$sum).'%';
   $p_ss3 = round($ss3*100/$sum).'%';
  
   echo "<div class='rrr'>
   <table>
   <tr>
   <td><img src='sajal.jpg'>&emsp;&emsp;</td>
   <td><img src='saurav.jpg'>&emsp;&emsp;</td>
   <td><img src='sam.jpg'>&emsp;&emsp;</td>
    </tr> 
	<tr>
	<td>&emsp;&emsp; $ss1($p_ss1)</td>
	<td>&emsp;&emsp; $ss2($p_ss2)</td>
	<td>&emsp;&emsp; $ss3($p_ss3)</td>
	</tr>
	</div>";
   }
}
?>