<?php 
include 'include/connection.php';
if(isset($_GET)){
if (!empty($_GET['email'] && $_GET['vc'])) {
	
	$email = $_GET['email'];
	$vc = $_GET['vc'];

	$query = "SELECT * FROM tug_of_war WHERE email='{$email}' and verification='{$vc}' and confirmed=0 ";
	$result = mysqli_query($db, $query);
	if(mysqli_num_rows($result) == 1) {

				//UPDATE `tug_of_war` SET ,`confirmed`=1 WHERE email = '{$email}'
				$query = "UPDATE `tug_of_war` SET `confirmed`=1 WHERE email = '{$email}'";
				$result = mysqli_query($db, $query);

				
				}
				
				header('location:tug_of_war.php');

}else{
	header('location:tug_of_war.php');
}

}
 ?>