<?php include 'header_logout.php'; ?>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $StartDate = trim($_POST['StartDate']);
        $EndDate = trim($_POST['EndDate']);
        $status = trim($_POST['status']);
        $dateRange = "SELECT * FROM Event WHERE str_Date >= '" . $StartDate . "' and end_Date <= '" . $EndDate . "' ORDER BY status='" . $status . "' DESC;";
        $getEvents = $pdo->query($dateRange);
        $eventRows = $getEvents->fetchAll();

        echo'
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>Summary Report</h1>
                        <hr>
                    </div>
                </div>
            </div>
        </section>
        
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="boxify" style="padding: 0px;">
            ';

            
            $counter = 1;

            echo'
                                <table class="table" style="margin-top: 0px; margin-bottom: 0px;">
                                  <thead class="thead-light">
                                        <tr>
                                          <th scope="col">#</th>
                                          <th scope="col">Name</th>
                                          <th scope="col">Start Date</th>
                                          <th scope="col">End Date</th>
                                          <th scope="col">Location</th>
                                          <th scope="col">Status</th>
                                          <th scope="col">Capacity</th>
                                          <th scope="col">Event Manager</th>
                                          <th scope="col">Notes</th>
                                        </tr>
                                  </thead>
                                  <tbody class="record_table">
        ';
                                        foreach($eventRows as $row):

                                            $managerSql = "SELECT * FROM Manager WHERE managerId = " . $row['managerId'] . " LIMIT 1;";
                                            $getManagers = $pdo->query($managerSql);
                                            $managerRow = $getManagers->fetch();

                                            echo '
                                        <tr>'
                                        .  '<th scope="row">' . $counter . '</th>'
                                        .     '<td>' . $row['name'] . '</td>'
                                        .     '<td>' . $row['str_Date'] . '</td>'
                                        .     '<td>' . $row['end_Date'] . '</td>'
                                        .     '<td>' . $row['street'] . ' ' . $row['city'] . ' ' . $row['state'] . ' ' . $row['zip'] . '</td>'
                                        .     '<td>' . $row['status'] . '</td>'
                                        .     '<td>' . $row['capacity'] . '</td>'
                                        .     '<td>' . $managerRow['managerName'] . '</td>'
                                        .     '<td>' . $row['notes'] . '</td>' .
                                       '</tr>';
                                            $counter++;
                                        endforeach;

            echo'
                                  </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="boxify">
                                <h2 style="text-align: center;">Print Report</h2>
                                <div class="form-group">
<p style="text-align: center;">
                                    <a href="javascript:window.print()" style="width: 125px;" class="btn btn-secondary" >Print <i class="fa fa-print"></i></a>
</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </div>
        </section>
';

    }
    else
    {
    echo'
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>Summary Report</h1>
                        <hr>
                    </div>
                </div>
            </div>
        </section>
        
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                    <p style="text-align: center;">
                        <a href="generate_summary_report.php" class="btn btn-primary">Go to generate summary report</a>
                    </p>
                    </div>
                </div>
            </div>
        </section>
';
    }
?>

<?php include 'footer.php'; ?>
