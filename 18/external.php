<?php
if (isset($_POST['url']) && strpos($_POST['url'],'http')!==0) die(sleep(300));
foreach ($_REQUEST as $k => $v) {
    if (preg_match('/fl|ag|\'|\\\\|cp|tmp/', $_REQUEST[$k])) die(sleep(300));
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

if ($_SERVER['CONTENT_TYPE'] == 'application/xml')
    die(sleep(300));

$a="/tmp/meow";
define("APP_CONFIG",$a);
?>
