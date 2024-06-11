<?php
session_start();
require_once "classes/Admin.php";
 require_once "partials/header.php";

 $party = new Admin;
  $partys = $party->fetch_party();
  $wards = $party->fetch_ward();
  $lgas = $party->fetch_lga();
?>
       
        <div class="container px-4 px-lg-5">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-7"><img class="img-fluid rounded " src="assets/static/images/bvas.jpeg" alt="..." /></div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light">2011 ELECTIONS</h1>
                    <p>This is a portal where results for the 2011 elections from different polling units, wards, and LGA's in Delta State.</p>
                    <a class="btn btn-success" href="#create">Get Started</a>
                </div>
            </div>

            <!-- form -->
            <div class="container col-md-12 px-4 py-5" >
 
 
 <!-- content begins -->   

<h1 class="h3 mb-3 text-center">INEC 2011 <br> Add New Result</h1>
<?php
if(isset($_SESSION['errormsg'])){
 echo "<div class='alert alert-danger'>".$_SESSION['errormsg']."</div>";
 unset($_SESSION['errormsg']);
}

?>

            <form action="process/process_add.php" method="post" id="create">   
<div class="form-group row mb-3">
  <div class="col-md-6">
    <div class="form-floating">
      <input type="text" name="fname" class="form-control" id="floatingfname" placeholder="Username">
      <label for="floatingfname">Entered_by_user</label>
    </div>
   </div>
   <div class="col-md-6">
    <div class="form-floating">
      <input type="text" name="pollname" class="form-control" id="pollname" placeholder="Enter Polling unit name">
      <label for="pollname">Enter Polling unit name</label>
    </div>
   </div>
   <div class="form-floating mb-3">
      <input type="number" name="pid" class="form-control" id="pid" placeholder="Enter score">
      <label for="score">polling_unit_id</label>
    </div>
   <div class="col-md-12 mb-3">
        <label for="lga">LGA</label>
        <select name="lga" id="lga" class="form-control border-success noround">
          <option value="">Select One</option>
           <?php

foreach($lgas as $lga){
  $lganame = $lga["lga_name"];
  $lgaid = $w["lga_id"];

  echo "<option value='$lgaid'>$lganame</option>";

}

?>
           </select>
    
    </div>
<div class="col-md-12 mb-3">
        <label for="wname">Ward</label>
        <select name="wname" id="wname" class="form-control border-success noround">
          <option value="">Select One</option>
           <?php

foreach($wards as $w){
  $wardname = $w["ward_name"];
  $wardid = $w["ward_id"];

  echo "<option value='$wardid'>$wardname</option>";

}

?>
           </select>
    
    </div>
<div class="col-md-12 mb-3">
        <label for="pname">Party Name</label>
        <select name="pname" id="pname" class="form-control border-success noround">
          <option value="">Select One</option>
           <?php

foreach($partys as $p){
  $partyname = $p["partyname"];
  $partyid = $p["partyid"];

  echo "<option value='$partyid'>$partyname</option>";

}

?>
           </select>
    
    </div>
    <div class="form-floating mb-3">
      <input type="number" name="score" class="form-control" id="score" placeholder="Enter score">
      <label for="score">Party_score</label>
    </div>
    <div class="form-floating mb-3">
      <input type="number" name="address" class="form-control" id="address" placeholder="Enter your ip_address">
      <label for="address">User_ip_address</label>
    </div>
    <div class="form-group col-md-4 mt-4" id="add">
                  <label for="date"> Date</label>
                      <input type="datetime-local" name="date" id="date" value="" placeholder="date" class="form-control border-success noround">
                      
                  </div>
     
    <button class="w-100 btn btn-lg btn-dark noround my-5" type="submit" name="btnupdate" value="update" >Update Result</button>
    <div class="form-floating">
      
     
    </div>
    
  </form>


       <?php
    require_once "partials/footer.php";

?>