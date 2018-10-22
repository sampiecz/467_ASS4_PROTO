<?php include 'header.html'; ?>

<!-- Start: Connect to the database -->
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
<!-- End: Connect to the database -->

		<section style="background: red;">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-sm-12" style="background: green;">
						<h1>Red</h1>
						<hr>
					</div>
                    <div class="col-lg-4 col-sm-12" style="background: white;">
						<h1>Red</h1>
						<hr>
					</div>
                    <div class="col-lg-4 col-sm-12" style="background: yellow;">
						<h1>Red</h1>
						<hr>
					</div>
				</div>
                <div class="row">
					<div class="col-6" style="background: purple;">
						<h1>Red</h1>
						<hr>
					</div>
                    <div class="col-6" style="background: teal;">
						<h1>Red</h1>
						<hr>
					</div>
				</div>
			</div>
		</section>
        <section style="background: blue;">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<form>
						  <div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
							<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						  </div>
						  <div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
						  </div>
						  <div class="form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Check me out</label>
						  </div>
						  <button type="submit" class="btn btn-primary">Submit</button>
						</form>
						<h1>Blue</h1>
						<hr>
					</div>
				</div>
			</div>
		</section>


<?php include 'footer.html'; ?>
