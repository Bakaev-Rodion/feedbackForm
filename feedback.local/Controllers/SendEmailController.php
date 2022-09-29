<?php
class SendEmailController
{
static function sendEmail($topic,$message,$userName,$email,$timestamp){
    $date=date('d-m-Y',$timestamp);
    $mail="Topic: $topic 
    Message: 
    $message
    $userName,$email
    at $date";
    echo mail('bakaev.rodion@knu.ua','New Request from'.$userName,$mail);
}
}