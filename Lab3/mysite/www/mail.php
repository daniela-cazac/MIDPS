<? php
$recepient="danycazac97@yahoo.com";
$sitename= "mysite";

$name= trim($_POST["name"];
$text=trim($_POST["text"];
$message= "Numele: $name \nMesajul: $text";

$pagetitle="Feedback nou de pe site-ul \"$sitename\"";

mail($recepient,$pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");