
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
