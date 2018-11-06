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
		<form method="post" action="create_band_success.php">
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
                                                <option></option>
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
                                            <input type="text" class="form-control" name="name" >
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
