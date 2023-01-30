<?php
/**
* Author: Lyonzone
* Email: contact@vikashvanivikash.com
* URL: http://www.lyonzone.com
* Version: 1.0.0 
**/

//vars
$subject = $_POST['subject'];
$to = explode(',', $_POST['to'] );

$from = $_POST['email'];

//data
$msg = "NAME: "  .$_POST['name']    ."<br>\n";
$msg .= "EMAIL: "  .$_POST['email']    ."<br>\n";
$msg .= "CONTACT NO: "  .$_POST['web']    ."<br>\n";
$msg .= "COMMENTS: "  .$_POST['comments']    ."<br>\n";

//Headers
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: <".$from. ">" ;


//send for each mail
foreach($to as $mail){
   mail($mail, $subject, $msg, $headers);
}

?>
