<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

if(!empty($email) && empty($_POST['username']))
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

// echo "<script language=\"JavaScript\">";
// alert('Email Send');
// echo "</script>";
//Set a 200 (okay) response code.
http_response_code(200);
echo "Thank you! your message has been sent.";

}else{

// echo "<script language=\"JavaScript\">";
// echo "alert('Email not send');";
// echo "</script>";
//Set a 500 (internal server error) response code.
http_response_code(500);
echo "Oops! someting went wrong and we couldn't send your message.";

}




}



?> 



