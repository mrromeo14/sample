<?php
$to = 'sk.poopoovarasan14@gmail.com';
$subject = "Raw Text";

$message = "hi This is testing";

$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


$result = mail($to, $subject, $message, $headers);

if($result == true){
    echo "Successfully";
}else{
    print_r($errorMessage = error_get_last()['message']);
}
?>