<?php
/* Smarty version 3.1.33, created on 2021-08-09 10:32:37
  from 'L:\Projects\supervision.v2\templates\Raynet_Tickets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6110e825818191_11992566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0d6eef4424f189113344066ef8e285f59ceb245' => 
    array (
      0 => 'L:\\Projects\\supervision.v2\\templates\\Raynet_Tickets.tpl',
      1 => 1628497878,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6110e825818191_11992566 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<meta http-equiv="Refresh" content="60"> 
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="title icon" href="images/title-img.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <?php echo '<script'; ?>
 defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>GLPI Dashboard</title>
  </head>
  <body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-light">
      <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#myNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="myNavbar">
        <div class="container-fluid">
          <div class="row">
            <!-- sidebar -->
            <div class="col-xl-2 col-lg-3 col-md-4 sidebar fixed-top">
              <a href="#" class="navbar-brand text-white d-block mx-auto text-center py-3 mb-4 bottom-border"><img src="img/ARaymond.png" width="90%"></a>
              <div class="bottom-border pb-3">
                <img src="img/title-img.png" width="50" class="rounded-circle mr-3"><a href="./index.php">ARaymond Network</a>
              </div>
              <ul class="navbar-nav flex-column mt-4">

                
                <li class="nav-item"><a href="./NewTickets.php?entity=Raynet%20Inc&flag=usa" class="nav-link text-black p-2 mb-2 sidebar-link"><i class="fas fa-chart-line text-dark fa-lg mr-3"></i>America / US</a></li>
                <li class="nav-item"><a href="./NewTickets.php?entity=Raynet%20SAS&flag=france" class="nav-link text-black p-2 mb-2 sidebar-link"><i class="fas fa-chart-line text-dark fa-lg mr-3"></i>Europe / FR</a></li>
                <li class="nav-item"><a href="./NewTickets.php?entity=Raynet%20GmbH&flag=germany" class="nav-link text-black p-2 mb-2 sidebar-link"><i class="fas fa-chart-line text-dark fa-lg mr-3"></i>Europe / DE</a></li>
                <li class="nav-item"><a href="./NewTickets.php?entity=Raynet%20Asia&flag=china" class="nav-link text-black p-2 mb-2 sidebar-link"><i class="fas fa-chart-line text-dark fa-lg mr-3"></i>Asia / Shanghai</a></li>
                
              <div class="bottom-border pb-3">
                <img src="img/title-img.png" width="50" class="rounded-circle mr-3"><a href="./NewTickets.php?entity=Local%20IT&flag=globe">Local IT</a>
              </div>
                 <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Select a Country</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="./NewTickets.php?entity=Brazil&flag=brazil">Brazil</a>
                  <a class="dropdown-item" href="./NewTickets.php?entity=China&flag=china">China</a>
                  <a class="dropdown-item" href="./NewTickets.php?entity=Cz%20Republic&flag=cz">Czech Republic</a>
                  <a class="dropdown-item" href="./NewTickets.php?entity=India&flag=india">India</a>
                  <a class="dropdown-item" href="./NewTickets.php?entity=Italy&flag=italy">Italy</a>
                  <a class="dropdown-item" href="./NewTickets.php?entity=Japan&flag=japan">Japan</a>
                  <a class="dropdown-item" href="./NewTickets.php?entity=Russia&flag=russia">Russia</a>
                  <a class="dropdown-item" href="./NewTickets.php?entity=Spain&flag=spain">Spain</a>
                  <a class="dropdown-item" href="./NewTickets.php?entity=Turkey&flag=turkey">Turkey</a>
                  
                </div>
                </li>

                <div class="bottom-border pb-3">
                   <img src="img/title-img.png" width="50" class="rounded-circle mr-3">Support Groups
                </div>
                 <ul class="navbar-nav flex-column mt-4" style="height: 300px;overflow: auto;">
                
                    <div class="bottom-border pb-3">
                
                      
                      <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Select a Support Group</a>
                        <div class="dropdown-menu">
                          <?php
$__section_supgroups_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['supportgroups']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_supgroups_0_total = $__section_supgroups_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_supgroups'] = new Smarty_Variable(array());
if ($__section_supgroups_0_total !== 0) {
for ($__section_supgroups_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_supgroups']->value['index'] = 0; $__section_supgroups_0_iteration <= $__section_supgroups_0_total; $__section_supgroups_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_supgroups']->value['index']++){
?>                       
                            <a href="ProcessingTicketsFiltered.php?entity=global&flag=globe&SupportGroup=<?php echo $_smarty_tpl->tpl_vars['supportgroups']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_supgroups']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_supgroups']->value['index'] : null)]['groupname'];?>
" class="dropdown-item"><?php echo $_smarty_tpl->tpl_vars['supportgroups']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_supgroups']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_supgroups']->value['index'] : null)]['groupname'];?>
</a>
                            <?php
}
}
?>  
                        </div>
                      </li>
                          
                      
                              
                    </div>
                    
                    
              </ul>
            </div>
            
            <!-- end of sidebar -->

            <!-- top-nav -->
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto bg-dark fixed-top py-2 top-navbar">
              <div class="row align-items-center">
                <div class="col-md-3">
                  <h4 class="text-light text-uppercase mb-0"><img src='./pics/<?php echo $_smarty_tpl->tpl_vars['Flag']->value;?>
.png' height='40px'> <?php echo $_smarty_tpl->tpl_vars['Company']->value;?>
</h4>
                </div>
                <div class="col-md-5">
                  <h4 class="text-light mb-0 text-center"><?php echo $_smarty_tpl->tpl_vars['PageTitle']->value;?>
</h4>
                </div>
                
                <div class="col-md-4">
                  <h4 class="text-light text-italic text-right"><span class="pull-right"><i class="fas fa-sync mr-4"></i><?php echo $_smarty_tpl->tpl_vars['UpdateDate']->value;?>
</span></h4>
                </div>
              </div>
            </div>
            <!-- end of top-nav -->
          </div>
        </div>
      </div>
    </nav>
    <!-- end of navbar -->
     
    
    <!-- cards -->
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
            <div class="row pt-md-5 mt-md-3 mb-5">
              <div class="col-xl-3 col-sm-6 p-2">
                <div class="card card-common">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <i class="fas fa-inbox fa-3x text-warning"></i>
                      <div class="text-right text-secondary">
                        <h5>New Tickets</h5>
                        <h3><a href="./NewTickets.php?entity=<?php echo $_smarty_tpl->tpl_vars['Company']->value;?>
&flag=<?php echo $_smarty_tpl->tpl_vars['Flag']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['ValueNewTickets']->value;?>
</a></h3>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-secondary text-center">
                    <i class="fas fa-sync mr-4"></i>
                    <span> <span class="badge badge-pill badge-warning"><?php echo $_smarty_tpl->tpl_vars['NewIncidents']->value;?>
</span> -  <span class="badge badge-pill badge-primary"><?php echo $_smarty_tpl->tpl_vars['NewRequests']->value;?>
</span></span>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 p-2">
                <div class="card card-common">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <i class="fas fa-chalkboard-teacher fa-3x text-danger"></i>
                      <div class="text-right text-secondary">
                        <h5>Processing Tickets</h5>
                        <h3><a href="./ProcessingTickets.php?entity=<?php echo $_smarty_tpl->tpl_vars['Company']->value;?>
&flag=<?php echo $_smarty_tpl->tpl_vars['Flag']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['ValueProcessingTickets']->value;?>
</h3></a>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-secondary text-center">
                    <i class="fas fa-sync mr-4"></i>
                    <span> <span class="badge badge-pill badge-warning"><?php echo $_smarty_tpl->tpl_vars['ProcessingIncidents']->value;?>
</span> -  <span class="badge badge-pill badge-primary"><?php echo $_smarty_tpl->tpl_vars['ProcessingRequests']->value;?>
</span></span>
                    
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 p-2">
                <div class="card card-common">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <i class="fas fa-user-clock fa-3x text-info"></i>
                      <div class="text-right text-secondary">
                        <h5>Pending Tickets</h5>
                        <h3><a href="./PendingTickets.php?entity=<?php echo $_smarty_tpl->tpl_vars['Company']->value;?>
&flag=<?php echo $_smarty_tpl->tpl_vars['Flag']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['ValuePendingTickets']->value;?>
</a></h3>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-secondary text-center">
                    <i class="fas fa-sync mr-4"></i>
                    <span> <span class="badge badge-pill badge-warning"><?php echo $_smarty_tpl->tpl_vars['PendingIncidents']->value;?>
</span> -  <span class="badge badge-pill badge-primary"><?php echo $_smarty_tpl->tpl_vars['PendingRequests']->value;?>
</span></span>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 p-2">
                <div class="card card-common">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <i class="fas fa-user-check fa-3x text-success"></i>
                      <div class="text-right text-secondary">
                        <h5><?php echo $_smarty_tpl->tpl_vars['TitleClosedTickets']->value;?>
</h5>
                        <h3><?php echo $_smarty_tpl->tpl_vars['ValueClosedTickets']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['ValueOpenedTickets']->value;?>
</h3>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-secondary text-center">
                    <i class="fas fa-sync mr-4"></i>
                    <span> <span class="badge badge-pill badge-warning"><?php echo $_smarty_tpl->tpl_vars['ClosedIncidents']->value;?>
</span> -  <span class="badge badge-pill badge-primary"><?php echo $_smarty_tpl->tpl_vars['ClosedRequests']->value;?>
</span></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
   
      </div>
     
      
</section>


<!-- tables -->
    <section>
      
      <div class="container-fluid">
        <div class="row mb-12">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
            <div class="row align-items-center">
              <div class="col-xl-12 col-12 mb-4 mb-xl-0">
                <table class="table table-striped bg-light text-center">
                  <thead>
                    <tr class="text-muted"> 
                      <th>Type</th>
                      <th>Ticket</th>
                      <th>Ticket Title</th>
                      <th>Date</th>
                      <th>Priority</th>
                      <th>Requester</th>
                      <th>Company</th>
                    </H2>
                    </tr>
                  </thead>
                  <tbody>        
            
                    <?php
$__section_sec1_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['tickets']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sec1_1_total = $__section_sec1_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = new Smarty_Variable(array());
if ($__section_sec1_1_total !== 0) {
for ($__section_sec1_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] = 0; $__section_sec1_1_iteration <= $__section_sec1_1_total; $__section_sec1_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']++){
?>
                        <tr>
                          <?php ob_start();
echo $_smarty_tpl->tpl_vars['tickets']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['type'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 2) {?>
                            <td align="center"><span class="badge badge-pill badge-primary">REQUEST</span></td>
                          <?php } else { ?> 
                            <td align="center"><span class="badge badge-pill badge-warning">INCIDENT</span></td>
                          <?php }?>
                            <!-- <td><a href="https://servicedesk.ar.ray.group/front/ticket.form.php?id=<?php echo $_smarty_tpl->tpl_vars['tickets']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id'];?>
" class="btn btn-primary btn-lg disabled" role="button" aria-disabled="true"><?php echo $_smarty_tpl->tpl_vars['tickets']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id'];?>
</a></td> -->
                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['tickets']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['tickets']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id'];?>
</a></td>
                            <td align="left"><?php echo $_smarty_tpl->tpl_vars['tickets']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['name'];?>
</td>
                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['tickets']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['delay'];
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 > -8) {?>
                            <td><span class="badge badge-success h-12"><?php echo $_smarty_tpl->tpl_vars['tickets']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['date'];?>
</span></td>
                            <?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['tickets']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['delay'];
$_prefixVariable3 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['tickets']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['delay'];
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable3 > -30 && $_prefixVariable4 < -7) {?>
                            <td><span class="badge badge-warning h-12"><?php echo $_smarty_tpl->tpl_vars['tickets']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['date'];?>
</span></td>
                            <?php } else { ?>
                            <td><span class="badge badge-danger h-12"><?php echo $_smarty_tpl->tpl_vars['tickets']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['date'];?>
</span></td>
                            <?php }}?>
                            
                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['tickets']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['priority'];
$_prefixVariable5 = ob_get_clean();
if ($_prefixVariable5 == 'MAJOR') {?>
                              <td><span class="badge badge-dark"><?php echo $_smarty_tpl->tpl_vars['tickets']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['priority'];?>
</span></td>  
                            <?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['tickets']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['priority'];
$_prefixVariable6 = ob_get_clean();
if ($_prefixVariable6 == 'VERY HIGH') {?>
                              <td><span class="badge badge-danger"><?php echo $_smarty_tpl->tpl_vars['tickets']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['priority'];?>
</span></td>  
                            <?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['tickets']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['priority'];
$_prefixVariable7 = ob_get_clean();
if ($_prefixVariable7 == 'HIGH') {?>
                              <td><span class="badge badge-warning"><?php echo $_smarty_tpl->tpl_vars['tickets']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['priority'];?>
</span></td>  
                            <?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['tickets']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['priority'];
$_prefixVariable8 = ob_get_clean();
if ($_prefixVariable8 == 'MEDIUM') {?>
                              <td><span class="badge badge-success"><?php echo $_smarty_tpl->tpl_vars['tickets']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['priority'];?>
</span></td>  
                            <?php } else { ?>
                              <td><span class="badge badge-info"><?php echo $_smarty_tpl->tpl_vars['tickets']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['priority'];?>
</span></td>  
                            <?php }}}}?>
                            
                            <td align="left"><?php echo $_smarty_tpl->tpl_vars['tickets']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['requester'];?>
</td>
                            <td align="left"><span class="badge badge-pill badge-info"><?php echo $_smarty_tpl->tpl_vars['tickets']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['company'];?>
</span></td>
                            
                        </tr>
                    <?php
}
}
?>            
                        
                  </tbody>

                </table>

    </td> 

    </section>

    <!-- end of cards -->
   
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH<+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="script.js"><?php echo '</script'; ?>
>
  </body>
</html>


<meta http-equiv="Refresh" content="60"> 

<?php }
}
