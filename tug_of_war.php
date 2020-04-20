<?php 
	include 'include/connection.php';
	$schools1= "Ananda";
	$schools2= "ACICTS";
	global $schools1;
	global $schools2;
	global $db;

 ?><!DOCTYPE html>
<html>
<head>
	<title>Tug of War</title>
  <link href="include/style.css" rel="stylesheet">
</head>
<body>



<div class="form-popup" id="myForm">
  <form method="post" class="form-container">

  	<p style="display: block;">already done!</p>
 
    <input type="email" placeholder="Enter Email" name="email1" required>
	
	<button type="submit" name="<?php echo $schools1; ?>" class="btn">Vote</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<div class="form-popup2" id="myForm2" >
  <form method="post" class="form-container">

  	<p style="display: block;">already done2!</p>
 
    <input type="email" placeholder="Enter Email" name="email2" required>
	
	<button type="submit"  name="<?php echo $schools2; ?>" class="btn">Vote</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<div class="row">

  <div class="column" id="schools">
     <div class="card">
       <img src="include/acicts.png" height="100%">
       <div class="open-button" onclick="openForm()" style="width: 100%;">
       		Ananda College ICT Society
       </div>
    </div>

   
   
  
  </div>

  <div class="column" id="schools">
    <div class="card">
      	 <img src="include/mcicts.png" height="100%">
    <div class="open-button" onclick="openForm2()" style="width: 100%;">
       		Mahanama College ICT Society
       </div>
    </div>
    
  </div>
</div>	
<div class="form-popup" id="myForm">
  <form method="post" class="form-container">

  	<p style="display: block;">already done!</p>
 
    <input type="email" placeholder="Enter Email" name="email1" required>
	
	<button type="submit" name="<?php echo $schools1; ?>" class="btn">Vote</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<div class="form-popup2" id="myForm2" >
  <form method="post" class="form-container">

  	<p style="display: block;">already done2!</p>
 
    <input type="email" placeholder="Enter Email" name="email2" required>
	
	<button type="submit"  name="<?php echo $schools2; ?>" class="btn">Vote</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<div class="form-popup" id="myForm3">
  <form method="post" class="form-container">

  	<p style="display: block;">already done!</p>
 
    <input type="email" placeholder="Enter Email" name="email3" required>
	
	<button type="submit" name="<?php echo $schools3; ?>" class="btn">Vote</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<div class="form-popup2" id="myForm4" >
  <form method="post" class="form-container">

  	<p style="display: block;">already done2!</p>
 
    <input type="email" placeholder="Enter Email" name="email4" required>
	
	<button type="submit"  name="<?php echo $schools4; ?>" class="btn">Vote</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<div class="row">

  <div class="column" id="schools">
     <div class="card">
       <img src="include/sbvicts.png" height="100%">
       <div class="open-button" onclick="openForm()" style="width: 100%;">
      Sirimavo Bandaranaike Vidyalaya ICT Society
       </div>
    </div>

   
   
  
  </div>

  <div class="column" id="schools">
    <div class="card">
      	 <img src="include/wcicts.png" height="100%">
    <div class="open-button" onclick="openForm2()" style="width: 100%;">
       Wesley College ICT Society
       </div>
    </div>
    
  </div>
</div>	
<?php 
$errors = array();
$email = "";
	if (isset($_POST[$schools1])) {
			 $email = $_POST['email1'];
			 $school= $schools1;



			 $query = "SELECT * FROM tug_of_war WHERE email='{$email}'";
	$result = mysqli_query($db, $query);
	if(mysqli_num_rows($result) == 1) {

		$errors[0]= "You are already voted!";
			
				}else{
					$verification = rand();
					$sql =  "INSERT INTO `tug_of_war`(`school`, `email`, `verification`, `confirmed`) VALUES ('{$school}', '{$email}', '{$verification}', '0')";
		$res = mysqli_query($db, $sql);

				 if ($res== 1) {

				 	if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");
$address = $email;
$e_subject = 'You\'ve been contacted by E- Aurudu .';

$msg = "Confirem Your vote! click here: eaurudu.com/confirem.php?email=".$email."&"."vc=".$verification ;

$headers = "From: e-aurudu@noreply.com" . PHP_EOL;
$headers .= "Reply-To: noreply@reply.com" . PHP_EOL;
$headers .= "MIME-Version: 1.0" . PHP_EOL;
$headers .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;
$headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;

if(mail($address, $e_subject, $msg, $headers)) {

	echo '	<script type="text/javascript">alert("Confirem Email")</script>';// Email has sent successfully, echo a success page.

}
						
					}


	}}else if (isset($_POST[$schools2])) {
			 $email = $_POST['email2'];
			 $school= $schools2;


			 $query = "SELECT * FROM tug_of_war WHERE email='{$email}'";
	$result = mysqli_query($db, $query);
	if(mysqli_num_rows($result) == 1) {

		$errors[0]= "You are already voted!";
			
				}else{
					$verification = rand();
					$sql =  "INSERT INTO `tug_of_war`(`school`, `email`, `verification`, `confirmed`) VALUES ('{$school}', '{$email}', '{$verification}', '0')";
		$res = mysqli_query($db, $sql);

				 if ($res== 1) {

				 	if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");
$address = $email;
$e_subject = 'You\'ve been contacted by E- Aurudu .';

$msg = "Confirem Your vote! click here: eaurudu.com/confirem.php?email=".$email."&"."vc=".$verification ;

$headers = "From: e-aurudu@noreply.com" . PHP_EOL;
$headers .= "Reply-To: noreply@reply.com" . PHP_EOL;
$headers .= "MIME-Version: 1.0" . PHP_EOL;
$headers .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;
$headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;

if(mail($address, $e_subject, $msg, $headers)) {

	echo '	<script type="text/javascript">alert("Confirem Email")</script>';// Email has sent successfully, echo a success page.

} else {


}
						
					}

				}


	}

 ?>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";

}

function openForm2() {
  
  document.getElementById("myForm2").style.display = "block";
}

function openForm3() {
  
  document.getElementById("myForm3").style.display = "block";
}

function openForm4() {
  
  document.getElementById("myForm4").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
  document.getElementById("myForm2").style.display = "none";
  document.getElementById("myForm3").style.display = "none";
  document.getElementById("myForm4").style.display = "none";
}
</script>
</body>
</html>