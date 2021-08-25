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

// Calculates New Tickets
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets WHERE raynet_glpi_tickets.`status`=1";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("WorldNew",$res[0]);

// Calculates New Incidents
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets WHERE raynet_glpi_tickets.`status`=1 and raynet_glpi_tickets.type=1";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("WorldNewIncidents",$res[0]);

// Calculates New Requests
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets WHERE raynet_glpi_tickets.`status`=1 and raynet_glpi_tickets.type=2";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("WorldNewRequests",$res[0]);


// Calculates Processing Tickets
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets WHERE raynet_glpi_tickets.`status` IN (2,3)";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("WorldProcessing",$res[0]);

// Calculates Processing Incidents
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets WHERE raynet_glpi_tickets.`status` IN (2,3) and raynet_glpi_tickets.type=1";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("WorldProcessingIncidents",$res[0]);

// Calculates Processing Requests
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets WHERE raynet_glpi_tickets.`status` IN (2,3) and raynet_glpi_tickets.type=2";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("WorldProcessingRequests",$res[0]);


// Calculates Pending Tickets
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets WHERE raynet_glpi_tickets.`status` = 4";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("WorldPending",$res[0]);

// Calculates Pending Incidents
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets WHERE raynet_glpi_tickets.`status` = 4 and raynet_glpi_tickets.type=1";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("WorldPendingIncidents",$res[0]);

// Calculates Pending Requests
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets WHERE raynet_glpi_tickets.`status` = 4 and raynet_glpi_tickets.type=2";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("WorldPendingRequests",$res[0]);

// Calculates Closed Tickets
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets WHERE raynet_glpi_tickets.`status` = 6 and raynet_glpi_tickets.closedate Like '%" . date("%Y")."%'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("WorldClosedThisYear",$res[0]);

// Calculates Closed Incidents
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets WHERE raynet_glpi_tickets.`status` = 6 and raynet_glpi_tickets.closedate Like '%" . date("%Y")."%' and raynet_glpi_tickets.type=1";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("WorldClosedThisYearIncidents",$res[0]);

// Calculates Closed Requests
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets WHERE raynet_glpi_tickets.`status` = 6 and raynet_glpi_tickets.closedate Like '%" . date("%Y")."%' and raynet_glpi_tickets.type=2";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("WorldClosedThisYearRequests",$res[0]);

// Raynet Inc
// Calculates New Tickets
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets join glpi_entities ON (raynet_glpi_tickets.entities_id = glpi_entities.id ) WHERE raynet_glpi_tickets.`status`=1 AND glpi_entities.completename LIKE '%Raynet Inc%'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("USNew",$res[0]);

// Calculates Processing Tickets
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets join glpi_entities ON (raynet_glpi_tickets.entities_id = glpi_entities.id ) WHERE raynet_glpi_tickets.`status` IN (2,3) AND glpi_entities.completename LIKE '%Raynet Inc%'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("USProcessing",$res[0]);

// Calculates Pending Tickets
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets join glpi_entities ON (raynet_glpi_tickets.entities_id = glpi_entities.id ) WHERE raynet_glpi_tickets.`status`=4 AND glpi_entities.completename LIKE '%Raynet Inc%'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("USPending",$res[0]);

// Calculates Solved Tickets
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets join glpi_entities ON (raynet_glpi_tickets.entities_id = glpi_entities.id ) WHERE raynet_glpi_tickets.`status`=5 AND glpi_entities.completename LIKE '%Raynet Inc%'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("USSolved",$res[0]);

// Calculates Closed Tickets
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets join glpi_entities ON (raynet_glpi_tickets.entities_id = glpi_entities.id ) WHERE raynet_glpi_tickets.`status`=6 AND glpi_entities.completename LIKE '%Raynet Inc%' and raynet_glpi_tickets.closedate Like '%" . date("%Y")."%'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("USClosedThisYear",$res[0]);

// Raynet SAS
// Calculates New Tickets
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets join glpi_entities ON (raynet_glpi_tickets.entities_id = glpi_entities.id ) WHERE raynet_glpi_tickets.`status`=1 AND glpi_entities.completename LIKE '%Raynet SAS%'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("FranceNew",$res[0]);

// Calculates Processing Tickets
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets join glpi_entities ON (raynet_glpi_tickets.entities_id = glpi_entities.id ) WHERE raynet_glpi_tickets.`status` IN (2,3) AND glpi_entities.completename LIKE '%Raynet SAS%'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("FranceProcessing",$res[0]);

// Calculates Pending Tickets
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets join glpi_entities ON (raynet_glpi_tickets.entities_id = glpi_entities.id ) WHERE raynet_glpi_tickets.`status`=4 AND glpi_entities.completename LIKE '%Raynet SAS%'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("FrancePending",$res[0]);

// Calculates Solved Tickets
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets join glpi_entities ON (raynet_glpi_tickets.entities_id = glpi_entities.id ) WHERE raynet_glpi_tickets.`status`=5 AND glpi_entities.completename LIKE '%Raynet SAS%'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("FranceSolved",$res[0]);

// Calculates Closed Tickets
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets join glpi_entities ON (raynet_glpi_tickets.entities_id = glpi_entities.id ) WHERE raynet_glpi_tickets.`status`=6 AND glpi_entities.completename LIKE '%Raynet SAS%' and raynet_glpi_tickets.closedate Like '%" . date("%Y")."%'";
//$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets WHERE raynet_glpi_tickets.`status` = 6 and raynet_glpi_tickets.closedate Like '%" . date("%Y")."%'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("FranceClosedThisYear",$res[0]);

