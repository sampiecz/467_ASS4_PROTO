<?php
        

        

        // Server action for the form.
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($_POST[''] == "updateArtist" AND !empty($_POST['artistId'])) {
				$name = $_POST['firstname'];
                $middle_name = $_POST['middlename'];
				$last_name = $_POST['lastname'];
				$gender = $_POST['sex'];
                $email = $_POST['email'];
				$number = $_POST['number'];


                $updateSQL = "UPDATE `467_ASS4_PROTO`.`Artist` SET name=?, middle_name=?, last_name=?, gender=?, email=?, number=? WHERE artistId=?;";


------------------------------------------------------------------------------------------




if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($_POST[''] == "updateBand" AND !empty($_POST['bandId'])) {
				$name = $_POST['bandname'];
                $member = $_POST['member'];
				$rate = $_POST['rate'];
				$bl_number = $_POST['blnumber'];
                $email = $_POST['email'];
				$ag_Street = $_POST['agStreet'];
                $ag_City = $_POST['agCity'];
				$ag_State = $_POST['agState'];
				$ag_Zip = $_POST['agZip'];
				$ag_Email = $_POST['agEmail'];
				$ag_Phone = $_POST['agPhone'];


                $updateSQL = "UPDATE `467_ASS4_PROTO`.`Band` SET name=?, member=?, rate=?, bl_number=?, email=?, ag_Street=?, ag_City=?, ag_State=?, ag_Zip=?, ag_Email=?, ag_Phone=? WHERE bandId=?;";
						























?>
