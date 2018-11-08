<?php include 'header.php'; ?>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
$StartDate = $_POST(['StartDate']);

$qr = "SELECT * FROM Event WHERE str_Date= '".$StartDate."' LIMIT 0 , 1";
$query->execute(array($StartDate));
}

?>
