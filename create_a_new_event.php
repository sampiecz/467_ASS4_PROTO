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
                                <h3>Artist </h3>
                                <label for="exampleFormControlInput1">Enter Artist </label>
                                <select required name="artistId" class="form-control"> ';

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
                                   <select required name="bandId" class="form-control">'; 
                                 foreach($bandRows as $row):
                                        echo '<option value="' . $row['bandId'] . '" >' . $row['name'] . '</option>';
                                        endforeach;

                               

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
                                <input type="text" class="form-control" name="status">
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Seating Capacity</label>
                                <input type="text" class="form-control" name="capacity">
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Ticket Price</label>
                                <input type="text" class="form-control" name="ticket">
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
';
 ?>

<?php include 'footer.php'; ?>
