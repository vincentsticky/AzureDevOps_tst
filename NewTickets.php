<?php

require './libs/Smarty.class.php';
include ('db_connection.php');

$Root = $_GET['entity'];
$Entity = urldecode($Root);

$FlagName= $_GET['flag'];

$smarty = new Smarty;
$smarty->caching = false;
$smarty->cache_lifetime = 120;

$smarty->assign("Company", $Entity);
$smarty->assign("PageTitle", "New Tickets");
$smarty->assign('CopyrightInfo', $CopyrightInfo);

$smarty->assign("glpi_server_url", $glpi_server_url);

$smarty->assign("Flag", $FlagName);
$smarty->assign("TitleTickets", "Tickets");
$smarty->assign("TitleNewTickets", "New");
$smarty->assign("TitleProcessingTickets", "Processing");
$smarty->assign("TitleClosedTickets", "Closed/Opened (" . date("Y").")");


$smarty->assign("UpdateDate",date("H:i:s (e)"));


// Calculates New Tickets
$query="Select Count(raynet_glpi_tickets.id) As NumberOfTickets From   raynet_glpi_tickets  Join  glpi_entities On raynet_glpi_tickets.entities_id = glpi_entities.id where glpi_entities.completename Like '%". $Entity ."%' AND raynet_glpi_tickets.status = 1";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("ValueNewTickets",$res[0]);

// Calculates New Incidents
$query="Select Count(raynet_glpi_tickets.id) As NumberOfTickets From   raynet_glpi_tickets  Join  glpi_entities On raynet_glpi_tickets.entities_id = glpi_entities.id where glpi_entities.completename Like '%". $Entity ."%' AND raynet_glpi_tickets.status = 1 and raynet_glpi_tickets.type=1";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("NewIncidents",$res[0]);

// Calculates New Requests
$query="Select Count(raynet_glpi_tickets.id) As NumberOfTickets From   raynet_glpi_tickets  Join  glpi_entities On raynet_glpi_tickets.entities_id = glpi_entities.id where glpi_entities.completename Like '%". $Entity ."%' AND raynet_glpi_tickets.status = 1 and raynet_glpi_tickets.type=2";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("NewRequests",$res[0]);


// Calculates Processing Tickets
$query="Select Count(raynet_glpi_tickets.id) As NumberOfTickets From   raynet_glpi_tickets  Join  glpi_entities On raynet_glpi_tickets.entities_id = glpi_entities.id where glpi_entities.completename Like '%". $Entity ."%' AND raynet_glpi_tickets.status IN (2,3)";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("ValueProcessingTickets",$res[0]);

// Calculates Processing Incident Tickets
$query="Select Count(raynet_glpi_tickets.id) As NumberOfTickets From   raynet_glpi_tickets  Join  glpi_entities On raynet_glpi_tickets.entities_id = glpi_entities.id where glpi_entities.completename Like '%". $Entity ."%' AND raynet_glpi_tickets.status IN (2,3) and raynet_glpi_tickets.type=1";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("ProcessingIncidents",$res[0]);

// Calculates Processing Request Tickets
$query="Select Count(raynet_glpi_tickets.id) As NumberOfTickets From   raynet_glpi_tickets  Join  glpi_entities On raynet_glpi_tickets.entities_id = glpi_entities.id where glpi_entities.completename Like '%". $Entity ."%' AND raynet_glpi_tickets.status IN (2,3)  and raynet_glpi_tickets.type=2";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("ProcessingRequests",$res[0]);

// Calculates Pending Tickets
$query="Select Count(raynet_glpi_tickets.id) As NumberOfTickets From   raynet_glpi_tickets  Join  glpi_entities On raynet_glpi_tickets.entities_id = glpi_entities.id where glpi_entities.completename Like '%". $Entity ."%' AND raynet_glpi_tickets.status = 4";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("ValuePendingTickets",$res[0]);

// Calculates Pending Incidents
$query="Select Count(raynet_glpi_tickets.id) As NumberOfTickets From   raynet_glpi_tickets  Join  glpi_entities On raynet_glpi_tickets.entities_id = glpi_entities.id where glpi_entities.completename Like '%". $Entity ."%' AND raynet_glpi_tickets.status = 4  and raynet_glpi_tickets.type=1";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("PendingIncidents",$res[0]);

