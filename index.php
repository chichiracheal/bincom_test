<?php
 require_once "partials/header.php";

?>
       
        <div class="container px-4 px-lg-5">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-7"><img class="img-fluid rounded " src="assets/static/images/banner.jpeg" alt="..." /></div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light">2011 ELECTIONS</h1>
                    <p>This is a portal where results for the 2011 elections from different polling units, wards, and LGA's in Delta State.</p>
                    <a class="btn btn-success" href="#!">Get Started</a>
                </div>
            </div>
            <!-- Call to Action-->
            <div class="card text-white bg-warning my-5 py-4 text-center">
                <div class="card-body"><p class="text-white m-0">All results has been evaluated and well documented.</p></div>
            </div>
            <!-- Content Row-->
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Delta State Polling Units results</h2>
                            <p class="card-text"><img class="img-fluid rounded mb-4 mb-lg-0" src="assets/static/images/votcard.jpeg" alt="..." /></p>
                        </div>
                        <div class="card-footer"><a class="btn btn-success btn-sm" href="polling.php">More Info</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Delta State LGA</h2>
                            <p class="card-text"><img class="img-fluid rounded mb-4 mb-lg-0" src="assets/static/images/people.jpeg" alt="..." /></p>
                        </div>
                        <div class="card-footer"><a class="btn btn-success btn-sm" href="lga.php">More Info</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">New Results</h2>
                            <p class="card-text"><img class="img-fluid rounded mb-4 mb-lg-0" src="assets/static/images/inec.jpeg" alt="..." /></p>
                        </div>
                        <div class="card-footer"><a class="btn btn-success btn-sm" href="create.php">Update</a></div>
                    </div>
                </div>
            </div>
        </div>
       <?php
    require_once "partials/footer.php";

?>