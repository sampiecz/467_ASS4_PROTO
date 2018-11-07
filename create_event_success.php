<?php include 'header.php'; ?>




        <?php
                $Street = trim($_POST['street']);
                $City = trim($_POST['city']);
                $State = trim($_POST['state']);
                $Zip = trim($_POST['zip']);
                $Start_Date = trim($_POST['str_Date']);
                $End_Date = trim($_POST['end_Date']);
                $Status = trim($_POST['status']);
                $Capacity = trim($_POST['capacity']);

$a = "SELECT artistId FROM Artist WHERE first_name =$_POST[name_Art];";
$b = "SELECT bandId FROM Band WHERE name =$_POST[name_Band];";

$res1=$pdo->query($a);

$res2=$pdo->query($b);


//$c = "SELECT * FROM Band;";
//$d = "SELECT * FROM Artist;";

//foreach($d as  $row)
//{
//row["bandId"];


//}


              if($_SERVER['REQUEST_METHOD'] == 'POST')
                {
$q = "INSERT INTO Event (street, city, state, zip, str_Date, end_Date status, capacity,artistId,bandId) VALUES (?, ?, ?, ?, ?, ?, ?, ?,?,?);";
$query = $pdo->prepare($q);
$results = $query->execute(array($Street, $City, $State, $Zip, $Start_Date, $End_Date, $Status, $Capacity,$res1,$res2));

                }
?>



