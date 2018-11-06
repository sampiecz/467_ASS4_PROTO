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
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form method="post" action="">
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Enter event name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="John">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Enter event name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Casper">
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-success">Create event</button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

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



<?php include 'footer.php'; ?>
