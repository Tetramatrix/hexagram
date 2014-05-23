<?php
/* * ************************************************************* 
 * Copyright notice 
 * 
 * (c) 2014 Chi Hoang (info@chihoang.de) 
 *  All rights reserved 
 * 
 * **************************************************************/
require_once("main.php");
$oracle = new oracle($tabiging,$tabhex,$tabhexindex,$tabcurr,$hexnum,$hexnametab,$wtabhex);
echo "Type in your question (optional):";
$handle = fopen ("php://stdin","r");
$line = fgets($handle);
$iging = $oracle->hexagram();
$index = $oracle->find_index($iging);
$current = $oracle->find_current($index);
$change = $oracle->find_change($index);
$name = $oracle->find_name($current);
$namechanged = $oracle->find_name($change);
echo "Your question was:".$line."\r";
echo "Your consultation resulted in the following hexagram: Nr.$current $name changing to Nr. $change $namechanged";
    
?>
