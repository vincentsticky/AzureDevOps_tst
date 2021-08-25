<?php

require './libs/Smarty.class.php';
include ('db_connection.php');

$Entity = "ARaymond Network";
$smarty = new Smarty;
$smarty->caching = false;
$smarty->cache_lifetime = 120;
$smarty->assign("UpdateDate",date("H:i:s (e)"));
$smarty->assign("TitleProcessToDo","Process tasks To Do");
$smarty->assign("TitleProcessCompleted","Process tasks Completed");
$smarty->assign("TitleProcessOpened","Processes Still Open");

$datas=array();
//$smarty->assign("chart_data","$datas");


// Calculates New Tickets
$query="SELECT DATE_FORMAT(raynet_glpi_tickets.date_creation, '%Y/%m') AS GroupDate, count(raynet_glpi_tickets.id) FROM raynet_glpi_tickets WHERE raynet_glpi_tickets.date_creation >= DATE_FORMAT( CURRENT_DATE - INTERVAL 12 MONTH, '%Y/%m/01' )
GROUP BY GroupDate
ORDER BY GroupDate DESC";

$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("12MonthTickets",$res);

$smarty->display('Dashboard.tpl');