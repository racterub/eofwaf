<?php
if(preg_match("/files:/i",file_get_contents("php://input"))) die();
foreach ($_REQUEST as $k => $v) {
   $_REQUEST[$k]=preg_replace("/flag/",'',$v);
}