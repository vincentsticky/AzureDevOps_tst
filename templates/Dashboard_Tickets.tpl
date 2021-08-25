<!DOCTYPE html>
<html lang="en">


<head>

 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="ARaymond Dashboard">
  <meta name="author" content="Legros, Vincent">
  <meta http-equiv="refresh" content="300" >
  
  <title>ARaymond Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/dashboard.css" rel="stylesheet">
  
  <script src="js/processing_pie.js"></script>
</head>

<body id="page-top">
  
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
        <div class="sidebar-brand-icon">
          <img src="img/araymond.png" width="100%">  
        </div>
        
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Raynet Locations
      </div>

       <!-- Nav Item - Tables -->
       <li class="nav-item">
        <a class="nav-link" href="dashboard_newtickets.php?flag=USA&entity=Raynet%20%Inc">
          <i class="fas fa-fw fa-table"></i>
          <span>Americas 
          {if {$AmericasNewTickets gt 0}}
            <span class="badge badge badge-pill badge-danger align-top">{$AmericasNewTickets}</span>
          {/if}
        </span></a>
          
      </li>
       
       <li class="nav-item">
        <a class="nav-link" href="dashboard_newtickets.php?flag=France&entity=Raynet%20%SAS">
          <i class="fas fa-fw fa-table"></i>
          <span>Europe / France 
            {if {$EuropeFNewTickets gt 0}}
              <span class="badge badge badge-pill badge-danger align-top">{$EuropeFNewTickets}</span>
            {/if}
          </span></a>
      </li>
       
      <li class="nav-item">
        <a class="nav-link" href="dashboard_newtickets.php?flag=Germany&entity=Raynet%20%GmbH">
          <i class="fas fa-fw fa-table"></i>
          <span>Europe / Germany 
            {if {$EuropeGNewTickets gt 0}}
              <span class="badge badge badge-pill badge-danger align-top">{$EuropeGNewTickets}</span>
            {/if}
          </span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="dashboard_newtickets.php?flag=China&entity=Raynet%20%Asia">
          <i class="fas fa-fw fa-table"></i>
          <span>China / Shanghai 
            {if {$ChinaSNewTickets gt 0}}
              <span class="badge badge badge-pill badge-danger align-top">{$ChinaSNewTickets}</span>
            {/if}
          </span></a>
      </li>
      
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        ARaymond Local IT
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Select the location
            {if {$LocalITNewTickets gt 0}}
              <span class="badge badge badge-pill badge-danger align-top">{$LocalITNewTickets}</span>
            {/if}
          </span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="dashboard_newtickets.php?flag=Brazil&entity=Brazil"><img src="pics/Brazil.png" width="15px"> Brazil</a>
            <a class="collapse-item" href="dashboard_newtickets.php?flag=China&entity=China"><img src="pics/China.png" width="15px"> China</a>
            <a class="collapse-item" href="dashboard_newtickets.php?flag=Cz&entity=Cz%20%Republic"><img src="pics/Cz.png" width="15px"> Cz Republic</a>
            <a class="collapse-item" href="dashboard_newtickets.php?flag=India&entity=India"><img src="pics/India.png" width="15px"> India</a>
            <a class="collapse-item" href="dashboard_newtickets.php?flag=Italy&entity=Italy"><img src="pics/Italy.png" width="15px"> Italy</a>
            <a class="collapse-item" href="dashboard_newtickets.php?flag=Japan&entity=Japan"><img src="pics/Japan.png" width="15px"> Japan</a>
            <a class="collapse-item" href="dashboard_newtickets.php?flag=Russia&entity=Russia"><img src="pics/Russia.png" width="15px"> Russia</a>
            <a class="collapse-item" href="dashboard_newtickets.php?flag=Spain&entity=Spain"><img src="pics/Spain.png" width="15px"> Spain</a>
            <a class="collapse-item" href="dashboard_newtickets.php?flag=Turkey&entity=Turkey"><img src="pics/Turkey.png" width="15px"> Turkey</a>
            
            
          </div>
        </div>
      </li>

      <hr class="sidebar-divider">
      
        <!-- Heading -->
        <div class="sidebar-heading">
            Legend
        </div>
      
        <div class="sidebar text-center text-white-50">
                <br>
                <span class="badge badge badge-pill badge-warning">xx</span> : # of Incidents<br>
                <span class="badge badge badge-pill badge-primary">yy</span> : # of Requests</h6>
    
        </div>
        

        <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
    
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <h1 class="h3 mb-0 text-gray-800 animated bounce"><img src="pics/{$flag}.png" width="40px">
            
             {$TitleTickets}</h1>
             
          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

          
           
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">GLPI Supervisor</span>
                <img class="img-profile rounded-circle" src="img/glpi.png">
              </a>
              
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Content Row -->
          <div class="row">

            <!-- Entity New Tickets -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <a href="./dashboard_newtickets.php?flag={$flag}&entity={$entity}">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">New Tickets</div>
                      </a>
                      <div class="h4 mb-0 font-weight-bold text-gray-800">{$EntityNew}
                      <h6><span class="badge badge badge-pill badge-warning">{$EntityNewIncidents}</span><span class="badge badge badge-pill badge-primary">{$EntityNewRequests}</span></h6>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-plus-circle text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Entity processing tickets -->
            
              <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <a href="./dashboard_processingtickets.php?flag={$flag}&entity={$entity}">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Processing Tickets</div>
                      </a>
                      <div class="h4 mb-0 font-weight-bold text-gray-800">{$EntityProcessing}
                        <h6><span class="badge badge badge-pill badge-warning">{$EntityProcessingIncidents}</span><span class="badge badge badge-pill badge-primary">{$EntityProcessingRequests}</span></h6>
                      </div>
                  
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-play text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Pending Tickets Card -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <a href="./dashboard_pendingtickets.php?flag={$flag}&entity={$entity}">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Tickets</div>
                      </a>
                      <div class="h4 mb-0 font-weight-bold text-gray-800">{$EntityPending}
                        <h6><span class="badge badge badge-pill badge-warning">{$EntityPendingIncidents}</span><span class="badge badge badge-pill badge-primary">{$EntityPendingRequests}</span></h6>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-pause text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Closed Tickets Card -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <a href="./dashboard_closedtickets.php?flag={$flag}&entity={$entity}">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Closed Tickets (this Year)</div>
                    </a>
                      <div class="h4 mb-0 font-weight-bold text-gray-800">{$EntityClosedThisYear}
                        <h6><span class="badge badge badge-pill badge-warning">{$EntityClosedThisYearIncidents}</span><span class="badge badge badge-pill badge-primary">{$EntityClosedThisYearRequests}</span></h6>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-lock text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            

            
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-2">
              <div class="card shadow mb-4">
                
                <!-- Card Body -->
                <div class="card-header">
                    Detail of {$AmountTickets} {$SubTitleTickets} @ {$UpdateDate}
                </div>
                <div class="card-body">
                  <div class="container-fluid">
                    <div class="table-responsive">
                        {foreach from=$tickets item=ticket}
                        <a class="dropdown-item d-flex align-items-center" href="{$ticket['url']}" target="_blank">
                          <div class="dropdown-list-image mr-4">
                            {if {$ticket['picture']} eq ''}
                                <img class="rounded-circle" align="middle" src="img/glpi.png" alt="GlpiLogo" width="40px" height="40px">   
                            {else}
                                 <img class="rounded-circle" align="middle" src="{$ticket['picture']}" alt="" height="40px" width="40px">
                            {/if}
                            {if {$ticket['requester_active']} eq 0}
                              <span class="badge badge-pill badge-danger" data-toggle="tooltip" data-placement="right" title="Requester is Disabled in the AD !">!</span>
                            {/if}
                            <div class="status-indicator bg-warning"></div>
                            {if {$ticket['delay']} gt -8}
                            <td><span class="badge badge-success h-12">{$ticket['date']}</span></td>
                            {elseif {$ticket['delay']} gt -30 }
                            <td><span class="badge badge-warning h-12">{$ticket['date']}</span></td>
                            {else}
                            <td><span class="badge badge-danger h-12">{$ticket['date']}</span></td>
                            {/if}
                          </div>
                          
                          <div class="font-weight-bold">
                              
                            <div class="text-truncate">{if {$ticket['type']} eq 2}
                                <td align="center"><span class="badge badge-pill badge-primary">REQUEST</span></td>
                              {else} 
                                <td align="center"><span class="badge badge-pill badge-warning">INCIDENT</span></td>
                          {/if}
                          {if {$ticket['priority']} eq 'MAJOR'}
                                    <span class="badge badge-dark">{$ticket['priority']}</span>
                                {elseif {$ticket['priority']} eq 'VERY HIGH'}
                                    <span class="badge badge-danger">{$ticket['priority']}</span>  
                                {elseif {$ticket['TicketUrgency']} eq 'HIGH'}
                                    <span class="badge badge-warning">{$ticket['priority']}</span>  
                                {elseif {$ticket['TicketUrgency']} eq 'MEDIUM'}
                                    <span class="badge badge-success">{$ticket['priority']}</span>  
                                {else}
                                    <span class="badge badge-info">{$ticket['priority']}</span>  
                                {/if}
                          #{$ticket['id']} {$SubTitleTicket} {$ticket['requester']}
                                 
                            </div>
                            
                            <div class="text-left">{$ticket['name']}</div>
                            
                            <div class="text-black-700">
                               {$ticket['company']}                             
                            </div>
                          </div>
                        </a>
                        {/foreach}     
                    </div>
                        
                  </div>
                  
                </div>
              </div>
            </div>

         
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>{$CopyrightInfo}</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>



</body>

</html>
