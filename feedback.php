<?php
include 'config.php';
if(isset($_POST['go'])){
$name=	$_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$datainsert = "INSERT INTO contact_us (NAME,EMAIL,MESSAGE) VALUES ('$name','$email','$message')";
$execute = mysqli_query($link, $datainsert);
if($execute){
echo "<script>alert('FEEDBACK SENT SUCCESSFULLY'); window.location.replace('http://theculinarydestination.000webhostapp.com');</script>";
}
else{
	echo "<script>alert('ERROR OCCOURED')</script>";
}
}
  ?>