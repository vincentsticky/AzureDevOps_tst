<!doctype html>
<meta http-equiv="Refresh" content="60"> 
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="title icon" href="images/title-img.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/xcash/bootstrap-autocomplete@v2.3.2/dist/latest/bootstrap-autocomplete.min.js"></script>
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
                <img src="img/title-img.png" width="50" class="rounded-circle mr-3"><a href="./index.php">Raynet</a>
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
                <div class="col-md-4">
                  <h4 class="text-light text-uppercase mb-0"><img src='./pics/{$Flag}.png' height='40px'> {$Company}</h4>
                </div>
                <div class="col-md-4">
                  <h4 class="text-light mb-0 text-center">{$PageTitle}<h4>
                </div>
                
                <div class="col-md-4">
                  <h4 class="text-light text-italic text-right"><span class="pull-right"><i class="fas fa-sync mr-4"></i>{$UpdateDate}</span></h4>
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
                        <h3><a href="./NewTickets.php?entity={$Company}&flag={$Flag}">{$ValueNewTickets}</a></h3>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-secondary text-center">
                    <i class="fas fa-sync mr-4"></i>
                    <span> <span class="badge badge-pill badge-warning">{$NewIncidents}</span> -  <span class="badge badge-pill badge-primary">{$NewRequests}</span></span>
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
                        <h3><a href="./ProcessingTickets.php?entity={$Company}&flag={$Flag}">{$ProcessingFiltered} / {$ValueProcessingTickets}</h3></a>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-secondary text-center">
                    <i class="fas fa-sync mr-4"></i>
                    <span> <span class="badge badge-pill badge-warning">{$ProcessingIncidents}</span> -  <span class="badge badge-pill badge-primary">{$ProcessingRequests}</span></span>
                    
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
                        <h3><a href="./PendingTickets.php?entity={$Company}&flag={$Flag}">{$ValuePendingTickets}</a></h3>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-secondary text-center">
                    <i class="fas fa-sync mr-4"></i>
                    <span> <span class="badge badge-pill badge-warning">{$PendingIncidents}</span> -  <span class="badge badge-pill badge-primary">{$PendingRequests}</span></span>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 p-2">
                <div class="card card-common">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <i class="fas fa-user-check fa-3x text-success"></i>
                      <div class="text-right text-secondary">
                        <h5>{$TitleClosedTickets}</h5>
                        <h3>{$ValueClosedTickets} / {$ValueOpenedTickets}</h3>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-secondary text-center">
                    <i class="fas fa-sync mr-4"></i>
                    <span> <span class="badge badge-pill badge-warning">{$ClosedIncidents}</span> -  <span class="badge badge-pill badge-primary">{$ClosedRequests}</span></span>
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
            
                    {section name=sec1 loop=$tickets}
                        <tr>
                          {if {$tickets[sec1].type} eq 2}
                            <td align="center"><span class="badge badge-pill badge-primary">REQUEST</span></td>
                          {else} 
                            <td align="center"><span class="badge badge-pill badge-warning">INCIDENT</span></td>
                          {/if}
                            <!-- <td><a href="https://servicedesk.ar.ray.group/front/ticket.form.php?id={$tickets[sec1].id}" class="btn btn-primary btn-lg disabled" role="button" aria-disabled="true">{$tickets[sec1].id}</a></td> -->
                            <td><a href="https://servicedesk.ar.ray.group/front/ticket.form.php?id={$tickets[sec1].id}" target="_blank">{$tickets[sec1].id}</a></td>
                            <td align="left">{$tickets[sec1].name}</td>
                            {if {$tickets[sec1].delay} gt -8}
                            <td><span class="badge badge-success h-12">{$tickets[sec1].date}</span></td>
                            {elseif {$tickets[sec1].delay} gt -30 and {$tickets[sec1].delay} lt -7}
                            <td><span class="badge badge-warning h-12">{$tickets[sec1].date}</span></td>
                            {else}
                            <td><span class="badge badge-danger h-12">{$tickets[sec1].date}</span></td>
                            {/if}
                            {if {$tickets[sec1].priority} eq 'MAJOR'}
                              <td><span class="badge badge-dark">{$tickets[sec1].priority}</span></td>  
                            {elseif {$tickets[sec1].priority} eq 'VERY HIGH'}
                              <td><span class="badge badge-danger">{$tickets[sec1].priority}</span></td>  
                            {elseif {$tickets[sec1].priority} eq 'HIGH'}
                              <td><span class="badge badge-warning">{$tickets[sec1].priority}</span></td>  
                            {elseif {$tickets[sec1].priority} eq 'MEDIUM'}
                              <td><span class="badge badge-success">{$tickets[sec1].priority}</span></td>  
                            {else}
                              <td><span class="badge badge-info">{$tickets[sec1].priority}</span></td>  
                            {/if}
                            
                            <td align="left">{$tickets[sec1].requester}</td>
                            <td align="left"><span class="badge badge-pill badge-info">{$tickets[sec1].company}</span></td>
                            
                        </tr>
                    {/section}            
                        
                  </tbody>

                </table>

    </td> 

    </section>

    <!-- end of cards -->
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH<+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
  <script>
    function myFunction(val) {
      alert("The input value has changed. The new value is: " + val);
    }
</script>
  </html>


<meta http-equiv="Refresh" content="60"> 