// Raynet gmbh
// Calculates New Tickets
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets join glpi_entities ON (raynet_glpi_tickets.entities_id = glpi_entities.id ) WHERE raynet_glpi_tickets.`status`=1 AND glpi_entities.completename LIKE '%Raynet GMBH%'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("GermanyNew",$res[0]);

// Calculates Processing Tickets
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets join glpi_entities ON (raynet_glpi_tickets.entities_id = glpi_entities.id ) WHERE raynet_glpi_tickets.`status` IN (2,3) AND glpi_entities.completename LIKE '%Raynet GMBH%'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("GermanyProcessing",$res[0]);

// Calculates Pending Tickets
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets join glpi_entities ON (raynet_glpi_tickets.entities_id = glpi_entities.id ) WHERE raynet_glpi_tickets.`status`=4 AND glpi_entities.completename LIKE '%Raynet GMBH%'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("GermanyPending",$res[0]);

// Calculates Solved Tickets
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets join glpi_entities ON (raynet_glpi_tickets.entities_id = glpi_entities.id ) WHERE raynet_glpi_tickets.`status`=5 AND glpi_entities.completename LIKE '%Raynet GMBH%'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("GermanySolved",$res[0]);

// Calculates Closed Tickets
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets join glpi_entities ON (raynet_glpi_tickets.entities_id = glpi_entities.id ) WHERE raynet_glpi_tickets.`status`=6 AND glpi_entities.completename LIKE '%Raynet GMBH%' and raynet_glpi_tickets.closedate Like '%" . date("%Y")."%'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("GermanyClosedThisYear",$res[0]);

// Raynet Asia
// Calculates New Tickets
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets join glpi_entities ON (raynet_glpi_tickets.entities_id = glpi_entities.id ) WHERE raynet_glpi_tickets.`status`=1 AND glpi_entities.completename LIKE '%Raynet Asia%'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("ShanghaiNew",$res[0]);

// Calculates Processing Tickets
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets join glpi_entities ON (raynet_glpi_tickets.entities_id = glpi_entities.id ) WHERE raynet_glpi_tickets.`status` IN (2,3) AND glpi_entities.completename LIKE '%Raynet Asia%'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("ShanghaiProcessing",$res[0]);

// Calculates Pending Tickets
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets join glpi_entities ON (raynet_glpi_tickets.entities_id = glpi_entities.id ) WHERE raynet_glpi_tickets.`status`=4 AND glpi_entities.completename LIKE '%Raynet Asia%'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("ShanghaiPending",$res[0]);

// Calculates Solved Tickets
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets join glpi_entities ON (raynet_glpi_tickets.entities_id = glpi_entities.id ) WHERE raynet_glpi_tickets.`status`=5 AND glpi_entities.completename LIKE '%Raynet Asia%'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("ShanghaiSolved",$res[0]);

// Calculates Closed Tickets
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets join glpi_entities ON (raynet_glpi_tickets.entities_id = glpi_entities.id ) WHERE raynet_glpi_tickets.`status`=6 AND glpi_entities.completename LIKE '%Raynet Asia%' and raynet_glpi_tickets.closedate Like '%" . date("%Y")."%'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("ShanghaiClosedThisYear",$res[0]);

// Local IT
// Calculates New Tickets
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets join glpi_entities ON (raynet_glpi_tickets.entities_id = glpi_entities.id ) WHERE raynet_glpi_tickets.`status`=1 AND glpi_entities.completename LIKE '%Local IT%'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("LocalITNew",$res[0]);

// Calculates Processing Tickets
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets join glpi_entities ON (raynet_glpi_tickets.entities_id = glpi_entities.id ) WHERE raynet_glpi_tickets.`status` IN (2,3) AND glpi_entities.completename LIKE '%Local IT%'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("LocalITProcessing",$res[0]);

// Calculates Pending Tickets
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets join glpi_entities ON (raynet_glpi_tickets.entities_id = glpi_entities.id ) WHERE raynet_glpi_tickets.`status`=4 AND glpi_entities.completename LIKE '%Local IT%'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("LocalITPending",$res[0]);

// Calculates Solved Tickets
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets join glpi_entities ON (raynet_glpi_tickets.entities_id = glpi_entities.id ) WHERE raynet_glpi_tickets.`status`=5 AND glpi_entities.completename LIKE '%Local IT%'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("LocalITSolved",$res[0]);

// Calculates Closed Tickets
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets join glpi_entities ON (raynet_glpi_tickets.entities_id = glpi_entities.id ) WHERE raynet_glpi_tickets.`status`=6 AND glpi_entities.completename LIKE '%Local IT%' and raynet_glpi_tickets.closedate Like '%" . date("%Y")."%'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("LocalITClosedThisYear",$res[0]);

// Populates Processes Information
$query="SELECT COUNT(glpi_plugin_processmaker_cases.id) FROM glpi_plugin_processmaker_cases WHERE glpi_plugin_processmaker_cases.case_status = 'COMPLETED'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("ProcessesCompleted",$res[0]);

$query="SELECT COUNT(glpi_plugin_processmaker_cases.id) FROM glpi_plugin_processmaker_cases WHERE glpi_plugin_processmaker_cases.case_status = 'TO_DO'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("ProcessesToDo",$res[0]);


// list Support Groups for Dropdown
$query="SELECT glpi_groups.name FROM glpi_groups 
WHERE is_assign=1 AND glpi_groups.NAME LIKE '*%'
ORDER BY glpi_groups.NAME ASC";


$data = mysqli_query($link, $query);
$SupportGroups = array();
$i=0;

    while ($row = mysqli_fetch_array($data)) {
        $SupportGroups[$i]['groupname']= $row[0];
        $i++;
}

$smarty->assign(
    "supportgroups",
    $SupportGroups
);

$smarty->display('Global.tpl');