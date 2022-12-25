<?php
  require_once 'db.php';


$typeEmailX=$_POST['typeEmailX'];
$typePasswordX=$_POST['typePasswordX'];

$sql = "INSERT INTO `userinfo`(`typeEmailX`, `typePasswordX`) VALUES ('$typeEmailX','$typePasswordX')";

$rs= mysqli_query($con, $sql);

if($rs)
{
    echo "Contact records inserted";
    
}


?>
