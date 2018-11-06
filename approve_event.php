<?php include 'header.php'; ?>

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
                <div class="col-12">
                        <table class="table">
                          <thead class="thead-light">
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">One</th>
                                  <th scope="col">Two</th>
                                  <th scope="col">Three</th>
                                </tr>
                          </thead>
                          <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Placeholder</td>
                                  <td>Placeholder</td>
                                  <td>Placeholder</td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>Placeholder</td>
                                  <td>Placeholder</td>
                                  <td>Placeholder</td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>Placeholder</td>
                                  <td>Placeholder</td>
                                  <td>Placeholder</td>
                                </tr>
                          </tbody>
                        </table>
                </div>
            </div>
        </div>
    </section>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<form method="post" action="">
						<div class="form-group">
							<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">Decline event</button>
							<button type="submit" class="btn btn-success">Approve event</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<!-- Modal -->
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


<?php include 'footer.php'; ?>
