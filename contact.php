<?php
$to = "selvalakshmiandco@gmail.com";
$subject = "Selvalakshmi & co Contact Us";

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['subject'];
$phone = $_POST['subject'];
$message = $_POST['message'];

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>Contact Us E-mail from selvalakshmi & co</p>
<table>
<tr><th style='width:150px;text-align:left;'>name</th><th style='text-align:left;'>".$name."</th></tr>
<tr><th style='width:150px;text-align:left;'>email</th><th style='text-align:left;'>".$email."</th></tr>
<tr><th style='width:150px;text-align:left;'>phone</th><th style='text-align:left;'>".$phone."</th></tr>
<tr><th style='width:150px;text-align:left;'>Message</th><th style='text-align:left;'>".$message."</th></tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <selvalkshmiandco.in>' . "\r\n";
if($to && strlen($to) > 5){
    mail($to,$subject,$message,$headers,"selvalakshmiandco.in");
    echo "OK";
}else{
    echo "failed";
}
?>