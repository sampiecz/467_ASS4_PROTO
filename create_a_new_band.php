<?php include 'header_logout.php'; ?>

<?php
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        { 
            $band_Name = trim($_POST['bandname']);
            $band_Members = trim($_POST['members']);
            $pay_Rate = trim($_POST['rate']);
            $special_Notes = trim($_POST['notes']);
            $band_Lead_Number = trim($_POST['bl_Number']);
            $agent_Street = trim($_POST['ag_Street']);
            $agent_City = trim($_POST['ag_City']);
            $agent_State = trim($_POST['ag_State']); $agent_Zip_Code = trim($_POST['ag_ZipCode']);
            $agent_Email = trim($_POST['ag_Email']);
            $agent_Phone = trim($_POST['ag_Phone']);

            $q = "INSERT INTO Band (name, member, rate, notes, bl_Number, ag_Street, ag_City, ag_State, ag_Zip, ag_Email, ag_Phone) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
            $query = $pdo->prepare($q); 
            $results = $query->execute(array($band_Name, $band_Members, $pay_Rate, $special_Notes, $band_Lead_Number, $agent_Street, $agent_City, $agent_State, $agent_Zip_Code, $agent_Email, $agent_Phone));

            echo'
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <p>Band created successfully.</p> 
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

?>

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
		<form method="post" action="">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="boxify">
							<h2>Band Information</h2>
							<hr>
                            <div class="row">
                                <div class="col-6">
                                    <div class="boxify" style="height: 402px;">
                                        <div class="form-group ">
                                            <h3>Band Members</h3>
                                            <label for="exampleFormControlInput1">Member title</label>
                                             <select required required class="form-control" name='members'>
												<option value="">Please select an option</option>
                                                <option>Band Leader</option>
                                                <option>Drummer</option>
                                                <option>Vocalist</option>
                                            </select>
                                        </div>
                                        <div class="form-group ">
                                            <label for="exampleFormControlInput1">Concert rate</label>
											<div class="input-group mb-3">
											  <div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon1">$</span>
											  </div>
                                              <input required type="text" class="form-control" name="rate" >
											</div>

                                        </div>
                                        <div class="form-group ">
                                            <label for="exampleFormControlInput1">Special notes</label>
                                            <textarea required class="form-control" name='notes'></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="boxify">
                                        <div class="form-group ">
                                            <h3>Band Name</h3>		
                                            <label for="exampleFormControlInput1">Enter band name</label>
                                            <input required type="text" class="form-control" name="bandname" >
                                        </div>
                                    </div>
                                    <div class="boxify">
                                        <div class="form-group ">
                                            <h3>Band Leader Contact</h3>
                                            <label for="exampleFormControlInput1">Phone number</label>
											<div class="input-group mb-3">
											  <div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon1"><i class="fa fa-phone"></i></span>
											  </div>
                                              <input required type="phone" class="form-control" name="bl_Number" >
											</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
                </div>
                <div class="row">
					<div class="col-12">
						<div class="boxify">
                            <h2>Agent Information</h2>
                            <hr>
                            <div class="row">
                                <div class="col-6">
									<div class="boxify">
										<div class="form-group ">
											<h3>Address</h3>
											<label for="exampleFormControlInput1">Street</label>
											<input required type="text" class="form-control" name="ag_Street" >
										</div>
										<div class="form-group ">
											<label for="exampleFormControlInput1">City</label>
											<input required type="text" class="form-control" name="ag_City" >
										</div>
										<div class="form-group ">
											<label for="exampleFormControlInput1">State</label>
											<select required required class="form-control" name="ag_State">
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
										<div class="form-group ">
											<label for="exampleFormControlInput1">Zip Code</label>
											<input required type="text" class="form-control" name="ag_ZipCode" >
										</div>
									</div>
                                </div>
                                <div class="col-6">
									<div class="boxify" style="height: 451px;">
										<div class="form-group ">
											<h3>Agent Contact Information</h3>
											<label for="exampleFormControlInput1">Email</label>
											<div class="input-group mb-3">
											  <div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon1">@</span>
											  </div>
											  <input required type="text" class="form-control" name="ag_Email" >
											</div>
										</div>
										<div class="form-group ">
											<label for="exampleFormControlInput1">Phone Number</label>
											<div class="input-group mb-3">
											  <div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon1"><i class="fa fa-phone"></i></span>
											  </div>
											  <input required type="phone" class="form-control" name="ag_Phone" >
											</div>
										</div>
									</div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="boxify">
							<h2 style="text-align: center; margin-bottom: 15px;">Submit Form & Create Band</h2>
							<div class="form-group">
                                <p style="text-align: center;">
                                    <a href="create_a_new_band.php" style="width: 125px;" class="btn btn-danger">Cancel</a>
                                    <button type="submit" style="width: 125px; margin-left: 75px;" class="btn btn-success">Create Band</button>
                                </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
    </section>

<?php include 'footer.php'; ?>
