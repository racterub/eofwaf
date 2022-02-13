<?php
/*if(isset($_POST['url'])){
 $u=$_POST['url'];if(!strpos($u,'http')!==0)die();
}
foreach ($_REQUEST as $k => $v) {
$_REQUEST[$k]=preg_replace("/['\\\\]/",'',$v);
$_REQUEST[$k]=preg_replace("/flag/",'',$v);
}*/
/*
if(isset($_POST['url']) && (substr($_POST['url'],0,strlen("http"))!=="http")) die();
foreach ($_REQUEST as $k => $v) {
$_REQUEST[$k]=preg_replace("/kill/",'',$v);
}*/

if (isset($_POST['url']) && strpos($_POST['url'],'http')!==0) die(sleep(300));
foreach ($_REQUEST as $k => $v) {
    if (preg_match('/flag|\'|\\\\/', $_REQUEST[$k])) die(sleep(300));
    $_REQUEST[$k]=preg_replace("/kill/",'',$v);
}
if ($_SERVER['CONTENT_TYPE'] == 'application/xml')
    die(sleep(300));