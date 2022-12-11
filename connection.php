<?php
 $con = mysqli_connect('localhost','root','','lab-project Final');


$typeEmailX=$_POST['typeEmailX'];
$typeUsernameX=$_POST['typeUsernameX'];
$typePasswordX=$_POST['typePasswordX'];

$sql = "INSERT INTO `connection`(`id`, `typeEmailX`, `typeUsernameX`, `typePasswordX`) VALUES ('0','$typeEmailX','$typeUsernameX','$typePasswordX')";

$rs= mysqli_query($con, $sql);

if($rs)
{
    echo "Contact records inserted";
}


?>
