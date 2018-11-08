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

<?php


        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
                $Name = trim($_POST['name']);
                $Street = trim($_POST['street']);
                $City = trim($_POST['city']);
                $State = trim($_POST['state']);
                $Zip = trim($_POST['zip']);
                $Start_Date = trim($_POST['str_Date']);
                $End_Date = trim($_POST['end_Date']);
                $Status = trim($_POST['status']);
                $Capacity = trim($_POST['capacity']);
                $ArtistId = trim($_POST['artistId']);
                $BandId = trim($_POST['bandId']);
                $ManagerId = trim($_POST['managerId']);
                $Notes = trim($_POST['notes']);
                $Tickets = trim($_POST['tickets']);

                $q = "INSERT INTO Event (name, street, city, state, zip, str_Date, end_Date, status, capacity, artistId, bandId, managerId, notes, tickets) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
                $query = $pdo->prepare($q);
                $results = $query->execute(array($Name, $Street, $City, $State, $Zip, $Start_Date, $End_Date, $Status, $Capacity, $ArtistId, $BandId, $ManagerId, $Notes, $Tickets));

            echo'
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <p>Event created successfully.</p> 
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

$getArtistSql = "SELECT * FROM Artist;";
$getArtistSqlPDO = $pdo->query($getArtistSql);
$artistRows = $getArtistSqlPDO->fetchAll();

echo '
    <section>
        <form method="post" action="create_a_new_event.php">
          <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="boxify">
                            <div class="form-group">
                                <h3>Event Name</h3>
                                <label for="exampleFormControlInput1">Enter Event Name</label>
                                <input required name="name" class="form-control" />
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="boxify">
                            <div class="form-group">
                                <h3>Artist </h3>
                                <label for="exampleFormControlInput1">Enter Artist </label>
                                <select required  name="artistId" class="form-control">
                                   <option value="">Please select an option</option>
';

                                foreach($artistRows as $row):
                                        echo '<option value="' . $row['artistId'] . '" >' . $row['first_name'] . '</option>';
                                endforeach;


$getBandSql = "SELECT * FROM Band;";
$getBandSqlPDO = $pdo->query($getBandSql);
$bandRows = $getBandSqlPDO->fetchAll();

                                echo '

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
                                   <select required  name="bandId" class="form-control">
                                       <option value="">Please select an option</option>
'; 
                                 foreach($bandRows as $row):
                                        echo '<option value="' . $row['bandId'] . '" >' . $row['name'] . '</option>';
                                        endforeach;


$getManagerSql = "SELECT * FROM Manager;";
$getManagerSqlPDO = $pdo->query($getManagerSql);
$managerRows = $getManagerSqlPDO->fetchAll();
                               
                        echo '

                              </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="boxify">
                            <div class="form-group">
                                <h3>Event Manager</h3>
                                <label for="exampleFormControlInput1">Enter event name</label>
                                <select required  name="managerId" class="form-control">
                                    <option value="">Please select an option</option>
';

                                  foreach($managerRows as $row):
                                        echo '<option value="' . $row['managerId'] . '" >' . $row['managerName'] . '</option>';
                                        endforeach;
                
                        echo '
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
                                <input required type="text" class="form-control" name="street" >
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">City</label>
                                <input required type="text" class="form-control" name="city" >
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">State</label>
                                <select required class="form-control" name="state">
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
                                <label for="exampleFormControlInput1">Zip Code</label>
                                <input required type="text" class="form-control" name="zip" >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="boxify">
                            <div class="form-group">
                                <h3>Event Date</h3>
                                <label for="exampleFormControlInput1">Start Date</label>
                                <input required type="text" name="str_Date" class="form-control" id="datepicker1" >
                            </div>
                             <div class="form-group">
                                 <label for="exampleFormControlInput1">End Date</label>
                                 <input required type="text" name="end_Date" class="form-control" id="datepicker2" >
                            </div>
                             <div class="form-group">
                                 <label for="exampleFormControlInput1">Time</label>
                                 <input required type="text" name="time" class="form-control" id="time" >
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Status</label>
				<select required class="form-control" name="status">
                    <option value="">Please select an option</option>
					<option>Created</option>
					<option>Approved</option>
					<option>Advertised</option>
					<option>Sold Out</option>
					<option>Canceled</option>
					<option>Completed</option>
			        </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Seating Capacity</label>
                                <input required type="text" class="form-control" name="capacity">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Ticket Price</label>
                                <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">$</span>
                                  </div>
                                  <input required type="text" class="form-control" name="tickets">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="boxify">
                            <div class="form-group">
                                <h3>Special Notes</h3>
                                <label for="exampleFormControlInput1">Special Notes</label>
                                <input required type="text" name="notes" class="form-control" >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
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
';
 ?>

<?php include 'footer.php'; ?>
