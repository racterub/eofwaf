<?php
foreach ($_REQUEST as $k => $v) {
    $_REQUEST[$k]=preg_replace("/flag/",'',$v);
}