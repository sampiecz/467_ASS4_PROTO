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
                                <div class="col-12">
                                    <div class="boxify">
                                        <div class="form-group">
                                            <h3>Artist Information</h3>
                                            <label for="exampleFormControlInput1">First Name</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" >
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Middle Name</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" >
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Last Name</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" >
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
                                </div>
                                <div class="col-12">
                                    <div class="boxify">
                                        <div class="form-group">
                                            <h3>Artist Address</h3>
                                            <label for="exampleFormControlInput1">Street</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" >
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">City</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" >
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">State</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" >
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Zip Code</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="boxify">
                                        <div class="form-group">
                                            <h3>Artist Contact</h3>
                                            <label for="exampleFormControlInput1">Email Address</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" >
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Phone Number</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="boxify">
                                        <div class="form-group">
                                            <h3>Artist Pricing</h3>
                                            <label for="exampleFormControlInput1">Concert Rate</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                               <div class="col-12">
                                    <div class="boxify">
                                        <div class="form-group">
                                            <h3>Artist Agent</h3>
                                            <label for="exampleFormControlInput1">Select an Agent</label>
                                            <select>
                                                <!-- Need PHP loop through all existing agents. 
                                                     So basically a "SELECT * FROM Agent" then a foreach php loop here
                                                -->
                                                <option></option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">or create an Agent</label>
                                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalCenter">Create Agent</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12"> 
                                    <div class="boxify">
                                        <h3>Submit Form & Create Artist</h3>             
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                                                <div class="form-group">
                                                    <button type="create" class="btn btn-success" style="width: 100%;">Create</button>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                                                <div class="form-group">
                                                    <button type="cancel" class="btn btn-danger" style="width: 100%;">Cancel</button>
                                                </div>
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

        <!-- Start Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Create Agent</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form method="post" action="">
                <div class="modal-body">
                    <div class="form-group">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="form-group">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        <button type="decline" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">Create Agent</button>
                    </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- End Modal -->

<?php include 'footer.php'; ?>
