<?php
/*if(isset($_POST['url'])){
 $u=$_POST['url'];if(!strpos($u,'http')!==0)die();
}
foreach ($_REQUEST as $k => $v) {
$_REQUEST[$k]=preg_replace("/['\\\\]/",'',$v);
$_REQUEST[$k]=preg_replace("/flag/",'',$v);
}*/

if(isset($_POST['url']) && (substr($_POST['url'],0,strlen("http"))!=="http")) die();
foreach ($_REQUEST as $k => $v) {
$_REQUEST[$k]=preg_replace("/kill/",'',$v);
}
