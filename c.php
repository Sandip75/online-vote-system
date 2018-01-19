<?php
$servername = 'localhost';
$user = 'root';
$password = '';
$database = 'sandip';

$connection = mysqli_connect($servername,$user,$password,$database);

if($connection)
{
   //echo "connection done ";
}
else
{
   //echo "connection not done ";
}
?>