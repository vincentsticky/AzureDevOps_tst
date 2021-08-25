<?php

require './libs/Smarty.class.php';
include ('db_connection.php');

$Entity = "ARaymond Network";
$smarty = new Smarty;
$smarty->caching = false;
$smarty->cache_lifetime = 120;


$smarty->display('chart.tpl');