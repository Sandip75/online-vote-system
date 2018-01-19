<!DOCTYPE html>
<html>
<head>
 <title></title>
<link rel = "stylesheet"
   type = "text/css"
   href = "voting.css" />

</head>
<body>
<div id="mainc">
<div class="main">
<h1>Who study most in class </h1>
<h3>Online voting</h3>
<form method="post" action="">

<input type="submit" name="s1" value="sajal">&emsp;&emsp;
<input type="submit" name="s2" value="saurav">&emsp;&emsp;
<input type="submit" name="s3" value="sam">

</form>
</div>

</body>
</html>
<?php

include 'c.php';

if(isset($_POST['s1'])){
	$name='sajal';
	$value='true';
	setcookie($name,$value,time()+(1*365*24*60*60));
 $sajal=mysqli_query($connection,"UPDATE vote SET sajal = sajal + 1");
 if($sajal)
 {
   echo "<div class='m1'>you vote to sajal</div>";
 }
}
if(isset($_POST['s2'])){
	$name='sajal';
	$value='true';
	setcookie($name,$value,time()+(1*365*24*60*60));
 $saurav=mysqli_query($connection,"UPDATE vote SET saurav = saurav + 1");
 if($saurav)
 {
   echo "<div class='m1'>you vote to saurav</div>";
 }
}
if(isset($_POST['s3'])){
	$name='sajal';
	$value='true';
	setcookie($name,$value,time()+(1*365*24*60*60));
 $sam=mysqli_query($connection,"UPDATE vote SET sam = sam + 1");
 if($sam)
 {
   echo "<div class='m1'>you vote to sam</div>";
 }
}

?>
<?php
 include 'voting2.php';
?>
</div>