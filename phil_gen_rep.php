<?php include 'header.php'; ?>

<?php
<<<<<<< HEAD
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
//$StartDate = $_POST(['StartDate']);

//$qr = "SELECT * FROM Event WHERE str_Date= '".$StartDate."' LIMIT 0 , 1";
//$query->execute(array($StartDate));



// Read input from $_POST
$StartDate = (isset($_POST['StartDate']) ? $_POST['StartDate'] : '');

// Build query.  Properly escape input data.
$query = 
  "SELECT * " .
  "FROM Events " .
  "WHERE str_Date = '" . mysql_real_escape_string($StartDate) . "' " . 
  "LIMIT 0,1";

}
=======
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $StartDate = trim($_POST['StartDate']);
        $qr = "SELECT * FROM Event WHERE str_Date= '" .$StartDate. "' LIMIT 1";
        $getEvents = $pdo->query($qr);
        $eventRows = $getEvents->fetchAll();
>>>>>>> 28691259dca4535a77e9c828b4ba6d57b5fe9dfa

        foreach($eventRows as $row):
            echo '' . $row['name'] . '';
        endforeach;
    }
?>


"SELECT * FROM Event WHERE str_Date >= '11/06/18' and end_Date <= '11/09/18';";
