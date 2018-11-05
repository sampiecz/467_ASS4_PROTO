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
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="index.php">OFNI</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="btn btn-secondary" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-secondary" href="login.php">Login</a>
            </li>
            <li class="nav-item">
				<div class="dropdown">
					<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">Create</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="create_a_new_artist.php">Create Artist</a>
						<a class="dropdown-item" href="create_a_new_band.php">Create Band</a>
						<a class="dropdown-item" href="create_a_new_event.php">Create Event</a>
					</div>
				</div>
            </li>
			<li class="nav-item">
              <a class="btn btn-secondary" href="approve_event.php">Approve Event</a>
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