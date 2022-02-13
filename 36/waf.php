<?php // Your WAF goes here
if(isset($_POST['url'])){
 $_POST['url'] = str_replace('flag','',$_POST['url']);
}