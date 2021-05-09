<?php
$to      = 'amine.adlouni29@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: amine-adlouni@outlook.fr' . "\r\n" .
    'Reply-To: ' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>