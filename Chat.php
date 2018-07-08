<?php

$Login = urlencode($_GET['login']);
$Msg = urlencode($_GET['mess']);

$Message = "[" . date("H:i:s") . "] [" . $Login . "] - " . $Msg

file_put_contents("Chats.txt", "$Message\n", FILE_APPEND);

?>