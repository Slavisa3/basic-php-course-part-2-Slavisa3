<?php

$string = 'The quick " " brown fox' ;

echo preg_replace("/\s+/", "", $string);
