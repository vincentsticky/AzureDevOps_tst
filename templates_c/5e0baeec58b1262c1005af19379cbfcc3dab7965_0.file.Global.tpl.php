<?php
/* Smarty version 3.1.33, created on 2021-08-05 12:08:49
  from 'L:\Projects\supervision.v2\templates\Global.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_610bb8b1102176_47043297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e0baeec58b1262c1005af19379cbfcc3dab7965' => 
    array (
      0 => 'L:\\Projects\\supervision.v2\\templates\\Global.tpl',
      1 => 1586850856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610bb8b1102176_47043297 (Smarty_Internal_Template $_smarty_tpl) {
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
    <div class="d-flex justify-content-center">
      <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>
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
                   
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Select a country</a>
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
                <div class="col-md-6">
                  <h4 class="text-light text-uppercase mb-0">Global Network Dashboard</h4>
                </div>
                <div class="col-md-6">
                  <h4 class="text-light text-italic text-right"><span class="pull-right"><i class="fas fa-info-circle mr-4"></i>Refreshed @ <?php echo $_smarty_tpl->tpl_vars['UpdateDate']->value;?>
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
                        <h2><span class="badge badge-light"><?php echo $_smarty_tpl->tpl_vars['WorldNew']->value;?>
</span></h2>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-secondary text-center">
                    <i class="fas fa-info-circle mr-3"></i>
                    <span> <span class="badge badge-pill badge-warning"><?php echo $_smarty_tpl->tpl_vars['WorldNewIncidents']->value;?>
</span> -  <span class="badge badge-pill badge-primary"><?php echo $_smarty_tpl->tpl_vars['WorldNewRequests']->value;?>
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
                        <h2><span class="badge badge-light"><?php echo $_smarty_tpl->tpl_vars['WorldProcessing']->value;?>
</span></h2>
                      
                      </div>
                    </div>
                  </div>
                
                  <div class="card-footer text-secondary text-center">
                    <i class="fas fa-info-circle mr-3"></i>
                    <span> <span class="badge badge-pill badge-warning"><?php echo $_smarty_tpl->tpl_vars['WorldProcessingIncidents']->value;?>
</span> -  <span class="badge badge-pill badge-primary"><?php echo $_smarty_tpl->tpl_vars['WorldProcessingRequests']->value;?>
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
                        <h2><span class="badge badge-light"><?php echo $_smarty_tpl->tpl_vars['WorldPending']->value;?>
</span></h2>
                        
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-secondary text-center">
                    <i class="fas fa-info-circle mr-3"></i>
                    <span> <span class="badge badge-pill badge-warning"><?php echo $_smarty_tpl->tpl_vars['WorldPendingIncidents']->value;?>
</span> -  <span class="badge badge-pill badge-primary"><?php echo $_smarty_tpl->tpl_vars['WorldPendingRequests']->value;?>
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
                        <h5>Solved/Closed Tickets</h5>
                        <h2><span class="badge badge-light"><?php echo $_smarty_tpl->tpl_vars['WorldClosedThisYear']->value;?>
</span></h2>
                        
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-secondary text-center">
                    <i class="fas fa-info-circle mr-3"></i>
                    <span> <span class="badge badge-pill badge-warning"><?php echo $_smarty_tpl->tpl_vars['WorldClosedThisYearIncidents']->value;?>
</span> -  <span class="badge badge-pill badge-primary"><?php echo $_smarty_tpl->tpl_vars['WorldClosedThisYearRequests']->value;?>
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
                <!-- <h2 class="text-muted text-center mb-3">New Tickets</h2>-->
                <table class="table table-striped bg-light text-center">
                  <thead>
                    <tr class="text-muted">                     
                      <th>Region</th>
                      <th>New</th>
                      <th>Processing</th>
                      <th>Pending</th>
                      <th>Solved / Closed</th>
                    </H2>
                    </tr>
                  </thead>
                  <tbody>
                    
                    <tr>
                      
                      <td style="vertical-align:middle"><H4>America / US</H4></td>
                      <td><h3><span class="badge badge badge-pill badge-info"><?php echo $_smarty_tpl->tpl_vars['USNew']->value;?>
</span></h3></td>
                      <td><h3><span class="badge badge badge-pill badge-info"><?php echo $_smarty_tpl->tpl_vars['USProcessing']->value;?>
</span></h3></td>
                      <td><h3><span class="badge badge badge-pill badge-info"><?php echo $_smarty_tpl->tpl_vars['USPending']->value;?>
</span></h3></td>
                      <td><h3><span class="badge badge badge-pill badge-info"><?php echo $_smarty_tpl->tpl_vars['USClosedThisYear']->value;?>
</span></h3></td>
                    </tr>
                    <tr>
                      <td style="vertical-align:middle"><H4>Europe / FR</H4></td>
                      <td><h3><span class="badge badge badge-pill badge-info"><?php echo $_smarty_tpl->tpl_vars['FranceNew']->value;?>
</span></h3></td>
                      <td><h3><span class="badge badge badge-pill badge-info"><?php echo $_smarty_tpl->tpl_vars['FranceProcessing']->value;?>
</span></h3></td>
                      <td><h3><span class="badge badge badge-pill badge-info"><?php echo $_smarty_tpl->tpl_vars['FrancePending']->value;?>
</span></h3></td>
                      <td><h3><span class="badge badge badge-pill badge-info"><?php echo $_smarty_tpl->tpl_vars['FranceClosedThisYear']->value;?>
</span></h3></td>
                      
                    </tr>
                    <tr>
                      <td style="vertical-align:middle"><H4>Europe / DE</H4></td>
                      <td><h3><span class="badge badge badge-pill badge-info"><?php echo $_smarty_tpl->tpl_vars['GermanyNew']->value;?>
</span></h3></td>
                      <td><h3><span class="badge badge badge-pill badge-info"><?php echo $_smarty_tpl->tpl_vars['GermanyProcessing']->value;?>
</span></h3></td>
                      <td><h3><span class="badge badge badge-pill badge-info"><?php echo $_smarty_tpl->tpl_vars['GermanyPending']->value;?>
</span></h3></td>
                      <td><h3><span class="badge badge badge-pill badge-info"><?php echo $_smarty_tpl->tpl_vars['GermanyClosedThisYear']->value;?>
</span></h3></td>
                    </tr>
                    <tr>
                      <td style="vertical-align:middle"><H4>Asia / Shanghaï</H4></td>
                      <td><h3><span class="badge badge badge-pill badge-info"><?php echo $_smarty_tpl->tpl_vars['ShanghaiNew']->value;?>
</span></h3></td>
                      <td><h3><span class="badge badge badge-pill badge-info"><?php echo $_smarty_tpl->tpl_vars['ShanghaiProcessing']->value;?>
</span></h3></td>
                      <td><h3><span class="badge badge badge-pill badge-info"><?php echo $_smarty_tpl->tpl_vars['ShanghaiPending']->value;?>
</span></h3></td>
                      <td><h3><span class="badge badge badge-pill badge-info"><?php echo $_smarty_tpl->tpl_vars['ShanghaiClosedThisYear']->value;?>
</span></h3></td>
                    </tr>
                    <tr>
                      <td style="vertical-align:middle"><H4>Local IT</H4></td>
                      <td><h3><span class="badge badge badge-pill badge-info"><?php echo $_smarty_tpl->tpl_vars['LocalITNew']->value;?>
</span></h3></td>
                      <td><h3><span class="badge badge badge-pill badge-info"><?php echo $_smarty_tpl->tpl_vars['LocalITProcessing']->value;?>
</span></h3></td>
                      <td><h3><span class="badge badge badge-pill badge-info"><?php echo $_smarty_tpl->tpl_vars['LocalITPending']->value;?>
</span></h3></td>
                      <td><h3><span class="badge badge badge-pill badge-info"><?php echo $_smarty_tpl->tpl_vars['LocalITClosedThisYear']->value;?>
</span></h3></td>
                    </tr>
                    
                    
                  </tbody>
                </table>
    </td> 

    </section>

    <!-- cards -->
    <section>
    
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
            <div class="row pt-md-5 mt-md-3 mb-5">
              <div class="col-xl-4 col-sm-6 p-2">
                <div class="card card-common">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <i class="fas fa-chalkboard-teacher fa-3x text-danger"></i>
                      <div class="text-right text-secondary">
                        <h5><?php echo $_smarty_tpl->tpl_vars['TitleProcessToDo']->value;?>
</h5>
                        <h3><?php echo $_smarty_tpl->tpl_vars['ProcessesToDo']->value;?>
</h3>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-secondary">
                    <i class="fas fa-info-circle mr-3"></i>
                    <span><?php echo $_smarty_tpl->tpl_vars['UpdateDate']->value;?>
</span>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6 p-2">
                <div class="card card-common">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <i class="fas fa-user-check fa-3x text-success"></i>
                      <div class="text-right text-secondary">
                        <h5><?php echo $_smarty_tpl->tpl_vars['TitleProcessCompleted']->value;?>
</h5>
                        <h3><?php echo $_smarty_tpl->tpl_vars['ProcessesCompleted']->value;?>
</h3>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-secondary">
                    <i class="fas fa-info-circle mr-3"></i>
                    <span><?php echo $_smarty_tpl->tpl_vars['UpdateDate']->value;?>
</span>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6 p-2">
                <div class="card card-common">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <i class="fas fa-user-cog fa-3x text-danger"></i>
                      <div class="text-right text-secondary">
                        <h5><?php echo $_smarty_tpl->tpl_vars['TitleProcessOpened']->value;?>
</h5>
                        <h3>0</h3>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-secondary">
                    <i class="fas fa-info-circle mr-3"></i>
                    <span><?php echo $_smarty_tpl->tpl_vars['UpdateDate']->value;?>
</span>
                  </div>
                </div>
              </div>
             
            </div>
          </div>
        </div>
      
</section>
    
   

  </body>
</html>






<?php }
}
