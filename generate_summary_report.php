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
    <link href="css/checkbox.css" rel="stylesheet">
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

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>Generate Event Status Report</h1>
                        <hr>
                    </div>
                </div>
            </div>
        </section>

    <!-- <form method="post" action="produce_summary_report.php"> -->
    <form method="post" action="produce_summary_report.php"> 
        <section>
            <div class="container">
                    <div class="row">
                        <div class="col-3">
                            <div class="boxify">
                                <div class="form-group">
                                    <h3>Start Date</h3>
                                    <hr>
                                    <div class="input-group mb-3">
                                      <input required type="text" name="StartDate" class="form-control" id="datepicker1" value>
                                      <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar"></i></span>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="boxify">
                                <div class="form-group">
                                    <h3>End Date</h3>
                                    <hr>
                                    <div class="input-group mb-3">
                                      <input required type="text" name="EndDate" class="form-control" id="datepicker2" >
                                      <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar"></i></span>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="boxify">
                                <div class="form-group">
                                    <h3>Filter by Status</h3>
                                    <hr>
                                    <select required class="form-control" name="status">
                                        <option value="">Please select an option</option>
                                        <option value="Created">Created</option>
                                        <option value="Approved">Approved</option>
                                        <option value="Advertised">Advertised</option>
                                        <option value="Sold Out">Sold Out</option>
                                        <option value="Canceled">Canceled</option>
                                        <option value="Completed">Completed</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="boxify">
                                <h3>Include in report</h3>
                                <hr>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-check">
												<label>
													<input type="checkbox" checked name="eventId?" id="toggle" id="checkbox-1"> <span class="label-text">Event Id</span>
												</label>
											</div>
                                            <div class="form-check">
												<label>
													<input type="checkbox" checked name="status?" id="toggle" id="checkbox-2"> <span class="label-text">Status</span>
												</label>
											</div>
                                            <div class="form-check">
												<label>
													<input type="checkbox" checked name="capacity?" id="toggle" id="checkbox-3"> <span class="label-text">Capacity</span>
												</label>
											</div>
                                            <div class="form-check">
												<label>
													<input type="checkbox" checked name="ticketsSold?" id="toggle" id="checkbox-4"> <span class="label-text">Tickets Sold</span>
												</label>
											</div>
                                            <div class="form-check">
												<label>
													<input type="checkbox" checked name="profit?" id="toggle" id="checkbox-4"> <span class="label-text">Profit</span>
												</label>
											</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="boxify" style="min-height: 353.6px;">
                                 <h3>Type of report</h3>
                                <hr>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12">
<div class="form-check">
                                    <label>
                                        <input type="radio" checked name="type" id="toggle" id="radio-1" value="summary"> <span class="label-text">Summary</span> </label>
                                </div>

                                <div class="form-check">
                                    <label>
                                        <input type="radio" name="type" id="toggle" id="radio-2" value="detailed"> <span class="label-text">Detailed</span>
                                    </label>
                                </div>
                                                            </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
        </section>

        <section>
            <div class="container">
                <div class="boxify">
                    <div class="row">
                        <div class="col-12">
                            <h2 style="text-align: center; margin-bottom: 15px;">Submit Form & Generate Report</h2>
                            <hr>
                        </div>
                    </div>
<p style="text-align: center;">
                                <a href="generate_summary_report.php" class="btn btn-danger" style="width: 125px;">Cancel</a>
                                <button type="submit" class="btn btn-success" style="width: 125px; margin-left: 75px;">Create</button>
</p>
                </div>
            </div>
        </section>

                </form>

<?php include 'footer.php'; ?>
