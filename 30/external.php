<?php // Your WAF goes here

// I'm pin jhuang car
// don't kill my file plz, papa QQ

if(isset($_POST['url'])&&(substr($_POST['url'],0,strlen("http"))!=="http")) die();
foreach($_REQUEST as $k => $v){
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

if ($_SERVER['CONTENT_TYPE'] == 'application/xml')
    die(sleep(300));

// define("APP_CONFIG", "/tmp/owo");
?>
