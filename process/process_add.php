<?php
error_reporting(E_ALL);
session_start();


require_once "../classes/Admin.php";
require_once "../classes/utilities.php";

    if(isset($_POST['btnupdate'])){
            $fname = sanitizer($_POST['fname']);
            $pid =sanitizer($_POST['pid']);
            $score = sanitizer($_POST['score']);
            $address = sanitizer($_POST['address']);
            $date = $_POST['date'];
            $party = $_POST['pname'];
       
            //validation
        if(!$party){
            $_SESSION['errormsg'] = "Please select a party";
            header("location:../create.php");
        }
   
    if($fname == "" || $pid == "" ||$score == "" ||$address == "" ||$date == "" ){
        $_SESSION['errormsg'] = '<div class="alert alert-danger" Please fill all fields</div>';
        header("location:../create.php");
        exit();
    }else{
        $result = new Admin;
        $chk=$result->add_newresult($fname,$pid,$score,$address,$date,$party);

        if($chk){
            header("location:../index.php");
            exit();
        }else{
            header("location:../create.php");
        }
    }
}else{
    $_SESSION['errormsg'] = "Please complete the form";
    header("location:../create.php");
    exit();
}

?>