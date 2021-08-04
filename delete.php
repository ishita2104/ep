<?php
include "connection.php";
error_reporting(0);
$id=$_GET['rn'];
$query="DELETE from `backup` where id='$id'";
$data=mysqli_query($db,$query);
if($data)
{
	echo"Deleted";
}
else
{
	echo"failed";
}
?>
