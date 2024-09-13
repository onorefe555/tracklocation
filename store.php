<?php
 $myfile = fopen("location.txt", "w");
 $txt = " lat :  " . $_GET["lat"] . "\n long : " .$_GET["long"];
fwrite($myfile, $txt);
fclose($myfile);
?>