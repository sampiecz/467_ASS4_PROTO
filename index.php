<?php include 'header.php'; ?>

    <style>
        * {
            text-align: center;
        }

        footer > p:nth-child(2)
        {
            text-align: left;
        }

        .card-text {
            text-align: left;
        }
    </style>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="jumbotron jumbotron-fluid" style="padding: 0px;">
                      <div class="jumbotron-image"></div>
                      <div class="container">
                        <div class="bg-text">
                            <h1 class="display-4">Event management simplified</h1>
                            <p class="lead" style="color: white;">Empowering you to better manage events and focus on what matters</p>
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
								<h2>Create artist, bands, and events</h2>
								<hr>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12">
								<div class="card">
                                  <img class="card-img-top" src="https://images.unsplash.com/photo-1527261834078-9b37d35a4a32?ixlib=rb-0.3.5&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;s=309fe659f0d0e2a5b7408b7a756613c2&amp;dpr=1&amp;auto=format&amp;fit=crop&amp;w=1000&amp;q=80&amp;cs=tinysrgb"/>
								  <div class="card-body">
									<h5 class="card-title">Create an artist</h5>
									<p class="card-text">Create an artist and add it to your artist database. Assign them to events and log important information.</p>
									<a href="login.php" class="btn btn-primary">Create an artist</a>
								  </div>
								</div>    
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12">
								<div class="card">
                                  <img class="card-img-top" src="https://images.unsplash.com/photo-1518552722618-737f6d8e91c6?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=20e3528b582270383b6b01e784e50c7c&dpr=1&auto=format&fit=crop&w=1000&q=80&cs=tinysrgb"/>
								  <div class="card-body">
									<h5 class="card-title">Create a band</h5> <p class="card-text">Create a band and add it to your band database. Assign them to events and log important information.</p>
									<a href="login.php" class="btn btn-primary">Create a band</a>
								  </div>
								</div>    
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12">
								<div class="card">
                                  <img class="card-img-top" src="https://images.unsplash.com/photo-1524368535928-5b5e00ddc76b?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=ae8584287da6fac5895bbe4fb80f9f5f&dpr=1&auto=format&fit=crop&w=1000&q=80&cs=tinysrgb"/>
								  <div class="card-body">
									<h5 class="card-title">Create an event</h5>
									<p class="card-text">Create an event and assign vendors, bands, and artists. See ticket information and event status.</p>
									<a href="login.php" class="btn btn-primary">Create an event</a>
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
								<h2>Approve events & Generate Event Status Report</h2>
                                <hr>
							</div>
</div>
<div class="row">
							<div class="col-6">
								<div class="card">
                                  <img class="card-img-top" src="img/thumbsup.jpg"/>
								  <div class="card-body">
								  <div class="card-body">
									<h5 class="card-title">Approve an event</h5>
									<p class="card-text">Quickly and easily view all event information. Including but not limited to vendors, artists, and bands.</p>
									<a href="login.php" class="btn btn-primary">Approve an event</a>
								  </div>
								</div>    
							</div>
                        </div>
                            <div class="col-6">
                                <div class="card">
                                  <img class="card-img-top" src="img/generatereport.jpg"/>
                                  <div class="card-body">
								  <div class="card-body">
                                    <h5 class="card-title">Generate Event Status Report</h5>
                                    <p class="card-text">See the status of all events added by Event Staff. Quickly generate a report on them and print it.</p>
                                    <a href="generate_summary_report.php" class="btn btn-primary">Generate a report</a>
                                  </div>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
