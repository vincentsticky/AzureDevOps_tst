<?php

require './libs/Smarty.class.php';
include ('db_connection.php');

$Root = $_GET['entity'];
$Entity = urldecode($Root);


$FlagName= $_GET['flag'];



$smarty = new Smarty;
$smarty->caching = false;
$smarty->cache_lifetime = 120;
$smarty->assign("entity",$Entity);
$smarty->assign("flag",$FlagName);
$smarty->assign('CopyrightInfo', $CopyrightInfo);

$smarty->assign("UpdateDate",date("H:i (e)"));
$smarty->assign("TitleProcessToDo","Process tasks To Do");
$smarty->assign("TitleProcessCompleted","Process tasks Completed");
$smarty->assign("TitleProcessOpened","Processes Still Open");

$smarty->assign("TitleTickets","Closed Tickets");
$smarty->assign("SubTitleTickets","closed ticket(s).");
$smarty->assign("SubTitleTicket","Ticket from ");

// Calculates Global New Tickets
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets join glpi_entities ON (raynet_glpi_tickets.entities_id = glpi_entities.id )  WHERE raynet_glpi_tickets.`status`=1 and glpi_entities.completename Like '%Raynet Inc%'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("AmericasNewTickets",$res[0]);

$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets join glpi_entities ON (raynet_glpi_tickets.entities_id = glpi_entities.id )  WHERE raynet_glpi_tickets.`status`=1 and glpi_entities.completename Like '%Raynet SAS%'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("EuropeFNewTickets",$res[0]);

$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets join glpi_entities ON (raynet_glpi_tickets.entities_id = glpi_entities.id )  WHERE raynet_glpi_tickets.`status`=1 and glpi_entities.completename Like '%Raynet GmbH%'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("EuropeGNewTickets",$res[0]);

$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets join glpi_entities ON (raynet_glpi_tickets.entities_id = glpi_entities.id )  WHERE raynet_glpi_tickets.`status`=1 and glpi_entities.completename Like '%Raynet Asia%'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("ChinaSNewTickets",$res[0]);

$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets join glpi_entities ON (raynet_glpi_tickets.entities_id = glpi_entities.id )  WHERE raynet_glpi_tickets.`status`=1 and glpi_entities.completename Like '%Local IT%'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("LocalITNewTickets",$res[0]);

// Calculates New Tickets
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets join glpi_entities ON (raynet_glpi_tickets.entities_id = glpi_entities.id )  WHERE raynet_glpi_tickets.`status`=1 and glpi_entities.completename Like '%". $Entity ."%'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("EntityNew",$res[0]);

// Calculates New Incidents
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets join glpi_entities ON (raynet_glpi_tickets.entities_id = glpi_entities.id )  WHERE raynet_glpi_tickets.`status`=1 and raynet_glpi_tickets.type=1 and glpi_entities.completename Like '%". $Entity ."%'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("EntityNewIncidents",$res[0]);

// Calculates New Requests
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets join glpi_entities ON (raynet_glpi_tickets.entities_id = glpi_entities.id )  WHERE raynet_glpi_tickets.`status`=1 and raynet_glpi_tickets.type=2 and glpi_entities.completename Like '%". $Entity ."%'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("EntityNewRequests",$res[0]);


// Calculates Processing Tickets
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets  join glpi_entities ON (raynet_glpi_tickets.entities_id = glpi_entities.id )  WHERE raynet_glpi_tickets.`status` IN (2,3) and glpi_entities.completename Like '%". $Entity ."%'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("EntityProcessing",$res[0]);


// Calculates Processing Incidents
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets  join glpi_entities ON (raynet_glpi_tickets.entities_id = glpi_entities.id )  WHERE raynet_glpi_tickets.`status` IN (2,3) and raynet_glpi_tickets.type=1 and glpi_entities.completename Like '%". $Entity ."%'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("EntityProcessingIncidents",$res[0]);

// Calculates Processing Requests
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets  join glpi_entities ON (raynet_glpi_tickets.entities_id = glpi_entities.id )  WHERE raynet_glpi_tickets.`status` IN (2,3) and raynet_glpi_tickets.type=2 and glpi_entities.completename Like '%". $Entity ."%'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("EntityProcessingRequests",$res[0]);


// Calculates Pending Tickets
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets  join glpi_entities ON (raynet_glpi_tickets.entities_id = glpi_entities.id ) WHERE raynet_glpi_tickets.`status` = 4 and glpi_entities.completename Like '%". $Entity ."%'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("EntityPending",$res[0]);

// Calculates Pending Incidents
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets  join glpi_entities ON (raynet_glpi_tickets.entities_id = glpi_entities.id )  WHERE raynet_glpi_tickets.`status` = 4 and raynet_glpi_tickets.type=1 and glpi_entities.completename Like '%". $Entity ."%'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("EntityPendingIncidents",$res[0]);

