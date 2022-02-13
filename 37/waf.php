<?php 
if(isset($_POST['url'])){
 $u=$_POST['url'];
  if(!strpos($u,'flag')!==0)die();
}