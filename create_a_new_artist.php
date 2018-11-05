<?php include 'header.php'; ?>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>Create a new artist</h1>
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
                            <label for="exampleFormControlInput1">Enter artist first name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="John">
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlInput1">Enter artist middle name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Casper">
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlInput1">Enter artist last name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Doe">
                          </div>
			  <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    
  </button>
  			  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Male</a>
    <a class="dropdown-item" href="#">Female</a>
    <a class="dropdown-item" href="#">Choose not to answer</a>
  </div>
 <div class="form-group">
                            <label for="exampleFormControlInput1">Enter artist email address</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="johndoe@hotmail.com">
</div>

 <div class="form-group">
                            <label for="exampleFormControlInput1">Enter artist phone number</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="630 420 6666">
</div>

 	 





                          <div class="form-group">
                            <button type="submit" class="btn btn-success">Create artist</button>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

<?php include 'footer.php'; ?>
