<?php
  $name = "Gandalf,Aragorn,Legolas";
  $names = explode(",",$name);
  echo strtolower(implode("*",$names));
?>