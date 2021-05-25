<?php 
require_once "../../Models/DatabaseContext.php";
require_once "../../Models/Award.php";
//Database connetion
if(isset($_POST['id'])){
    $id = $_POST['id'];
    // DATABASE CONNECTION

    $dbcon= DatabaseContext::dbConnect();//DatabaseContext
    // AWARD MODEL
    $s = new Award();
    $count = $s->deleteAward($id, $dbcon);

    if($count){
        header("location:../award_report_list.php");
    }else{
        echo"Problem deleting Car";
    }
}
?>