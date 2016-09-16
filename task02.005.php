<?php

$date = date('Y-m-j');
$date1 = strtotime ( '+1 month' , strtotime ( $date ) ) ;
$calc = date ( 'Y-m-j' , $date1);

echo $calc;
