<?php include 'header.php'; ?>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Create a new band</h1>
                    <hr>
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
                        <label for="exampleFormControlInput1">Enter band name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="John">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Enter band name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Casper">
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-success">Create band</button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


<?php include 'footer.php'; ?>
