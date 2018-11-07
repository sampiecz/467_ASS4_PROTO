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
        <form method="post" action="create_a_new_event.php">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="boxify">
                            <div class="form-group">
                                <h3>Artist </h3>
                                <label for="exampleFormControlInput1">Enter Artist </label>
                                <input type="text"  class="form-control" name="name_Art">                      
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
                                <label for="exampleFormControlInput1">Start Date</label>
                                <input type="text" name="start_date" class="form-control" id="datepicker1" >
                            </div>
                             <div class="form-group">
                                 <label for="exampleFormControlInput1">End Date</label>
                                 <input type="text" name="end_date" class="form-control" id="datepicker2" >
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Status</label>
                                <select class="form-control" name="status">
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Seating Capacity</label>
                                <select class="form-control" name="capacity">
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

 <?php
               
        if($_SERVER['REQUEST_METHOD'] == 'POST')

                 $Street = trim($_POST['street']);
                $City = trim($_POST['city']);
                $State = trim($_POST['state']);
                $Zip = trim($_POST['zip']);
                $Start_Date = trim($_POST['str_Date']);
                $End_Date = trim($_POST['end_Date']);
                $Status = trim($_POST['status']);
                $Capacity = trim($_POST['capacity']);







//$a = "SELECT artistId FROM Artist WHERE first_name ="$_POST['name_Art']";";
//$b = "SELECT bandId FROM Band WHERE name ="$_POST['name_Band']";";

//$res1=$pdo->query($a);

//$res2=$pdo->query($b);


//$c = "SELECT * FROM Band;";
//$d = "SELECT * FROM Artist;";

//foreach($d as  $row)
//{
//row["bandId"];


//}


             
              
$q = "INSERT INTO Event (street, city, state, zip, str_Date, end_Date, status, capacity) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
$query = $pdo->prepare($q);
$results = $query->execute(array($Street, $City, $State, $Zip, $Start_Date, $End_Date, $Status, $Capacity));



//$q = "INSERT INTO Event (street, city, state, zip, str_Date, end_Date status, capacity,artistId,bandId) VALUES (?, ?, ?, ?, ?, ?, ?, ?,?,?);";
//$query = $pdo->prepare($q);
//$results = $query->execute(array($Street, $City, $State, $Zip, $Start_Date, $End_Date, $Status, $Capacity,$res1,$res2));





?>

<?php include 'footer.php'; ?>
