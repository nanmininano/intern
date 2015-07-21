<?php
if($_POST)
{
    $to_Email       = "k.panichakun@gmail.com"; //change email receiver at here



    $subject        = 'Test Send Email'; //Subject line for emails
   
   
    
   
    //check $_POST vars are set, exit if any missing
    if(!isset($_POST["name"]) || !isset($_POST["email"]) || !isset($_POST["comments"]))
    {
        $output = json_encode(array('type'=>'error', 'text' => 'Input fields are empty!'));
        die($output);
    }

    $sid = md5(uniqid(time()));
    
    $headers = 'From:'. $_POST['name'].'<'.trim($_POST['email']).'>' . "\r\n" ;
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"".$sid."\"\r\n";
    $headers .= "This is a multi-part message in MIME format.\r\n";
    $body .= "--".$sid."\r\n";
    $body .= "Content-type: text/plain; charset=UTF-8\r\n"; // or UTF-8 //
    $body .= "Content-Transfer-Encoding: 8bit\n\n";
    $body .= "Contact From: " . trim($_POST['email']) . "\r\n";
    $body .= "---------------------------------------------------------------------\r\n";
    $body .= "Name: " . $_POST['name'] . "\r\n";
    $body .= "E-mail: " . trim($_POST['email']) . "\r\n";
    $body .= "---------------------------------------------------------------------\r\n";
    $body .= "Comment: " . nl2br($_POST["comments"]) . "\r\n";


     if($_FILES["upload"]["name"] != "")
    {
        $strFilesName = $_FILES["upload"]["name"];
        $strContent = chunk_split(base64_encode(file_get_contents($_FILES["upload"]["tmp_name"]))); 
        $body .= "--".$sid."\n";
        $body .= "Content-Type: application/octet-stream; name=\"".$strFilesName."\"\n"; 
        $body .= "Content-Transfer-Encoding: base64\n";
        $body .= "Content-Disposition: attachment; filename=\"".$strFilesName."\"\n\n";
        $body .= $strContent."\n\n";
    }
   
    if(mail($to_Email, $subject, $body, $headers))
    {
        http_response_code(200);
        echo "Thank you! your message has been sent.";
    }else{
        http_response_code(500);
        echo "Oops! someting went wrong and we couldn't send your message.";
        
    }
}
?>