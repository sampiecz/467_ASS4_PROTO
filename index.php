<?php include 'header.html'; ?>

<!-- Connect to the database -->
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
<!-- End: Connect to database -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="jumbotron jumbotron-fluid">
                      <div class="container">
                        <h1 class="display-4">Event management simplified</h1>
                        <p class="lead">Empowering you to better manage your events and focus on what matters.</p>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
				<div class="col-12">
					<div class="jumbotron jumbotron-fluid outlier-jumbo">
                      <div class="container">
						<div class="row">
							<div class="col-12">
								<h2>Create</h2>
								<hr>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12">
								<div class="card">
								  <div class="card-body">
									<h5 class="card-title">Create artists</h5>
									<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
									<a href="create_a_new_artist.php" class="btn btn-primary">Create artist</a>
								  </div>
								</div>    
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12">
								<div class="card">
								  <div class="card-body">
									<h5 class="card-title">Create bands</h5> <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
									<a href="create_a_new_band.php" class="btn btn-primary">Create band</a>
								  </div>
								</div>    
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12">
								<div class="card">
								  <div class="card-body">
									<h5 class="card-title">Create events</h5>
									<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
									<a href="create_a_new_event.php" class="btn btn-primary">Create event</a>
								  </div>
								</div>    
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
            <div class="row">
				<div class="col-12">
					<div class="jumbotron jumbotron-fluid outlier-jumbo">
                      <div class="container">
						<div class="row">
							<div class="col-12">
								<h2>Approve</h2>
								<hr>
							</div>
							<div class="col-12">
								<div class="card">
								  <div class="card-body">
									<h5 class="card-title">Approve events</h5>
									<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
									<a href="create_a_new_artist.php" class="btn btn-primary">Approve event</a>
								  </div>
								</div>    
							</div>
                        </div>
					</div>
				</div>
			</div>
            </div>
        </div>
    </section>


<?php include 'footer.html'; ?>
