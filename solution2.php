<?php
$i=0;
  $name = "Gandalf,Aragorn,Legolas";
  $names = explode(",",$name);
  echo strtolower(implode("*",$names));
?>