<?php
require_once "classes/Admin.php";


//echo $_POST['id'];
$result = new Admin;
        $chk=$result->fetch_result($_POST['id']);
?>