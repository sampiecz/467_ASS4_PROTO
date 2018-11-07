<?php include 'header.php'; ?>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Create a new event</h1>
                    <hr>
                </div>
            </div>
        </div>
    </section>

    <section>
        <form method="post" action="create_event_success.php">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="boxify">
                            <div class="form-group">
                                <h3>Artist </h3>
                                <label for="exampleFormControlInput1">Enter Artist </label>
                                <input type="text"  class="form-control" name="name_Art">
                                  <?php
				  ?>
                                  <option>Thing</option>
                                </select>
                            </div>
                        </div>
                    </div>
             <div class="container">
               <div class="row">
                    <div class="col-12">
                       <div class="boxify">
                            <div class="form-group">
                                <h3>Band </h3>
                                <label for="exampleFormControlInput1">Enter Band </label>
                                <input type="text"  class="form-control" name="name_Band">
                                    <!-- Php goes here -->
                                    <option>Thing</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="boxify">
                            <div class="form-group">
                                <h3>Event Manager</h3>
                                <label for="exampleFormControlInput1">Enter event name</label>
                                <select class="form-control">
                                    <!-- Php goes here -->
                                    <option>Thing</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="boxify">
                            <div class="form-group">
                                <h3>Event Location</h3>
                                <label for="exampleFormControlInput1">Street</label>
                                <input type="text" class="form-control" name="street" >
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">City</label>
                                <input type="text" class="form-control" name="city" >
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">State</label>
                                <select class="form-control" name="state">
                                    <option>Thing</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Zip Code</label>
                                <input type="text" class="form-control" name="zip" >
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="boxify">
                            <div class="form-group">
                                <h3>Event Date</h3>
                                <label for="exampleFormControlInput1">Start Time</label>
                                <!-- Jquery -->
                                <select class="form-control" name="str_Date">
                                    <option>Thing</option>
                                </select>
                            </div>
			 <div class="form-group">
                         <label for="exampleFormControlInput1">End Time</label>
                         <!-- Jquery -->
                         <select class="form-control" name="end_Date">  
                                    <option>Thing</option>
                                </select>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Status</label>
                                <!-- Jquery -->
                                <select class="form-control" name="status">
                                    <option>Thing</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Seating Capacity</label>
                                <!-- Jquery -->
                                <select class="form-control" name="capacity">
                                    <option>Thing</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12"> 
                        <div class="boxify">
                            <h3>Submit form & Create Event</h3>             
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
            </div>
        </form>
    </section>
<!--
 $sql = ("SELECT name, middle_Name, last_Name, gender, email, numbers FROM Artist WHERE artistId = '$artId'");
 $result = $conn->query($sql)
 if ($result->num_rows > 0) {
// output data of each row
	while($row = $result->fetch_assoc()) { 
		echo "First Name: " . $row["name"] . " - Middle Name: " . $row["middle_name"]  . " - Last Name: " . $row["last_name"] . " - Gender: " . $row["gender"] . " - Email: " . $row["email"] . " - Phone: " . $row["numbers"] "<br>";
		}

$sql = ("SELECT name, member, rate, bl_Number, ag_Street, ag_City, ag_State, ag_Zip, ag_Email, ag_Phone FROM Band WHERE bandId = '$BandID'");
 $result = $conn->query($sql)
 if ($result->num_rows > 0) {
// output data of each row
        while($row = $result->fetch_assoc()) {
                echo "Band Name: " . $row["name"] . " - Band Member: " . $row["member"]  . " - Rate of Pay: " . $row["rate"] . " - Band Leader Contact: " . $row["bl_Number"] . " - Agent Street: " . $row["ag_Street"] . " - Agent City: " . $row["ag_City"] . " - Agent State: " . $row["ag_State"] . " - Agent Zip Code: " . $row["ag_Zip"] . " - Agent Email: " $row["ag_Email"] "<br>";
                }
-->


<?php include 'footer.php'; ?>
