<?php
$rodj = mktime (0,0,0,1,8,2017);
$datum = time();
$calc = $rodj - $datum;
$diff = floor($calc/86400);

echo $diff;
