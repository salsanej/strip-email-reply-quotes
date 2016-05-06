<?php

function stripEmailReplyQuotes($message) {

     $message = strip_tags($message);

     $message = preg_replace("/(^\w.+:\n)?(^>.*(\n|$))+/mi", '', $message);

     $message = preg_replace("/(On).*(wrote:).*$/sm", '', $message);

     $message = preg_replace("/^--.*$/sm", '', $message);

     $message = preg_replace("/^____________.*$/mi", '', $message);

     $message = preg_replace("/From:.*^(To:).*^(Subject:).*/sm", '', $message);
     
     $message = preg_replace("/(\W)From:.*^((\W)To:).*^((\W)Subject:).*/sm", '', $message); 
     
     $message = preg_replace('/Content-(Type|ID|Disposition|Transfer-Encoding):.*?\r\n/is', "", $message);
     
     $message = preg_replace("/[0-9]*-[0-9]*-[0-9]* [0-9]*:[0-9]* .*:/mi", '', $message);
     
     $message = preg_replace("/\[cid:.*\]/mi", '', $message); 

     $message = preg_replace("/\[image:.*\]/mi", '', $message);  
     
     $message = trim($message);
     
     return $message;
}


?>
