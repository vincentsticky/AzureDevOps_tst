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
          <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
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

            <!-- World New Tickets -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">New Tickets</div>
                      <div class="h4 mb-0 font-weight-bold text-gray-800">{$WorldNew}
                      <h6><span class="badge badge badge-pill badge-warning">{$WorldNewIncidents}</span><span class="badge badge badge-pill badge-primary">{$WorldNewRequests}</span></h6>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-plus-circle text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- World processing tickets -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Processing Tickets</div>
                      <div class="h4 mb-0 font-weight-bold text-gray-800">{$WorldProcessing}
                        <h6><span class="badge badge badge-pill badge-warning">{$WorldProcessingIncidents}</span><span class="badge badge badge-pill badge-primary">{$WorldProcessingRequests}</span></h6>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-play text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Tickets</div>
                      <div class="h4 mb-0 font-weight-bold text-gray-800">{$WorldPending}
                        <h6><span class="badge badge badge-pill badge-warning">{$WorldNewIncidents}</span><span class="badge badge badge-pill badge-primary">{$WorldPendingRequests}</span></h6>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-pause text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Closed Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Closed Tickets (this Year)</div>
                      <div class="h4 mb-0 font-weight-bold text-gray-800">{$WorldClosedThisYear}
                        <h6><span class="badge badge badge-pill badge-warning">{$WorldClosedThisYearIncidents}</span><span class="badge badge badge-pill badge-primary">{$WorldClosedThisYearRequests}</span></h6>
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
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">New Tickets Overview @ {$UpdateDate}</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="container-fluid">
                    <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th style="text-align:center;">Region</th>
                            <th style="text-align:center;">New</th>
                            <th style="text-align:center;">Processing</th>
                            <th style="text-align:center;">Pending</th>
                            <th style="text-align:center;">Closed</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td style="text-align:center;">Americas</td>
                            <td style="text-align:center;"">{$USNew}</td>
                            <td style="text-align:center;">{$USProcessing}</td>
                            <td style="text-align:center;">{$USPending}</td>
                            <td style="text-align:center;">{$USClosedThisYear}</td>
                          </tr>
                          <tr>
                            <td style="text-align:center;">France</td>
                            <td style="text-align:center;">{$FranceNew}</td>
                            <td style="text-align:center;">{$FranceProcessing}</td>
                            <td style="text-align:center;">{$FrancePending}</td>
                            <td style="text-align:center;">{$FranceClosedThisYear}</td>
                          </tr>
                          <tr>
                            <td style="text-align:center;">Germany</td>
                            <td style="text-align:center;">{$GermanyNew}</td>
                            <td style="text-align:center;">{$GermanyProcessing}</td>
                            <td style="text-align:center;">{$GermanyPending}</td>
                            <td style="text-align:center;">{$GermanyClosedThisYear}</td>
                          </tr>
                          <tr>
                            <td style="text-align:center;">Shanghai</td>
                            <td style="text-align:center;">{$ShanghaiNew}</td>
                            <td style="text-align:center;">{$ShanghaiProcessing}</td>
                            <td style="text-align:center;">{$ShanghaiPending}</td>
                            <td style="text-align:center;">{$ShanghaiClosedThisYear}</td>
                          </tr>
                          <tr>
                            <td style="text-align:center;">Local IT</td>
                            <td style="text-align:center;">{$LocalITNew}</td>
                            <td style="text-align:center;">{$LocalITProcessing}</td>
                            <td style="text-align:center;">{$LocalITPending}</td>
                            <td style="text-align:center;">{$LocalITClosedThisYear}</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                        
                  </div>
                  
                </div>
              </div>
            </div>

            <!-- Global CMDB Info -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Global CMDB Informations</h6>
                  
                </div>
                <!-- Card Body -->
                <div class="col-xl-12 col-md-3 mb-4">
                  <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-3">
                          <div class="text-xs font-weight-bold text-success text-uppercase mb-1">AD Active Users</div>
                          <div class="h4 mb-0 font-weight-bold text-gray-800">{$ADActiveUsers}
                            
                          </div>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-address-card "></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              
                <div class="col-xl-12 col-md-3 mb-4">
                  <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Active Computers</div>
                          <div class="h4 mb-0 font-weight-bold text-gray-800">{$ActiveComputers}
                            
                          </div>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-laptop"></i>
                        </div>
                      </div>
                    </div>
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

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
