<?php

require './libs/Smarty.class.php';
include ('db_connection.php');

$Entity = "Global";
$smarty = new Smarty;

$groups_detail = array();
//$FlagName= $_GET['flag'];
/*$groups_detail[1]['title'] = $_GET['group1'];
$groups_detail[2]['title'] = $_GET['group2'];
$groups_detail[3]['title'] = $_GET['group3'];
$groups_detail[4]['title'] = $_GET['group1'];
$groups_detail[5]['title'] = $_GET['group2'];
$groups_detail[6]['title'] = $_GET['group3'];
*/

$groups = $_GET['groups'];
$groups_array = explode(",", $groups) ;

$maingroup = array();
$maingroup[1]['title']= $_GET['maingroup'];

//if (isset($groups_array) and sizeof($groups_array>0))
{
    for ($i=1; $i <= sizeof($groups_array); $i++)
    {
        $groups_detail[$i]['title']=$groups_array[$i-1];
    }

}

$smarty->caching = false;
$smarty->cache_lifetime = 120;
$smarty->assign("UpdateDate",date("H:i:s (e)"));
$smarty->assign("TitleProcessToDo","Process tasks To Do");
$smarty->assign("TitleProcessCompleted","Process tasks Completed");
$smarty->assign("TitleProcessOpened","Processes Still Open");


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

// Calculates Main Group Details
    // Processing Incidents
    $query="SELECT COUNT(raynet_glpi_tickets.id) FROM glpi_tickets
    JOIN glpi_entities ON glpi_entities.id = raynet_glpi_tickets.entities_id
    JOIN glpi_groups_tickets ON raynet_glpi_tickets.id = glpi_groups_tickets.tickets_id 
    JOIN glpi_groups ON glpi_groups.id = glpi_groups_tickets.groups_id 
    WHERE raynet_glpi_tickets.status IN (2,3) and glpi_groups_tickets.`type` = 2 and raynet_glpi_tickets.type = 1 AND glpi_groups.NAME LIKE '%" . $maingroup[1]['title'] . "%' AND glpi_entities.completename LIKE '%". $Entity ."%'
    ";

    $data = mysqli_query($link, $query);
    $res= mysqli_fetch_array($data);
    $maingroup[1]['processingincidents'] = $res[0];
    
    // Processing Requests
    $query="SELECT COUNT(raynet_glpi_tickets.id) FROM glpi_tickets
    JOIN glpi_entities ON glpi_entities.id = raynet_glpi_tickets.entities_id
    JOIN glpi_groups_tickets ON raynet_glpi_tickets.id = glpi_groups_tickets.tickets_id 
    JOIN glpi_groups ON glpi_groups.id = glpi_groups_tickets.groups_id 
    WHERE raynet_glpi_tickets.status IN (2,3) and glpi_groups_tickets.`type` = 2 and raynet_glpi_tickets.type = 2 AND glpi_groups.NAME LIKE '%" . $maingroup[1]['title'] . "%' AND glpi_entities.completename LIKE '%". $Entity ."%'
    ";
    $data = mysqli_query($link, $query);
    $res= mysqli_fetch_array($data);
    $maingroup[1]['processingrequests'] = $res[0];

    // Pending Incidents
    $query="SELECT COUNT(raynet_glpi_tickets.id) FROM glpi_tickets
    JOIN glpi_entities ON glpi_entities.id = raynet_glpi_tickets.entities_id
    JOIN glpi_groups_tickets ON raynet_glpi_tickets.id = glpi_groups_tickets.tickets_id 
    JOIN glpi_groups ON glpi_groups.id = glpi_groups_tickets.groups_id 
    WHERE raynet_glpi_tickets.status =4  and glpi_groups_tickets.`type` = 2 and raynet_glpi_tickets.type = 1 AND glpi_groups.NAME LIKE '%" . $maingroup[1]['title'] . "%' AND glpi_entities.completename LIKE '%". $Entity ."%'
    ";

    $data = mysqli_query($link, $query);
    $res= mysqli_fetch_array($data);
    $maingroup[1]['pendingincidents'] = $res[0];
    
    // Pending Requests
    $query="SELECT COUNT(raynet_glpi_tickets.id) FROM glpi_tickets
    JOIN glpi_entities ON glpi_entities.id = raynet_glpi_tickets.entities_id
    JOIN glpi_groups_tickets ON raynet_glpi_tickets.id = glpi_groups_tickets.tickets_id 
    JOIN glpi_groups ON glpi_groups.id = glpi_groups_tickets.groups_id 
    WHERE raynet_glpi_tickets.status = 4 and glpi_groups_tickets.`type` = 2 and raynet_glpi_tickets.type = 2 AND glpi_groups.NAME LIKE '%" . $maingroup[1]['title'] . "%' AND glpi_entities.completename LIKE '%". $Entity ."%'
    ";
    $data = mysqli_query($link, $query);
    $res= mysqli_fetch_array($data);
    $maingroup[1]['pendingrequests'] = $res[0];
 
    // Solved this year Incidents
    $query="SELECT COUNT(raynet_glpi_tickets.id) FROM glpi_tickets
    JOIN glpi_entities ON glpi_entities.id = raynet_glpi_tickets.entities_id
    JOIN glpi_groups_tickets ON raynet_glpi_tickets.id = glpi_groups_tickets.tickets_id 
    JOIN glpi_groups ON glpi_groups.id = glpi_groups_tickets.groups_id 
    WHERE raynet_glpi_tickets.status in (5,6) and glpi_groups_tickets.`type` = 2 and raynet_glpi_tickets.type = 1 AND glpi_groups.NAME LIKE '%" . $maingroup[1]['title'] . "%' AND glpi_entities.completename LIKE '%". $Entity ."%'
    and raynet_glpi_tickets.closedate Like '%" . date("%Y")."%'";

    $data = mysqli_query($link, $query);
    $res= mysqli_fetch_array($data);
    $maingroup[1]['solvedincidents'] = $res[0];
    
    // Solved this year Requests
    $query="SELECT COUNT(raynet_glpi_tickets.id) FROM glpi_tickets
    JOIN glpi_entities ON glpi_entities.id = raynet_glpi_tickets.entities_id
    JOIN glpi_groups_tickets ON raynet_glpi_tickets.id = glpi_groups_tickets.tickets_id 
    JOIN glpi_groups ON glpi_groups.id = glpi_groups_tickets.groups_id 
    WHERE raynet_glpi_tickets.status in (5,6) and glpi_groups_tickets.`type` = 2 and raynet_glpi_tickets.type = 2 AND glpi_groups.NAME LIKE '%" . $maingroup[1]['title'] . "%' AND glpi_entities.completename LIKE '%". $Entity ."%'
    and raynet_glpi_tickets.closedate Like '%" . date("%Y")."%'";
    $data = mysqli_query($link, $query);
    $res= mysqli_fetch_array($data);
    $maingroup[1]['solvedrequests'] = $res[0];

    // To Do tasks
    $query="SELECT COUNT(glpi_tickettasks.id) FROM glpi_tickettasks
    right join glpi_groups ON glpi_groups.id = glpi_tickettasks.groups_id_tech
    WHERE glpi_groups.name LIKE '%" . $maingroup[1]['title'] . "%' AND glpi_tickettasks.state = 1";
    $data = mysqli_query($link, $query);
    $res= mysqli_fetch_array($data);
    $maingroup[1]['todotasks'] = $res[0];

