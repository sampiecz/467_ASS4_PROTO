<?php include 'header.php'; ?>

<?php 

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $newAgent = trim($_POST['NewAgent']);

        if($newAgent == "1")
        {
            $agentName = trim($_POST['AgentName']);
            $sql = "INSERT INTO Agent (agentName) VALUES (:agentName)";
            $prepared = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            $result = $prepared->execute(array(':agentName' => $agentName));


            echo'
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <p>Agent created successfully.</p> 
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            ';

        }

        else if($newAgent == "0")
        {
            $agent = trim($_POST['AgentName']);
            $first_name = trim($_POST['ArtistFirstName']);
            $middle_name = trim($_POST['ArtistMiddleName']);
            $last_name = trim($_POST['ArtistLastName']);
            $gender = trim($_POST['ArtistGender']);

            $street = trim($_POST['ArtistStreet']);
            $city = trim($_POST['ArtistCity']);
            $state = trim($_POST['ArtistState']);
            $zip = trim($_POST['ArtistZipCode']);

            $email = trim($_POST['ArtistEmail']);
            $phone_number = trim($_POST['ArtistPhone']);

            $pricing = trim($_POST['ArtistPricing']);

            $sql = "INSERT INTO Artist (first_name, middle_name, last_name, gender, street, city, state, zip, email, phone_number, pricing) VALUES (:first_name, :middle_name, :last_name, :gender, :street, :city, :state, :zip, :email, :phone_number, :pricing) ";
            $prepared = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            $result = $prepared->execute(array(':first_name' => $first_name, ':middle_name' => $middle_name, ':last_name' => $last_name, ':gender' => $gender, ':street' => $street, ':city' => $city, ':state' => $state, ':zip' => $zip, ':email' => $email, ':phone_number' => $phone_number, ':pricing' => $pricing));

            echo'
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <p>Artist created successfully.</p> 
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            ';
        }

    }


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
                        <form method="post" action="create_a_new_artist.php">
                            <div class="row">
                                <div class="col-12">
                                    <div class="boxify">
                                        <div class="form-group">
                                            <h3>Artist Agent</h3>
                                            <label for="exampleFormControlInput1">Select an Agent</label>
                                            <input required type="hidden" id="NewAgent" name="NewAgent" value="0">
                                            <select required required name="AgentName" class="form-control">
												<option value="">Please select an option</option>
                                            ';

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
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="boxify">
                                        <div class="form-group">
                                            <h3>Artist Information</h3>
                                            <label for="ArtistFirstName">First Name</label>
                                            <input required type="text" class="form-control" id="ArtistFirstName" name="ArtistFirstName">
                                        </div>
                                        <div class="form-group">
                                            <label for="ArtistMiddleName">Middle Name</label>
                                            <input required type="text" class="form-control" id="ArtistMiddleName" name="ArtistMiddleName">
                                        </div>
                                        <div class="form-group">
                                            <label for="ArtistLastName">Last Name</label>
                                            <input required type="text" class="form-control" id="ArtistLastName" name="ArtistLastName">
                                        </div>
                                        <div class="form-group">
                                            <label for="ArtistGender">Gender</label>
                                            <select required required class="form-control" name="ArtistGender">
												<option value="">Please select an option</option>
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
                                            <input required type="text" class="form-control" id="ArtistStreet" name="ArtistStreet" >
                                        </div>
                                        <div class="form-group">
                                            <label for="ArtistCity">City</label>
                                            <input required type="text" class="form-control" id="ArtistCity" name="ArtistCity"  >
                                        </div>
                                        <div class="form-group">
                                            <label for="ArtistState">State</label>
											<select required class="form-control" name="ArtistState" id="ArtistState">
												<option value="">Please select an option</option>
												<option value="AL">Alabama</option>
												<option value="AK">Alaska</option>
												<option value="AZ">Arizona</option>
												<option value="AR">Arkansas</option>
												<option value="CA">California</option>
												<option value="CO">Colorado</option>
												<option value="CT">Connecticut</option>
												<option value="DE">Delaware</option>
												<option value="DC">District Of Columbia</option>
												<option value="FL">Florida</option>
												<option value="GA">Georgia</option>
												<option value="HI">Hawaii</option>
												<option value="ID">Idaho</option>
												<option value="IL">Illinois</option>
												<option value="IN">Indiana</option>
												<option value="IA">Iowa</option>
												<option value="KS">Kansas</option>
												<option value="KY">Kentucky</option>
												<option value="LA">Louisiana</option>
												<option value="ME">Maine</option>
												<option value="MD">Maryland</option>
												<option value="MA">Massachusetts</option>
												<option value="MI">Michigan</option>
												<option value="MN">Minnesota</option>
												<option value="MS">Mississippi</option>
												<option value="MO">Missouri</option>
												<option value="MT">Montana</option>
												<option value="NE">Nebraska</option>
												<option value="NV">Nevada</option>
												<option value="NH">New Hampshire</option>
												<option value="NJ">New Jersey</option>
												<option value="NM">New Mexico</option>
												<option value="NY">New York</option>
												<option value="NC">North Carolina</option>
												<option value="ND">North Dakota</option>
												<option value="OH">Ohio</option>
												<option value="OK">Oklahoma</option>
												<option value="OR">Oregon</option>
												<option value="PA">Pennsylvania</option>
												<option value="RI">Rhode Island</option>
												<option value="SC">South Carolina</option>
												<option value="SD">South Dakota</option>
												<option value="TN">Tennessee</option>
												<option value="TX">Texas</option>
												<option value="UT">Utah</option>
												<option value="VT">Vermont</option>
												<option value="VA">Virginia</option>
												<option value="WA">Washington</option>
												<option value="WV">West Virginia</option>
												<option value="WI">Wisconsin</option>
												<option value="WY">Wyoming</option>
											</select>	

                                        </div>
                                        <div class="form-group">
                                            <label for="ArtistZipCode">Zip Code</label>
                                            <input required type="text" class="form-control" id="ArtistZipCode" name="ArtistZipCode" >
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
											<div class="input-group mb-3">
											  <div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon1">@</span>
											  </div>
                                              <input required type="text" class="form-control" id="ArtistEmail" name="ArtistEmail">
											</div>
                                        </div>
                                        <div class="form-group">
                                            <label for="ArtistPhone">Phone Number</label>
											<div class="input-group mb-3">
											  <div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon1"><i class="fa fa-phone"></i></span>
											  </div>
                                              <input required type="text" class="form-control" id="ArtistPhone" name="ArtistPhone" >
											</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="boxify">
                                        <div class="form-group">
                                            <h3>Artist Pricing</h3>
                                            <label for="ArtistPricing">Concert Rate</label>
											<div class="input-group mb-3">
											  <div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon1">$</span>
											  </div>
                                              <input required type="text" class="form-control" id="ArtistPricing" name="ArtistPricing">
											</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row"> 
                                <div class="col-12"> 
                                    <div class="boxify">
                                        <h3>Submit Form & Create Artist</h3>             
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                                                <div class="form-group">
                                                    <button type="create" value="create"  class="btn btn-success" style="width: 100%;">Create</button>

                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                                                <div class="form-group">
                                                    <a href="create_a_new_artist.php" class="btn btn-danger" style="width: 100%;">Cancel</a>
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
                        <input required type="text" class="form-control" id="AgentName" name="AgentName">
                        <input required type="hidden" id="NewAgent" name="NewAgent" value="1">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="form-group">
                        <button type="cancel" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        <button type="create" value="create" class="btn btn-success">Create Agent</button>
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
