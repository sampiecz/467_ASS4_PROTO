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
		<form method="post" action=""> 
			<div class="container">
				<div class="row">
					<div class="col-6">
						<div class="border-light">
							<h2>Band Information</h2>
							<hr>
							<div class="form-group border-light">
								<h3>Name</h3>		
								<label for="exampleFormControlInput1">Enter band name</label>
								<input type="text" class="form-control" id="exampleFormControlInput1" >
							</div>
							<div class="form-group border-light">
								<h3>Band Members</h3>
								<label for="exampleFormControlInput1">Member title</label>
								<select>
									<option></option>
								</select>
							</div>
							<div class="form-group border-light">
								<label for="exampleFormControlInput1">Concert rate</label>
								<input type="text" class="form-control" id="exampleFormControlInput1" >
							</div>
							<div class="form-group border-light">
								<label for="exampleFormControlInput1">Special notes</label>
								<textarea></textarea>
							</div>
							<div class="form-group border-light">
								<h3>Band Leader</h3>
								<label for="exampleFormControlInput1">Phone number</label>
								<input type="text" class="form-control" id="exampleFormControlInput1" >
							</div>
						</div>
					</div>
					<div class="col-6">
						<div class="border-light">
							<h2>Agent Information</h2>
							<hr>
							<div class="form-group border-light">
								<h3>Address</h3>
								<label for="exampleFormControlInput1">Street</label>
								<input type="text" class="form-control" id="exampleFormControlInput1" >
								<label for="exampleFormControlInput1">City</label>
								<input type="text" class="form-control" id="exampleFormControlInput1" >
								<label for="exampleFormControlInput1">State</label>
								<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="make this a dropdown">
								<label for="exampleFormControlInput1">Zip Code</label>
								<input type="text" class="form-control" id="exampleFormControlInput1" >
							</div>
							<div class="form-group border-light">
								<h3>Contact Information</h3>
								<label for="exampleFormControlInput1">Email</label>
								<input type="text" class="form-control" id="exampleFormControlInput1" >
								<label for="exampleFormControlInput1">Phone Number</label>
								<input type="text" class="form-control" id="exampleFormControlInput1" >
							</div>
							<div class="form-group border-light">
								<h3>Band Leader Contact</h3>
								<label for="exampleFormControlInput1">Phone Number</label>
								<input type="text" class="form-control" id="exampleFormControlInput1" >
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<h2>Submit Form & Create Band</h2>
						<div class="form-group">
							<button type="submit" class="btn btn-success">Create Band</button>
						</div>
					</div>
				</div>
			</div>
		</form>
    </section>

<?php include 'footer.php'; ?>
