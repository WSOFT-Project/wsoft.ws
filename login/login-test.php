<?php
include '..\..\php\account\main.php';
$a = new Account();
$r=$a->login("test","test");
echo '=>\'';
  echo $r;
echo '\'';

?>