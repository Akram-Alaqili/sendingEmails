<?php

$emailTo = "hosamrababa@hotmail.com";

$subject = "Test this message";

$body = "Test Test Test Test Test Test Test Test";

$header = "From: info@facebook.com";

/*
mail($emailTo,
     $subject,
     $body,
     $header);

     */

 if( mail($emailTo,
    $subject,
    $body,
    $header)){
        echo "<h1>Email has been sent succesfully";
    }else{echo "Email wasn't sent as it was expected";}

    //http://www.velvetblues.com/web-development-blog/avoid-spam-filters-with-php-mail-emails/

    // http://mandrill.com/    (mail server)
?>