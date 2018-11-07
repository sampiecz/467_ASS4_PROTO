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
                                    <div class="boxify">
                                        <div class="form-group ">
                                            <h3>Band Members</h3>
                                            <label for="exampleFormControlInput1">Member title</label>
                                             <select class="form-control" name='members'>
                                                <option>Band Leader</option>
                                                <option>Drummer</option>
                                                <option>Vocalist</option>
                                            </select>
                                        </div>
                                        <div class="form-group ">
                                            <label for="exampleFormControlInput1">Concert rate</label>
                                            <input type="text" class="form-control" name="rate" >
                                        </div>
                                        <div class="form-group ">
                                            <label for="exampleFormControlInput1">Special notes</label>
                                            <textarea class="form-control" name='notes'></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="boxify">
                                        <div class="form-group ">
                                            <h3>Band Name</h3>		
                                            <label for="exampleFormControlInput1">Enter band name</label>
                                            <input type="text" class="form-control" name="bandname" >
                                        </div>
                                    </div>
                                    <div class="boxify">
                                        <div class="form-group ">
                                            <h3>Band Leader Contact</h3>
                                            <label for="exampleFormControlInput1">Phone number</label>
                                            <input type="text" class="form-control" name="bl_Number" >
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
											<input type="text" class="form-control" name="ag_Street" >
										</div>
										<div class="form-group ">
											<label for="exampleFormControlInput1">City</label>
											<input type="text" class="form-control" name="ag_City" >
										</div>
										<div class="form-group ">
											<label for="exampleFormControlInput1">State</label>
											<input type="text" class="form-control" name="ag_State" placeholder="make this a dropdown">
										</div>
										<div class="form-group ">
											<label for="exampleFormControlInput1">Zip Code</label>
											<input type="text" class="form-control" name="ag_ZipCode" >
										</div>
									</div>
                                </div>
                                <div class="col-6">
									<div class="boxify">
										<div class="form-group ">
											<h3>Agent Contact Information</h3>
											<label for="exampleFormControlInput1">Email</label>
											<input type="text" class="form-control" name="ag_Email" >
										</div>
										<div class="form-group ">
											<label for="exampleFormControlInput1">Phone Number</label>
											<input type="text" class="form-control" name="ag_Phone" >
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
							<h2>Submit Form & Create Band</h2>
							<div class="form-group">
								<button type="submit" class="btn btn-success">Create Band</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
    </section>

<?php include 'footer.php'; ?>
