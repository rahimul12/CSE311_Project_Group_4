<?php
 require_once 'db.php';


$typeEmailX=$_POST['typeEmailX'];
$typeUsernameX=$_POST['typeUsernameX'];
$typePasswordX=$_POST['typePasswordX'];

$sql = "INSERT INTO `connection`(`typeEmailX`, `typeUsernameX`, `typePasswordX`) VALUES ('$typeEmailX','$typeUsernameX','$typePasswordX')";

$rs= mysqli_query($con, $sql);

if($rs)
{
    echo "Contact records inserted";
     
}                      


?>
