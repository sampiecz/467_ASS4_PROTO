
<?php include 'header_logout.php'; ?>
        
        <?php
                $band_Name = trim($_POST['name']);
                $band_Members = trim($_POST['member']);
                $pay_Rate = trim($_POST['rate']);
                $special_Notes = trim($_POST['notes']);
                $band_Lead_Number = trim($_POST['bl_Number']);
                $agent_Street = trim($_POST['ag_Street']);
                $agent_City = trim($_POST['ag_City']);
                $agent_State = trim($_POST['ag_State']);
                $agent_Zip_Code = trim($_POST['ag_ZipCode']);
                $agent_Email = trim($_POST['ag_Email']);
                $agent_Phone = trim($_POST['ag_Phone']);

                if($_SERVER['REQUESR_METHOD'] == 'POST')
                { 
$q = "INSERT INTO Band (name, member, rate, bl_Number, ag_Street, ag_City, ag_State, ag_Zip, ag_Email, ag_Phone) VALUES (?, ?, ?)
$query = $connect->prepare($q);
$results = $query->execute(array(
":HERION" => $_POST['name'],
":Christ" => $_POST['member'],
":1000" => $_POST['rate'],
":630 555 5555" => $_POST['bl_Number'],
":Wilson Ave" => $_POST['ag_Street'],
":Chicago" => $_POST['ag_City'],
":Illinois" => $_POST['ag_State'],
":60618" => $_POST['ag_Zip'],
":agent1@whocares.com" => $_POST['ag_Email],
":630 444 4444" => $_POST['ag_Phone
));
