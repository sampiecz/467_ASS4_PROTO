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
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <h3>Artist Information</h3>
                                        <label for="exampleFormControlInput1">First Name</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="John">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Middle Name</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Casper">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Last Name</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Doe">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Gender</label>
                                        <select class="form-control">
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Choose not to answer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <h3>Artist Contact</h3>
                                        <label for="exampleFormControlInput1">Email Address</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="johndoe@hotmail.com">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Phone Number</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="630 420 6666">
                                    </div>
                                </div>
                                <div class="col-12"> 
                                    <div class="row">
                                        <div class="col-2" style="padding-right: 5px !important;">
                                            <div class="form-group">
                                                <button type="create" class="btn btn-success" style="width: 100%;">Create</button>
                                            </div>
                                        </div>
                                        <div class="col-2" style="padding-left: 5px !important; padding-right: 5px !important;">
                                            <div class="form-group">
                                                <button type="cancel" class="btn btn-danger" style="width: 100%;">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

<?php include 'footer.php'; ?>
