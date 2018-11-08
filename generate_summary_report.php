<?php include 'header.php'; ?>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>Generate Event Status Report</h1>
                        <hr>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <form method="post" action="phil_gen_report.php">
                    <div class="row">
                        <div class="col-3">
                            <div class="boxify">
                                <div class="form-group">
                                    <label for="date">Start Date</label>
                                    <div class="input-group mb-3">
                                      <input type="text" name="StartDate" class="form-control" id="datepicker1" >
                                      <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar"></i></span>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="boxify">
                                <div class="form-group">
                                    <label for="date">End Date</label>
                                    <div class="input-group mb-3">
                                      <input type="text" name="EndDate" class="form-control" id="datepicker2" >
                                      <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar"></i></span>
                                      </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="boxify">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Filter by Status</label>
                                    <select required class="form-control" name="status">
                                        <option value="">Please select an option</option>
                                        <option value="Created">Created</option>
                                        <option value="Approved">Approved</option>
                                        <option value="Advertised">Advertised</option>
                                        <option value="Sold Out">Sold Out</option>
                                        <option value="Canceled">Canceled</option>
                                        <option value="Completed">Completed</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="boxify">
                    <div class="row">
                        <div class="col-12">
                            <h2>Submit Form & Generate Report</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group">
                                <a href="generate_summary_report.php" class="btn btn-danger" style="width: 100%;">Cancel</a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group">
                                <button type="create" class="btn btn-success" style="width: 100%;">Create</button>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group">
                                <a href="javascript:window.print()" class="btn btn-secondary" style="width: 100%;">Print <i class="fa fa-print"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php include 'footer.php'; ?>
