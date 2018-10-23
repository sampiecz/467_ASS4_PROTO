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

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Approve an event</h1>
                    <hr>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
					<table class="table">
					  <thead class="thead-light">
						<tr>
						  <th scope="col">#</th>
						  <th scope="col">One</th>
						  <th scope="col">Two</th>
						  <th scope="col">Three</th>
						</tr>
					  </thead>
					  <tbody>
						<tr>
						  <th scope="row">1</th>
						  <td>Placeholder</td>
						  <td>Placeholder</td>
						  <td>Placeholder</td>
						</tr>
						<tr>
						  <th scope="row">2</th>
						  <td>Placeholder</td>
						  <td>Placeholder</td>
						  <td>Placeholder</td>
						</tr>
						<tr>
						  <th scope="row">3</th>
						  <td>Placeholder</td>
						  <td>Placeholder</td>
						  <td>Placeholder</td>
						</tr>
					  </tbody>
					</table>
                </div>
            </div>
        </div>
    </section>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<form method="post" action="">
						<div class="form-group">
							<button type="submit" class="btn btn-danger">Decline event</button>
							<button type="submit" class="btn btn-success">Approve event</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

<?php include 'footer.html'; ?>
