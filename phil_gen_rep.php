<?php include 'header.php'; ?>

<?php
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

?>
