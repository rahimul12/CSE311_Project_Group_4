<?php session_start(); ?>
<?php
 require_once 'db.php';


$typeNameX=$_POST['typeNameX'];
$typeEmailX=$_POST['typeEmailX'];
$typeDateX=$_POST['typeDateX'];
$typeAddressX=$_POST['typeAddressX'];
$typeSeatX=$_POST['typeSeatX'];

$sql = "INSERT INTO `book`( `typeNameX` ,	 `typeEmailX`	,`typeDateX` 	,`typeAddressX` 	,`typeSeatX`	) VALUES ('$typeNameX', '$typeEmailX','$typeDateX', '$typeAddressX', '$typeSeatX')";

$rs= mysqli_query($con, $sql);

if($rs)
{
    echo "Successfully Booked Ticket";
     
}                      


?>
