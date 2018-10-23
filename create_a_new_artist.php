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
                    <form>
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Enter artist first name</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="John">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Enter artist middle name</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Casper">
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.html'; ?>
