<?php
   $line = "In the above example we use back references in the replacement string";


   if (preg_match("/\bin\b/i", $line, $match)) {
      echo "Match found!";
    }
      else {
      echo "Match not found!";
    }