// Calculates Pending Requests
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets  join glpi_entities ON (raynet_glpi_tickets.entities_id = glpi_entities.id )  WHERE raynet_glpi_tickets.`status` = 4 and raynet_glpi_tickets.type=2 and glpi_entities.completename Like '%". $Entity ."%'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("EntityPendingRequests",$res[0]);

// Calculates Closed Tickets
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets  join glpi_entities ON (raynet_glpi_tickets.entities_id = glpi_entities.id )  WHERE raynet_glpi_tickets.`status` = 6 and glpi_entities.completename Like '%". $Entity ."%' and raynet_glpi_tickets.closedate Like '%" . date("%Y")."%'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("EntityClosedThisYear",$res[0]);
$smarty->assign("AmountTickets", $res[0]);

// Calculates Closed Incidents
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets  join glpi_entities ON (raynet_glpi_tickets.entities_id = glpi_entities.id )  WHERE raynet_glpi_tickets.`status` = 6 and glpi_entities.completename Like '%". $Entity ."%' and raynet_glpi_tickets.closedate Like '%" . date("%Y")."%' and raynet_glpi_tickets.type=1";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("EntityClosedThisYearIncidents",$res[0]);

// Calculates Closed Requests
$query="SELECT COUNT(raynet_glpi_tickets.id) FROM raynet_glpi_tickets join glpi_entities ON (raynet_glpi_tickets.entities_id = glpi_entities.id )  WHERE raynet_glpi_tickets.`status` = 6  and raynet_glpi_tickets.closedate Like '%" . date("%Y")."%' and raynet_glpi_tickets.type=2 and glpi_entities.completename Like '%". $Entity ."%'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("EntityClosedThisYearRequests",$res[0]);

$smarty->assign("title","New Tickets detail");



// list Support Groups for Dropdown
$query="SELECT glpi_groups.name FROM glpi_groups 
WHERE is_assign=1 AND glpi_groups.NAME LIKE '*%'
ORDER BY glpi_groups.NAME ASC";
$data = mysqli_query($link, $query);
$SupportGroups= mysqli_fetch_array($data);

$smarty->assign(
  "supportgroups",
  $SupportGroups
);



// list New Tickets
$query="SELECT 
  raynet_glpi_tickets.id As id,
  raynet_glpi_tickets.name As name,
  DATE_FORMAT(raynet_glpi_tickets.date, '%m/%d/%Y'),
  raynet_glpi_tickets.priority,
  CONCAT(glpi_users.realname, ', ', glpi_users.firstname) As Requester,
  glpi_users.registration_number,
  raynet_glpi_tickets.type,
  DATEDIFF(raynet_glpi_tickets.date, CURDATE()),
  glpi_users.picture,
  glpi_users.is_active
  
From
  raynet_glpi_tickets Left Join
  glpi_entities On raynet_glpi_tickets.entities_id = glpi_entities.id Inner Join
  glpi_tickets_users On glpi_tickets_users.tickets_id = raynet_glpi_tickets.id
  Inner Join
  glpi_users On glpi_tickets_users.users_id = glpi_users.id
Where
  raynet_glpi_tickets.status  = 6 And
  glpi_entities.completename Like '%". $Entity ."%' And
  raynet_glpi_tickets.closedate Like '%" . date("%Y")."%' and
  glpi_tickets_users.type = 1
  ORDER by raynet_glpi_tickets.id";

$data = mysqli_query($link, $query);
$Tickets = array();
$i=0;

    while ($row = mysqli_fetch_array($data)) {
        $Tickets[$i]['id']= $row[0];
        $Tickets[$i]['name']= $row[1];
        $Tickets[$i]['date']= $row[2];
        switch ( $row[3]) {
            case 6:
                $Tickets[$i]['priority']= "MAJOR";
                break;

            case 5:
                $Tickets[$i]['priority']= "VERY HIGH";
                break;
            case 4:
                $Tickets[$i]['priority']= "HIGH";
                break;
            case 3:
                $Tickets[$i]['priority']= "MEDIUM";
                break;
            case 2:
                $Tickets[$i]['priority']= "LOW";
                break;
            case 1:
                $Tickets[$i]['priority']= "VERY LOW";
                break;
        }

        $Tickets[$i]['requester']= $row[4];
        $Tickets[$i]['company']= $row[5];
        $Tickets[$i]['type']= $row[6];
        $Tickets[$i]['delay']= $row[7];
        $Tickets[$i]['picture']= 'img/user.png';
        $Tickets[$i]['requester_active'] = $row[9];
        $Tickets[$i]['url'] = $glpi_server_url . "/front/ticket.form.php?id=" . $Tickets[$i]['id'];
        $i++;
}

$smarty->assign(
    "tickets",
    $Tickets
  );

$smarty->display('Dashboard_Tickets.tpl');