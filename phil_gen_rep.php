<?php include 'header.php'; ?>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $StartDate = trim($_POST['StartDate']);
        $qr = "SELECT * FROM Event WHERE str_Date= '" .$StartDate. "' LIMIT 1";
        $getEvents = $pdo->query($qr);
        $eventRows = $getEvents->fetchAll();

        foreach($eventRows as $row):
            echo '' . $row['name'] . '';
        endforeach;
    }
?>


"SELECT * FROM Event WHERE str_Date >= '11/06/18' and end_Date <= '11/09/18';";
