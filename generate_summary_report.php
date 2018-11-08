<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>OFNI</title>

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
        <a class="navbar-brand" href="index.php"><i class="fa fa-music"></i> OFNI <i class="fa fa-music"></i></a>
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
                                    <label for="date">Start Date</label>
                                    <div class="input-group mb-3">
                                      <input type="text" name="StartDate" class="form-control" id="datepicker1" value>
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
                                    <label for="date">End Date</label>
                                    <div class="input-group mb-3">
                                      <input type="text" name="EndDate" class="form-control" id="datepicker2" >
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
                                    <label for="exampleFormControlInput1">Filter by Status</label>
                                    <select class="form-control" name="status">
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
                        <div class="col-12">
                            <div class="boxify">
                                <h2>Select what to include in the report</h2>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12">
											<div class="form-check">
												<label>
													<input type="checkbox" name="Artist"> <span class="label-text">Artist</span>
												</label>
											</div>
											<div class="form-check">
												<label>
													<input type="checkbox" name="Band" id="checkbox-1"> <span class="label-text">Band</span>
												</label>
											</div>
											<div class="form-check">
												<label>
													<input type="checkbox" name="EventManager" id="checkbox-2"> <span class="label-text">Event Manager</span>
												</label>
											</div>
											<div class="form-check">
												<label>
													<input type="checkbox" name="TicketPrice" id="checkbox-3"> <span class="label-text">Ticket Price</span>
												</label>
											</div>
											<div class="form-check">
												<label>
													<input type="checkbox" name="select-all" id="select-all" id="checkbox-4"> <span class="label-text">All</span>
												</label>
											</div>
					<div class="form-check">
												<label>
													<input type="checkbox" name="select-all" id="select-all" id="checkbox-4"> <span class="label-text">All</span>
												</label>
											</div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
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
                            <h2>Submit Form & Generate Report</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group">
                                <a href="generate_summary_report.php" class="btn btn-danger" style="width: 100%;">Cancel</a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-success" style="width: 100%;">Create</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

                </form>

<script language="JavaScript">
	// Listen for click on toggle checkbox
	$('#select-all').click(function(event) {   
		if(this.checked) {
			// Iterate each checkbox
			$(':checkbox').each(function() {
				this.checked = true;                        
			});
		} else {
			$(':checkbox').each(function() {
				this.checked = false;                       
			});
		}
	});
//Event Id
//Event Name
//Location
//Date 
//Time
//Contact For Band or Artist

</script>

<?php include 'footer.php'; ?>
