<?php
 $con = mysqli_connect('localhost','root','','lab-project Final');


$typeEmailX=$_POST['typeEmailX'];
$typePasswordX=$_POST['typePasswordX'];

$sql = "INSERT INTO `userinfo`(`id`, `typeEmailX`, `typePasswordX`) VALUES ('0','$typeEmailX','$typePasswordX')";

$rs= mysqli_query($con, $sql);

if($rs)
{
    echo "Contact records inserted";
}


?>
