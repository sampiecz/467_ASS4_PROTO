<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>GEMS</title>

    <!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <link href="css/global.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="index.php"><i class="fa fa-diamond"></i> GEMS <i class="fa fa-diamond"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="btn btn-secondary" href="index.php">Logout <i class="fa fa-cog"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <main role="main" style="padding-top: 100px;">
        <div class="flex-wrapper">

<style>
.table td, .table th {
    padding: 0.6rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}
</style>

        <?php
            try {
                $dsn = "mysql:host=courses;dbname=z1732715";
                $username = "z1732715";
                $password = "1996Apr23";
                $pdo = new PDO($dsn, $username, $password);
            }
            catch(PDOexception $e) {
                echo "Connection to database failed: " . $e->getMessage();
            }
        ?>

<?php 


    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if(isset($_POST['Search']))
        {
            $searchData = trim($_POST['SearchBox']);
            $sql = "SELECT * FROM Event WHERE name LIKE '%" . $searchData . "%' OR  str_Date LIKE '%" . $searchData . "%' OR  end_Date LIKE '%" . $searchData . "%' OR  time LIKE '%" . $searchData . "%' OR  street LIKE '%" . $searchData . "%' OR  city LIKE '%" . $searchData . "%' OR  state LIKE '%" . $searchData . "%' OR  zip LIKE '%" . $searchData . "%' OR  status LIKE '%" . $searchData . "%' OR  capacity LIKE '%" . $searchData . "%' OR  notes LIKE '%" . $searchData . "%' OR  tickets LIKE '%" . $searchData . "%' OR  bandId LIKE '%" . $searchData . "%';"; 
            $getEvents = $pdo->query($sql);
            $eventRows = $getEvents->fetchAll();

            if(count($eventRows) == 0)
            {
                $eventSql = "SELECT * FROM Event;";
                $getEvents = $pdo->query($eventSql);
                $eventRows = $getEvents->fetchAll();

            echo'
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <p>No search results found.</p> 
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            ';

            }
    
        }
        if(isset($_POST['Decline']))
        {

            if(!empty($_POST['check_list'])) {
                foreach($_POST['check_list'] as $check) {
                    $sql = "UPDATE Event SET status = 'Declined' WHERE eventId = :eventId ";
                    $prepared = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
                    $result = $prepared->execute(array(':eventId' => $check));
                }
            }


            $eventSql = "SELECT * FROM Event;";
            $getEvents = $pdo->query($eventSql);
            $eventRows = $getEvents->fetchAll();

        }
        if(isset($_POST['Approve']))
        {
            if(!empty($_POST['check_list'])) {
                foreach($_POST['check_list'] as $check) {
                    $sql = "UPDATE Event SET status = 'Approved' WHERE eventId = :eventId ";
                    $prepared = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
                    $result = $prepared->execute(array(':eventId' => $check));
                }
            }

            $eventSql = "SELECT * FROM Event;";
            $getEvents = $pdo->query($eventSql);
            $eventRows = $getEvents->fetchAll();
        }
    }
    else
    {
            $eventSql = "SELECT * FROM Event;";
            $getEvents = $pdo->query($eventSql);
            $eventRows = $getEvents->fetchAll();
    }

        echo'
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>Approve an event</h1>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="boxify" style="padding: 0px;">
                            <form action="approve_event.php" method="POST"  class="form-inline mt-2 mt-md-0" style="margin-right: 0px; padding: 10px; margin-bottom: 0px; background: lightgray;">
                                <input  class="form-control mr-sm-2" type="text" name="SearchBox" aria-label="Search" style="width: 85%;">
                                <button class="btn btn-primary my-2 my-sm-0" type="Search" name="Search" value="Search" style="width: 14%;"><i class="fa fa-search"></i> Search Events</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <form action="approve_event.php" method="POST">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="boxify" style="padding: 0px;">
            ';

            
            $counter = 1;

            echo'
                                <table class="table" style="margin-top: 0px; margin-bottom: 0px;">
                                  <thead class="thead-light">
                                        <tr>
                                          <th scope="col">#</th>
                                          <th scope="col">Name</th>
                                          <th scope="col">Start Date</th>
                                          <th scope="col">End Date</th>
                                          <th scope="col">Location</th>
                                          <th scope="col">Status</th>
                                          <th scope="col">Capacity</th>
                                          <th scope="col">Event Manager</th>
                                          <th scope="col">Notes</th>
                                          <th scope="col">Select</th>
                                        </tr>
                                  </thead>
                                  <tbody class="record_table">
        ';
                                        foreach($eventRows as $row):

                                            $managerSql = "SELECT * FROM Manager WHERE managerId = " . $row['managerId'] . " LIMIT 1;";
                                            $getManagers = $pdo->query($managerSql);
                                            $managerRow = $getManagers->fetch();

                                            echo '
                                        <tr>'
                                        .  '<th scope="row">' . $counter . '</th>'
                                        .     '<td>' . $row['name'] . '</td>'
                                        .     '<td>' . $row['str_Date'] . '</td>'
                                        .     '<td>' . $row['end_Date'] . '</td>'
                                        .     '<td>' . $row['street'] . ' ' . $row['city'] . ' ' . $row['state'] . ' ' . $row['zip'] . '</td>'
                                        .     '<td>' . $row['status'] . '</td>'
                                        .     '<td>' . $row['capacity'] . '</td>'
                                        .     '<td>' . $managerRow['managerName'] . '</td>'
                                        .     '<td>' . $row['notes'] . '</td>'
                                        .     '<td><input value="' . $row['eventId'] . '" class="form-control" type="checkbox" name="check_list[]" /></td>' .
                                       '</tr>';
                                            $counter++;
                                        endforeach;

            echo'
                                  </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="boxify">
                                <h2 style="text-align: center; margin-bottom: 15px;">Submit Form & Approve or Decline Event</h2>
                                <div class="form-group">
<p style="text-align: center;">
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">Decline event</button>

                                    <button type="Approve" style="margin-left: 150px;" class="btn btn-success" value="Approve" name="Approve">Approve event</button>
</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </div>
        </section>

        <!-- Start Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Are you sure?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Are you sure you want to decline the event?</p>
              </div>
              <div class="modal-footer">
                <div class="form-group" style="width: 100%;">
<p style="text-align: center;">
                    <button type="button" class="btn btn-secondary" style="width: 125px;" data-dismiss="modal">Close</button>
                    <button type="Decline" style="width: 125px; margin-left: 75px;" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter" name="Decline" value="Decline">Decline event</button>
</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Modal -->

        </form>
    ';

?>

<?php include 'footer.php'; ?>
