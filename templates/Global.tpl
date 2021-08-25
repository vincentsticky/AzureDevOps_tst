<!doctype html>
<meta http-equiv="Refresh" content="60"> 
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="title icon" href="images/title-img.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
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
                          {section name=supgroups loop=$supportgroups}                       
                            <a href="ProcessingTicketsFiltered.php?entity=global&flag=globe&SupportGroup={$supportgroups[supgroups].groupname}" class="dropdown-item">{$supportgroups[supgroups].groupname}</a>
                            {/section}  
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
                  <h4 class="text-light text-italic text-right"><span class="pull-right"><i class="fas fa-info-circle mr-4"></i>Refreshed @ {$UpdateDate}</span></h4>
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
                        <h2><span class="badge badge-light">{$WorldNew}</span></h2>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-secondary text-center">
                    <i class="fas fa-info-circle mr-3"></i>
                    <span> <span class="badge badge-pill badge-warning">{$WorldNewIncidents}</span> -  <span class="badge badge-pill badge-primary">{$WorldNewRequests}</span></span>
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
                        <h2><span class="badge badge-light">{$WorldProcessing}</span></h2>
                      
                      </div>
                    </div>
                  </div>
                
                  <div class="card-footer text-secondary text-center">
                    <i class="fas fa-info-circle mr-3"></i>
                    <span> <span class="badge badge-pill badge-warning">{$WorldProcessingIncidents}</span> -  <span class="badge badge-pill badge-primary">{$WorldProcessingRequests}</span></span>
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
                        <h2><span class="badge badge-light">{$WorldPending}</span></h2>
                        
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-secondary text-center">
                    <i class="fas fa-info-circle mr-3"></i>
                    <span> <span class="badge badge-pill badge-warning">{$WorldPendingIncidents}</span> -  <span class="badge badge-pill badge-primary">{$WorldPendingRequests}</span></span>
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
                        <h2><span class="badge badge-light">{$WorldClosedThisYear}</span></h2>
                        
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-secondary text-center">
                    <i class="fas fa-info-circle mr-3"></i>
                    <span> <span class="badge badge-pill badge-warning">{$WorldClosedThisYearIncidents}</span> -  <span class="badge badge-pill badge-primary">{$WorldClosedThisYearRequests}</span></span>
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
                      <td><h3><span class="badge badge badge-pill badge-info">{$USNew}</span></h3></td>
                      <td><h3><span class="badge badge badge-pill badge-info">{$USProcessing}</span></h3></td>
                      <td><h3><span class="badge badge badge-pill badge-info">{$USPending}</span></h3></td>
                      <td><h3><span class="badge badge badge-pill badge-info">{$USClosedThisYear}</span></h3></td>
                    </tr>
                    <tr>
                      <td style="vertical-align:middle"><H4>Europe / FR</H4></td>
                      <td><h3><span class="badge badge badge-pill badge-info">{$FranceNew}</span></h3></td>
                      <td><h3><span class="badge badge badge-pill badge-info">{$FranceProcessing}</span></h3></td>
                      <td><h3><span class="badge badge badge-pill badge-info">{$FrancePending}</span></h3></td>
                      <td><h3><span class="badge badge badge-pill badge-info">{$FranceClosedThisYear}</span></h3></td>
                      
                    </tr>
                    <tr>
                      <td style="vertical-align:middle"><H4>Europe / DE</H4></td>
                      <td><h3><span class="badge badge badge-pill badge-info">{$GermanyNew}</span></h3></td>
                      <td><h3><span class="badge badge badge-pill badge-info">{$GermanyProcessing}</span></h3></td>
                      <td><h3><span class="badge badge badge-pill badge-info">{$GermanyPending}</span></h3></td>
                      <td><h3><span class="badge badge badge-pill badge-info">{$GermanyClosedThisYear}</span></h3></td>
                    </tr>
                    <tr>
                      <td style="vertical-align:middle"><H4>Asia / Shanghaï</H4></td>
                      <td><h3><span class="badge badge badge-pill badge-info">{$ShanghaiNew}</span></h3></td>
                      <td><h3><span class="badge badge badge-pill badge-info">{$ShanghaiProcessing}</span></h3></td>
                      <td><h3><span class="badge badge badge-pill badge-info">{$ShanghaiPending}</span></h3></td>
                      <td><h3><span class="badge badge badge-pill badge-info">{$ShanghaiClosedThisYear}</span></h3></td>
                    </tr>
                    <tr>
                      <td style="vertical-align:middle"><H4>Local IT</H4></td>
                      <td><h3><span class="badge badge badge-pill badge-info">{$LocalITNew}</span></h3></td>
                      <td><h3><span class="badge badge badge-pill badge-info">{$LocalITProcessing}</span></h3></td>
                      <td><h3><span class="badge badge badge-pill badge-info">{$LocalITPending}</span></h3></td>
                      <td><h3><span class="badge badge badge-pill badge-info">{$LocalITClosedThisYear}</span></h3></td>
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
                        <h5>{$TitleProcessToDo}</h5>
                        <h3>{$ProcessesToDo}</h3>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-secondary">
                    <i class="fas fa-info-circle mr-3"></i>
                    <span>{$UpdateDate}</span>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6 p-2">
                <div class="card card-common">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <i class="fas fa-user-check fa-3x text-success"></i>
                      <div class="text-right text-secondary">
                        <h5>{$TitleProcessCompleted}</h5>
                        <h3>{$ProcessesCompleted}</h3>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-secondary">
                    <i class="fas fa-info-circle mr-3"></i>
                    <span>{$UpdateDate}</span>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6 p-2">
                <div class="card card-common">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <i class="fas fa-user-cog fa-3x text-danger"></i>
                      <div class="text-right text-secondary">
                        <h5>{$TitleProcessOpened}</h5>
                        <h3>0</h3>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-secondary">
                    <i class="fas fa-info-circle mr-3"></i>
                    <span>{$UpdateDate}</span>
                  </div>
                </div>
              </div>
             
            </div>
          </div>
        </div>
      
</section>
    
   

  </body>
</html>