// Calculates Pending Requests
$query="Select Count(raynet_glpi_tickets.id) As NumberOfTickets From   raynet_glpi_tickets  Join  glpi_entities On raynet_glpi_tickets.entities_id = glpi_entities.id where glpi_entities.completename Like '%". $Entity ."%' AND raynet_glpi_tickets.status = 4 and raynet_glpi_tickets.type=2";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("PendingRequests",$res[0]);


// Calculates Solved Tickets
$query="Select Count(raynet_glpi_tickets.id) As NumberOfTickets From   raynet_glpi_tickets  Join  glpi_entities On raynet_glpi_tickets.entities_id = glpi_entities.id where glpi_entities.completename Like '%". $Entity ."%' AND raynet_glpi_tickets.status = 5 and raynet_glpi_tickets.date like '".date('Y')."%'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("ValueSolvedTickets",$res[0]);

// Calculates Closed Tickets
$query="Select Count(raynet_glpi_tickets.id) As NumberOfTickets From   raynet_glpi_tickets  Join  glpi_entities On raynet_glpi_tickets.entities_id = glpi_entities.id where glpi_entities.completename Like '%". $Entity ."%' AND raynet_glpi_tickets.status in (6,5) and raynet_glpi_tickets.date like '".date('Y')."%'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("ValueClosedTickets",$res[0]);

// Calculates Closed Incidents
$query="Select Count(raynet_glpi_tickets.id) As NumberOfTickets From   raynet_glpi_tickets  Join  glpi_entities On raynet_glpi_tickets.entities_id = glpi_entities.id where glpi_entities.completename Like '%". $Entity ."%' AND raynet_glpi_tickets.status in (6,5) and raynet_glpi_tickets.date like '".date('Y')."%' and raynet_glpi_tickets.type=1";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("ClosedIncidents",$res[0]);

// Calculates Closed Requests
$query="Select Count(raynet_glpi_tickets.id) As NumberOfTickets From   raynet_glpi_tickets  Join  glpi_entities On raynet_glpi_tickets.entities_id = glpi_entities.id where glpi_entities.completename Like '%". $Entity ."%' AND raynet_glpi_tickets.status in (6,5) and raynet_glpi_tickets.date like '".date('Y')."%' and raynet_glpi_tickets.type=2";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("ClosedRequests",$res[0]);

// calculates opened tickets in the year
$query="Select Count(raynet_glpi_tickets.id) As NumberOfTickets From   raynet_glpi_tickets Left Join  glpi_entities On raynet_glpi_tickets.entities_id = glpi_entities.id where glpi_entities.completename Like '%". $Entity ."%'    and raynet_glpi_tickets.date like '".date('Y')."%'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$smarty->assign("ValueOpenedTickets",$res[0]);

// list New Tickets
$query="Select
  raynet_glpi_tickets.id As id,
  raynet_glpi_tickets.name As name,
  DATE_FORMAT(raynet_glpi_tickets.date, '%m/%d/%Y'),
  raynet_glpi_tickets.priority,
  CONCAT(glpi_users.realname, ', ', glpi_users.firstname) As Requester,
  glpi_users.registration_number,
  raynet_glpi_tickets.type,
  DATEDIFF(raynet_glpi_tickets.date, CURDATE())
  
From
  raynet_glpi_tickets Left Join
  glpi_entities On raynet_glpi_tickets.entities_id = glpi_entities.id Inner Join
  glpi_tickets_users On glpi_tickets_users.tickets_id = raynet_glpi_tickets.id
  Inner Join
  glpi_users On glpi_tickets_users.users_id = glpi_users.id
Where
  raynet_glpi_tickets.status = 1 And
  glpi_entities.completename Like '%". $Entity ."%' And
  glpi_tickets_users.type = 1";

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
                
        $Tickets[$i]['url'] = $glpi_server_url . "/front/ticket.form.php?id=" . $Tickets[$i]['id'];

        $i++;
}

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
    "tickets",
    $Tickets
);

$smarty->assign(
    "supportgroups",
    $SupportGroups
);



$smarty->display('Raynet_Tickets.tpl');
