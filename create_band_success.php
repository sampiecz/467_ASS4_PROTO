
<?php include 'header.php'; ?>


        
        <?php
                $band_Name = trim($_POST['name']);
                $band_Members = trim($_POST['members']);
                $pay_Rate = trim($_POST['rate']);
                $special_Notes = trim($_POST['notes']);
                $band_Lead_Number = trim($_POST['bl_Number']);
                $agent_Street = trim($_POST['ag_Street']);
                $agent_City = trim($_POST['ag_City']);
                $agent_State = trim($_POST['ag_State']);
                $agent_Zip_Code = trim($_POST['ag_ZipCode']);
                $agent_Email = trim($_POST['ag_Email']);
                $agent_Phone = trim($_POST['ag_Phone']);

                if($_SERVER['REQUEST_METHOD'] == 'POST')
                { 
$q = "INSERT INTO Band (name, member, rate, notes, bl_Number, ag_Street, ag_City, ag_State, ag_Zip, ag_Email, ag_Phone) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
$query = $pdo->prepare($q); 
$results = $query->execute(array($band_Name, $band_Members, $pay_Rate, $special_Notes, $band_Lead_Number, $agent_Street, $agent_City, $agent_State, $agent_Zip_Code, $agent_Email, $agent_Phone));
                }
        ?>
