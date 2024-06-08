<?php
session_start();
require_once "classes/Admin.php";
 require_once "partials/header.php";

 $lga = new Admin;
  $lgas = $lga->fetch_lga();
?>
       
        <div class="container px-4 px-lg-5">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
            <?php
                if(isset($_SESSION['errormsg'])){
                echo "<div class='alert alert-danger'>".$_SESSION['errormsg']."</div>";
                unset($_SESSION['errormsg']);
                }

                ?>
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
            <div class="row ">
                <div class="col-md-12 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                        <div class="col-md-7">
                            <form action="" method="post">
                        <div class="input-group mb-3">
                        
         <label for="pname" class="px-4">LGA</label>
        <select name="pname" id="lgaid" class="form-control border-success noround" onchange="showres()">
          <option value="">Select Lga</option>
           <?php

                    foreach($lgas as $lga){
                    $lganame = $lga["lga_name"];
                    $lgaid = $lga["lga_id"];

                    echo "<option value='$lgaid'>$lganame</option>";

                    }

?>
           </select>
                       
                        </div>
            </form>
            </div></div>
                        
                    </div>
                </div>
                <div class="col-md-12 mb-5">
                    <div class="card mt-4">
                   
                        <div class="card-body px-5">
                           <table class="table table-bordered">
                            <thead>
                                <tr>
                                 
                                    <th>TOTAL PU RESULT</th>
                                    

                                </tr>
            </thead>
            <tbody>
            
                        <tr>
                
                <td> <div id="hello"></div></td>
                
                
            </tr>

                  
                   
                
            
            </tbody>
            </table>
                        </div>
                        
                    </div>
                </div>
                <?php
          
        ?>
            </div>
        </div>

        <script>
			function showres(){
   let id = document.getElementById("lgaid").value;
//    alert(id);

$.ajax({
                    url: "server.php",
                    method: "post",
                    data: 'id='+ id,
                    dataType: "text",
                    success: function(res){
                      

                    //    if(res.success==true){
                    //     $("#hello").addClass("alert");
                    //     $("#hello").removeClass("alert-danger");
                    //     $("#hello").addClass("alert-success");
                    //     $("#hello").html(res.party_score);
                       alert(res);
                    //    }else{
                    //     $("#hello").addClass("alert");
                    //     $("#hello").removeClass("alert-success");
                    //     $("#hello").addClass("alert-danger");
                    //     $("#hello").html(res.party_score);

                    //    }
                    }
                })
}
		</script>
       <?php
    require_once "partials/footer.php";

?>