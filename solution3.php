<?php
  $spell = "   ABRACADABRA   ";
  $spellX = "abracadabra";
  if((strcmp($spellX, strtolower(trim($spell))))==0){
      echo "Correct Spell Mr. Wizard King";
  }
 else{
     echo "OHH No ! Wizard world is still at risk";
 }
?>