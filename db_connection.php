<?php
$user_db='UserRO';
$pw_db='UserRO01';
$db='glpi';
$db_url='servicedesk-slv.ar.ray.group';
$db_port='3306';
$app_debug=false;

$link = mysqli_connect($db_url.':'.$db_port, $user_db, $pw_db, $db);


if (!$link) {
    echo "Error : Impossible to connect to the MySQL database." . PHP_EOL;
    echo "Debug : " . mysqli_connect_error() . PHP_EOL;
    exit;
}

mysqli_query($link, "SET NAMES 'utf8_unicode_ci'");

// gets glpi server adress
$query="SELECT glpi_configs.value FROM glpi_configs WHERE glpi_configs.name='url_base'";
$data = mysqli_query($link, $query);
$res= mysqli_fetch_array($data);
$glpi_server_url = $res[0];

if ($app_debug)
{
  $CopyrightInfo = "Copyright &copy; ARaymond Network 2021 - Supervision 2.0.2 (GLPI 9.5.x) - MySQL : [" . $db_url .":" . $db_port . "]";
}
else
{
  $CopyrightInfo = "Copyright &copy; ARaymond Network 2021 - Supervision 2.0.2 (GLPI 9.5.x)";
}


?>