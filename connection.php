<?php 

session_start(); 

require_once 'db.php';


if(isset($_POST['typeEmailX'])){
	$typeEmailX=$_POST['typeEmailX'];
	$typeUsernameX=$_POST['typeUsernameX'];
	$typePasswordX=$_POST['typePasswordX'];

	$sql = "INSERT INTO `connection`(`typeEmailX`, `typeUsernameX`, `typePasswordX`) VALUES ('$typeEmailX','$typeUsernameX','$typePasswordX')";

	$rs= mysqli_query($con, $sql);

	if($rs){
		$_SESSION['logged_in'] = true;
	    echo "Signed Up. Redirecting Please wait...";
	    header('Refresh: 3; URL=index.php');
	}
}
else{
	echo "No Data Provided!";
}