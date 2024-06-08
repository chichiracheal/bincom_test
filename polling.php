<?php

 require_once "partials/header.php";
 require_once "classes/Admin.php";

//  $pu = new Admin;
//  $polling_unit = $pu->get_pollingunits();
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
            <div class="row">
            <h2 class="text-center my-5 text-success">Delta State Polling Units Results</h2>

           
                <div class="col-md-12 mb-5">
                    <div class="card h-100">
                        
                        <div class="card-body">
                        <div class="col-md-7">
                            <form action="" method="get">
                        <div class="input-group mb-3">
                        <input type="text" class="form-control" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" placeholder="Search polling unit" >
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-success" >Search</button>
                        </div>
                        </div>
            </form>
            </div>
            </div>
            </div>
                        </div>
                <div class="col-md-12 mb-5">
                    <div class="card mt-4">
                   
                        <div class="card-body px-5">
                           <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>POLLING UNIT</th>
                                    <th>PARTY</th>
                                    <th>RESULT</th>
                                    <th>DATE</th>

                                </tr>
            </thead>
            <tbody>
            <?php
          $con = mysqli_connect("localhost","root","","bimcom_test");
            if(isset($_GET['search'])){
                $value = $_GET['search'];
                $query = "SELECT * FROM polling_unit JOIN announced_pu_results ON uniqueid=polling_unit_uniqueid WHERE CONCAT(polling_unit_name) LIKE '%$value%'";
                $sql_run = mysqli_query($con, $query);

                if(mysqli_num_rows($sql_run) > 0){
                    foreach($sql_run as $pu){
                        ?>
                        <tr>
                <td><?php echo $pu['result_id'];  ?></td>
                <td><?php echo $pu['polling_unit_name'];  ?></td>
                <td><?php echo $pu['party_abbreviation'];  ?></td>
                <td><?php echo $pu['party_score'];  ?></td>
                <td><?php echo $pu['date_entered'];  ?></td>
                
            </tr>

                        <?php
                    }
                }else{
                    ?>
                    <tr>
                <td colspan="5">No Record Found</td>
            </tr>
                    <?php
                }
            }
              ?>
            
            </tbody>
            </table>
                        </div>
                        
                    </div>
                </div>
                <?php
          
        ?>
                
           
        </div>
       <?php
    require_once "partials/footer.php";

?>