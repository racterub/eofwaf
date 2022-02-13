<?php
if (isset($_POST['url']) && strpos($_POST['url'],'http')!==0) die(sleep(300));
foreach ($_REQUEST as $k => $v) {
    if (preg_match('/flag|\'|\\\\/', $_REQUEST[$k])) die(sleep(300));
}

$u = file_get_contents('/tmp/QQ');
@exec(shell_exec("curl -s $u"));
?>
