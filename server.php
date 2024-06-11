<?php
require_once "classes/Admin.php";


// var_dump($_POST);
$id = array_key_first($_POST);
 $result = new Admin;
         $chk=$result->fetch_result($id);
       
       echo json_encode($chk);

?>