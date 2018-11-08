<?php include 'header.php'; ?>

<?php 
    echo'
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Approve an event</h1>
                    <hr>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <form action="approve_event.php" method="POST">
                    <div class="col-12">
        ';

        $sql = "SELECT * FROM Event;";
        $getEvents = $pdo->query($sql);
        $eventRows = $getEvents->fetchAll();
        $counter = 1;

        echo'
                            <table class="table boxify">
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
                                      <th scope="col">Select Event</th>
                                    </tr>
                              </thead>
                              <tbody class="record_table">
    ';
                                    foreach($eventRows as $row):
                                        echo '
                                    <tr>'
                                    .  '<th scope="row">' . $counter . '</th>'
                                    .     '<td>' . $row['name'] . '</td>'
                                    .     '<td>' . $row['str_Date'] . '</td>'
                                    .     '<td>' . $row['end_Date'] . '</td>'
                                    .     '<td>' . $row['street'] . ' ' . $row['city'] . ' ' . $row['state'] . ' ' . $row['zip'] . '</td>'
                                    .     '<td>' . $row['status'] . '</td>'
                                    .     '<td>' . $row['capacity'] . '</td>'
                                    .     '<td>' . $row['event_Manager'] . '</td>'
                                    .     '<td>' . $row['notes'] . '</td>'
                                    .     '<td><input value="' . $row['eventId'] . '" class="form-control" type="checkbox" /></td>' .
                                   '</tr>';
                                    endforeach;

        echo'
                                    <tr>
                                      <th scope="row">1</th>
                                      <td>Placeholder</td>
                                      <td>Placeholder</td>
                                      <td>Placeholder</td>
                                      <td>Placeholder</td>
                                      <td>Placeholder</td>
                                      <td>Placeholder</td>
                                      <td>Placeholder</td>
                                      <td>Placeholder</td>
                                      <td><input class="form-control" type="checkbox" /></td>
                                    </tr>
                              </tbody>
                            </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">Decline event</button>
                            <button type="submit" class="btn btn-success">Approve event</button>
                        </div>
                    </div>
                </div>
            </form>
		</div>
	</section>

	<!-- Start Modal -->
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalCenterTitle">Are you sure?</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<p>Are you sure you want to decline the event?</p>
			<p>This action can not be reversed.</p>
		  </div>
		  <div class="modal-footer">
			<form method="post" action="">
				<div class="form-group">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="decline" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">Decline event</button>
				</div>
			</form>
		  </div>
		</div>
	  </div>
	</div>
	<!-- End Modal -->
';

?>

<?php include 'footer.php'; ?>
