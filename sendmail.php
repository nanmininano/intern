<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

if(isset($_POST['submit']))
{
	 
	//script send email
	$to = "k.panichakun@gmail.com";

	$subject = 'test';

	$headers = "From: webmaster@example.com\r\n";
	$headers .= "Reply-To: webmaster@example.com\r\n";
	$headers .= "CC: susan@example.com\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=utf-8\r\n";

	$message =
	'<html>
	<head>
		<title></title>
	</head>
	<body>

		<table rules="all" style="border : 1px solid black;" cellpadding="10" >
	<tr>
		<td>Name</td>
		<td>'. $name . '</td>
	</tr>
	<tr>
		<td>E-mail</td>
		<td>'. $email . '</td>
	</tr>
	<tr>
		<td>Message</td>
		<td>'. $message . '</td>
	</tr>

	</table>
	</body>
	</html>';

if (mail($to,$subject,$message,$headers)){

echo "<script language=\"JavaScript\">";
alert('Email Send');
echo "</script>";

}else{

echo "<script language=\"JavaScript\">";
echo "alert('Email not send');";
echo "</script>";

}




}



?> 


