<?php include 'header.php'; ?>

<?php 

    $getAgentSql = "SELECT * FROM Agent;";
    $getAgentSqlPDO = $pdo->query($getAgentSql);
    $agentRows = $getAgentSqlPDO->fetchAll();

echo'   <section>
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
                                    <div class="boxify">
                                        <div class="form-group">
                                            <h3>Artist Information</h3>
                                            <label for="ArtistFirstName">First Name</label>
                                            <input type="text" class="form-control" id="ArtistFirstName" name="ArtistFirstName">
                                        </div>
                                        <div class="form-group">
                                            <label for="MiddleName">Middle Name</label>
                                            <input type="text" class="form-control" id="MiddleName" name="MiddleName">
                                        </div>
                                        <div class="form-group">
                                            <label for="LastName">Last Name</label>
                                            <input type="text" class="form-control" id="LastName" name="LastName">
                                        </div>
                                        <div class="form-group">
                                            <label for="Gender">Gender</label>
                                            <select class="form-control" name="Gender">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="NO">Choose not to answer</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="boxify">
                                        <div class="form-group">
                                            <h3>Artist Address</h3>
                                            <label for="ArtistStreet">Street</label>
                                            <input type="text" class="form-control" id="ArtistStreet" name="ArtistStreet" >
                                        </div>
                                        <div class="form-group">
                                            <label for="ArtistCity">City</label>
                                            <input type="text" class="form-control" id="ArtistCity" >
                                        </div>
                                        <div class="form-group">
                                            <label for="ArtistState">State</label>
                                            <input type="text" class="form-control" id="ArtistState" name="ArtistState">
                                        </div>
                                        <div class="form-group">
                                            <label for="ArtistZipCode">Zip Code</label>
                                            <input type="text" class="form-control" id="ArtistZipCode" name="ArtistZipCode" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="boxify">
                                        <div class="form-group">
                                            <h3>Artist Contact</h3>
                                            <label for="ArtistEmail">Email Address</label>
                                            <input type="text" class="form-control" id="ArtistEmail" name="ArtistEmail">
                                        </div>
                                        <div class="form-group">
                                            <label for="ArtistPhone">Phone Number</label>
                                            <input type="text" class="form-control" id="ArtistPhone" name="ArtistPhone" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="boxify">
                                        <div class="form-group">
                                            <h3>Artist Pricing</h3>
                                            <label for="ArtistPricing">Concert Rate</label>
                                            <input type="text" class="form-control" id="ArtistPricing" name="ArtistPricing">
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
                                            <select class="form-control"> ';

                                            foreach($agentRows as $row):
                                                echo '<option value="' . $row['agentId'] . '" >' . $row['agentName'] . '</option>';
                                            endforeach;

echo '                                          
                                            </select>
                                        </div>
                                        <div class="form-group">
											<div>
												<div class="grey-line">
												</div>
												<label for="exampleFormControlInput1" style="width: 1%;padding: 0px 0.25% 0px 0.25%;">or</label>
												<div class="grey-line">
												</div>
											</div>
										</div>
                                        <div class="form-group">
											<label for="exampleFormControlInput1" >Create an Agent</label>
											<br>
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
              <form method="post" action="create_a_new_artist.php">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="AgentName">Agent Name</label>
                        <input type="text" class="form-control" id="AgentName" name="AgentName">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="form-group">

                        <button type="decline" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">Create Agent</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- End Modal -->
';

?>

<?php include 'footer.php'; ?>
