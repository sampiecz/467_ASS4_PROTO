<?php include 'header.php'; ?>




        <?php
                $Name = trim($_POST['street']);
                $band_Members = trim($_POST['city']);
                $pay_Rate = trim($_POST['state']);
                $special_Notes = trim($_POST['zip']);
                $band_Lead_Number = trim($_POST['str_Date']);
                $agent_Street = trim($_POST['end_Date']);
                $agent_City = trim($_POST['status']);
                $agent_State = trim($_POST['capacity']);
                $agent_Zip_Code = trim($_POST['ag_ZipCode']);
                $agent_Email = trim($_POST['ag_Email']);
                $agent_Phone = trim($_POST['ag_Phone']);

                if($_SERVER['REQUEST_METHOD'] == 'POST')
                {
$q = "INSERT INTO Event (street, city, state, zip, status, capacity) VALUES (?, ?, ?, ?, ?, ?)
$query = $pdo->prepare($q);
$results = $query->execute(array($band_Name, $band_Members, $pay_Rate, $special_Notes, $band_Lead_Number, $agent_Street, $agent_City, $agent_Stat$




	     <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Successfuly created an Event.</h1>
                    <hr>
                </div>
            </div>
        </div>
    </section>