// calculates Group1, Goup2, Group 3 Details
for ($i=1; $i <= sizeof($groups_detail); $i++)
{
    // Processing Incidents
    $query="SELECT COUNT(raynet_glpi_tickets.id) FROM glpi_tickets
    JOIN glpi_entities ON glpi_entities.id = raynet_glpi_tickets.entities_id
    JOIN glpi_groups_tickets ON raynet_glpi_tickets.id = glpi_groups_tickets.tickets_id 
    JOIN glpi_groups ON glpi_groups.id = glpi_groups_tickets.groups_id 
    WHERE raynet_glpi_tickets.status IN (2,3) and glpi_groups_tickets.`type` = 2 and raynet_glpi_tickets.type = 1 AND glpi_groups.NAME LIKE '%" . $groups_detail[$i]['title'] . "%' AND glpi_entities.completename LIKE '%". $Entity ."%'
    ";

    $data = mysqli_query($link, $query);
    $res= mysqli_fetch_array($data);
    $groups_detail[$i]['processingincidents'] = $res[0];
    
    // Processing Requests
    $query="SELECT COUNT(raynet_glpi_tickets.id) FROM glpi_tickets
    JOIN glpi_entities ON glpi_entities.id = raynet_glpi_tickets.entities_id
    JOIN glpi_groups_tickets ON raynet_glpi_tickets.id = glpi_groups_tickets.tickets_id 
    JOIN glpi_groups ON glpi_groups.id = glpi_groups_tickets.groups_id 
    WHERE raynet_glpi_tickets.status IN (2,3) and glpi_groups_tickets.`type` = 2 and raynet_glpi_tickets.type = 2 AND glpi_groups.NAME LIKE '%" . $groups_detail[$i]['title'] . "%' AND glpi_entities.completename LIKE '%". $Entity ."%'
    ";
    $data = mysqli_query($link, $query);
    $res= mysqli_fetch_array($data);
    $groups_detail[$i]['processingrequests'] = $res[0];

    // Pending Incidents
    $query="SELECT COUNT(raynet_glpi_tickets.id) FROM glpi_tickets
    JOIN glpi_entities ON glpi_entities.id = raynet_glpi_tickets.entities_id
    JOIN glpi_groups_tickets ON raynet_glpi_tickets.id = glpi_groups_tickets.tickets_id 
    JOIN glpi_groups ON glpi_groups.id = glpi_groups_tickets.groups_id 
    WHERE raynet_glpi_tickets.status =4  and glpi_groups_tickets.`type` = 2 and raynet_glpi_tickets.type = 1 AND glpi_groups.NAME LIKE '%" . $groups_detail[$i]['title'] . "%' AND glpi_entities.completename LIKE '%". $Entity ."%'
    ";

    $data = mysqli_query($link, $query);
    $res= mysqli_fetch_array($data);
    $groups_detail[$i]['pendingincidents'] = $res[0];
    
    // Pending Requests
    $query="SELECT COUNT(raynet_glpi_tickets.id) FROM glpi_tickets
    JOIN glpi_entities ON glpi_entities.id = raynet_glpi_tickets.entities_id
    JOIN glpi_groups_tickets ON raynet_glpi_tickets.id = glpi_groups_tickets.tickets_id 
    JOIN glpi_groups ON glpi_groups.id = glpi_groups_tickets.groups_id 
    WHERE raynet_glpi_tickets.status = 4 and glpi_groups_tickets.`type` = 2 and raynet_glpi_tickets.type = 2 AND glpi_groups.NAME LIKE '%" . $groups_detail[$i]['title'] . "%' AND glpi_entities.completename LIKE '%". $Entity ."%'
    ";
    $data = mysqli_query($link, $query);
    $res= mysqli_fetch_array($data);
    $groups_detail[$i]['pendingrequests'] = $res[0];
 
    // Solved this year Incidents
    $query="SELECT COUNT(raynet_glpi_tickets.id) FROM glpi_tickets
    JOIN glpi_entities ON glpi_entities.id = raynet_glpi_tickets.entities_id
    JOIN glpi_groups_tickets ON raynet_glpi_tickets.id = glpi_groups_tickets.tickets_id 
    JOIN glpi_groups ON glpi_groups.id = glpi_groups_tickets.groups_id 
    WHERE raynet_glpi_tickets.status in (5,6) and glpi_groups_tickets.`type` = 2 and raynet_glpi_tickets.type = 1 AND glpi_groups.NAME LIKE '%" . $groups_detail[$i]['title'] . "%' AND glpi_entities.completename LIKE '%". $Entity ."%'
    and raynet_glpi_tickets.closedate Like '%" . date("%Y")."%'";

    $data = mysqli_query($link, $query);
    $res= mysqli_fetch_array($data);
    $groups_detail[$i]['solvedincidents'] = $res[0];
    
    // Solved this year Requests
    $query="SELECT COUNT(raynet_glpi_tickets.id) FROM glpi_tickets
    JOIN glpi_entities ON glpi_entities.id = raynet_glpi_tickets.entities_id
    JOIN glpi_groups_tickets ON raynet_glpi_tickets.id = glpi_groups_tickets.tickets_id 
    JOIN glpi_groups ON glpi_groups.id = glpi_groups_tickets.groups_id 
    WHERE raynet_glpi_tickets.status in (5,6) and glpi_groups_tickets.`type` = 2 and raynet_glpi_tickets.type = 2 AND glpi_groups.NAME LIKE '%" . $groups_detail[$i]['title'] . "%' AND glpi_entities.completename LIKE '%". $Entity ."%'
    and raynet_glpi_tickets.closedate Like '%" . date("%Y")."%'";
    $data = mysqli_query($link, $query);
    $res= mysqli_fetch_array($data);
    $groups_detail[$i]['solvedrequests'] = $res[0];

    // To Do tasks
    $query="SELECT COUNT(glpi_tickettasks.id) FROM glpi_tickettasks
    right join glpi_groups ON glpi_groups.id = glpi_tickettasks.groups_id_tech
    WHERE glpi_groups.name LIKE '%" . $groups_detail[$i]['title'] . "%' AND glpi_tickettasks.state = 1";
    $data = mysqli_query($link, $query);
    $res= mysqli_fetch_array($data);
    $groups_detail[$i]['todotasks'] = $res[0];
    

}
$smarty->assign(
    "detailgroups",
    $groups_detail
);

$smarty->assign("main_group", $maingroup[1]);

$smarty->display('Global_groups.tpl');