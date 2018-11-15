<?php include 'header_logout.php'; ?>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $StartDate = trim($_POST['StartDate']);
        $EndDate = trim($_POST['EndDate']);
        $status = trim($_POST['status']);

        $type = trim($_POST['type']);

        if ($type == "detailed")
        {

            $valuesToInclude = array(); 
            $thToInclude = array(); 

            if (isset($_POST['eventId?']))
            {
                $valuesToInclude[] = "eventId";
                $thToInclude[] = "Event Id";
            }
            if (isset($_POST['status?']))
            {
                $valuesToInclude[] = "status";
                $thToInclude[] = "Status";
            }
            if (isset($_POST['capacity?']))
            {
                $valuesToInclude[] = "capacity";
                $thToInclude[] = "Capacity";
            }
            if(isset($_POST['ticketsSold?']))
            {
                $valuesToInclude[] = "tickets_sold";
                $thToInclude[] = "Tickets Sold";
            }
            if(isset($_POST['profit?']))
            {
                $valuesToInclude[] = "CONCAT('$', ROUND(tickets*tickets_sold*.70))";
                $thToInclude[] = "Current Revenue";
            }

            $stringToInclude = "";

            for($x = 0; $x <= count($valuesToInclude) - 1; $x++)
            {
                if($x == count($valuesToInclude))
                {
                    $stringToInclude .= $valuesToInclude[$x];
                }
                else if ($x == count($valuesToInclude) - 1)
                {
                    $stringToInclude .= $valuesToInclude[$x];
                }
                else  
                {
                    $stringToInclude .= $valuesToInclude[$x];
                    $stringToInclude .= ", ";
                }
            }


            $dateRange = "SELECT  " . $stringToInclude . " FROM Event WHERE str_Date >= '" . $StartDate . "' and end_Date <= '" . $EndDate . "' ORDER BY status='" . $status . "' DESC;";
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
                                              ';
                                              foreach($thToInclude as $includeThis):
                                                  echo'<th scope="col">' . $includeThis . '</th>';
                                              endforeach;

echo'
                                            </tr>
                                      </thead>
                                      <tbody class="record_table">
            ';

                                            foreach($eventRows as $row):
                                                echo '
                                                <tr>'
                                                . '<th scope="row">' . $counter . '</th>';
                                                foreach($valuesToInclude as $otherIncludeThis):
                                                        echo '<td>' . $row[$otherIncludeThis] . '</td>';
                                                endforeach;
                                                echo '</tr>';
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
        else if ($type == "summary")
        {

            $dateRange = "SELECT * FROM Event WHERE str_Date >= '" . $StartDate . "' and end_Date <= '" . $EndDate . "' and status='" . $status . "';";
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
                                              <th scope="col">Status</th>
                                              <th scope="col">Capacity</th>
                                              <th scope="col">Tickets Sold</th>
                                              <th scope="col">Current Revenue</th>
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
                                            .     '<td>' . $row['status'] . '</td>'
                                            .     '<td>' . $row['capacity'] . '</td>'
                                            .     '<td>' . $row['tickets_sold'] . '</td>'
                                            .     '<td>$' . $row['tickets_sold']*$row['tickets']*.70 . '</td>' .
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
