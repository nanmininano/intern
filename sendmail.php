<?php

if (filter_input_array(INPUT_POST)) {
    //$to_Email = "k.panichakun@gmail.com"; //change email receiver at here
    $to_Email = "chalasai@thailand-property.com";
        
    $subject = 'Test Send Email'; //Subject line for emails
    //check $_POST vars are set, exit if any missing
    $name = filter_input(INPUT_POST, 'name');
    $email = filter_input(INPUT_POST, 'email');
    $comments = filter_input(INPUT_POST, 'comments');
    if (!isset($name) || !isset($email) || !isset($comments)) {
        //$output = json_encode(array('type' => 'error', 'text' => 'Input fields are empty!'));
        //die($output);
        http_response_code(500);
        echo "Oops! someting went wrong and we couldn't send your message.";
    }

    $sid = md5(uniqid(time()));

    $headers = 'From:' . $name . '<' . trim($email) . '>' . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"" . $sid . "\"\r\n";
    $headers .= "This is a multi-part message in MIME format.\r\n";
    $body = "--" . $sid . "\r\n";
    $body .= "Content-type: text/plain; charset=UTF-8\r\n"; // or UTF-8 //
    $body .= "Content-Transfer-Encoding: 8bit\n\n";
    $body .= "Contact From: " . trim($email) . "\r\n";
    $body .= "---------------------------------------------------------------------\r\n";
    $body .= "Name: " . $name . "\r\n";
    $body .= "E-mail: " . trim($email) . "\r\n";
    $body .= "---------------------------------------------------------------------\r\n";
    $body .= "Comment: " . nl2br($comments) . "\r\n";


    if ($_FILES["upload"]["name"] != "") {
        $strFilesName = $_FILES["upload"]["name"];
        $strContent = chunk_split(base64_encode(file_get_contents($_FILES["upload"]["tmp_name"])));
        $body .= "--" . $sid . "\n";
        $body .= "Content-Type: application/octet-stream; name=\"" . $strFilesName . "\"\n";
        $body .= "Content-Transfer-Encoding: base64\n";
        $body .= "Content-Disposition: attachment; filename=\"" . $strFilesName . "\"\n\n";
        $body .= $strContent . "\n\n";
    }

    if (mail($to_Email, $subject, $body, $headers)) {
        http_response_code(200);
        echo "Thank you! your message has been sent.";
    } else {
        http_response_code(500);
        echo "Oops! someting went wrong and we couldn't send your message.";
    }
}
