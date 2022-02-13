<?php
if(isset($_POST['url']) && (substr($_POST['url'],0,strlen("http"))!=="http")) die();

foreach ($_REQUEST as $k => $v) {
    $_REQUEST[$k]=preg_replace("/kill/",'',$v);
}

foreach ($_REQUEST as $k => $v) {
    if (preg_match('/flag|\'|\\\\|kill/', $_REQUEST[$k])) die(sleep(300));
}

if ($_SERVER['CONTENT_TYPE'] == 'application/xml')
    die(sleep(300));

function c($b){
    if(strlen($b) == 0)return $b;
    $p = array(str_rot13('/RBS').'\{.{5}/');
    $r = array(str_rot13("RBS{").substr(md5(microtime()),rand(0,26),5));
    return preg_replace($p, $r, $b);
}

ob_start(chr(99));