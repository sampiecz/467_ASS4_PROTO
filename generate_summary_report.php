<?php include 'header.php'; ?>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>Generate Summary Report</h1>
                        <hr>
                    </div>
                </div>
        </section>

        <section>
            <div class="container">
                <form method="post" action="">
                    <div class="row">
                        <div class="col-6">
                            <div class="boxify">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Filter by Date</label>
                                    <!-- Make this a calendar date picker -->
                                    <input type="text" class="form-control" id="exampleFormControlInput1" >
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="boxify">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Filter by Status</label>
                                    <!-- Make this a calendar date picker -->
                                    <select class="form-control">
                                        <option>1</option>
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
                                <button type="cancel" class="btn btn-danger" style="width: 100%;">Cancel</button>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group">
                                <button type="create" class="btn btn-success" style="width: 100%;">Create</button>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group">
                                <button type="create" class="btn btn-secondary" style="width: 100%;">Print <i class="fa fa-print"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php include 'footer.php'; ?>
