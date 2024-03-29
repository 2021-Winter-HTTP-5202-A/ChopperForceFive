<?php 
require_once "../Models/DatabaseContext.php";
require_once "../Models/Award.php";
require_once "../Library/form-functions.php";

$user_id=$recommender=$award2=$reason=$present=$days=$remarks="";
//CONNECT TO AWARDS MODEL
 $s2 = new Award();
 $user_id2 = $s2->getUsers(DatabaseContext::dbConnect());
// PULLS INFORMATION CURRENTLY FROM DATABASE AND MAKES VISIBLE AS PLACEHOLDERS
if(isset($_POST['updateAward'])){
    $id= $_POST['id'];
    // var_dump($id);
    $dbcon= DatabaseContext::dbConnect();

    $s = new Award();
    $award = $s->getAwardsById($id, $dbcon);
    var_dump($award);
    $user_id=$award->user_id;
    $recommender=$award->recommender;
    $award2=$award->award;
    $reason=$award->reason;
    $present=$award->present;
    $days=$award->days;
    $remarks=$award->remarks;
}
// UPDATES BY ID
if(isset($_POST['updAward'])){
    $id=$_POST['sid'];
    var_dump($_POST);
    $user_id=$_POST['user_id'];
    $recommender=$_POST['recommender'];
    $award2=$_POST['award'];
    $reason=$_POST['reason'];
    $present=$_POST['present'];
    $days=$_POST['days'];
    $remarks=$_POST['remarks'];

    $dbcon= DatabaseContext::dbConnect();
    $s = new Award();
    $count = $s->updateAward($id,$user_id,$recommender,$award2,$reason,$present,$days,$remarks,$dbcon);

    if($count){
        // header("location:list-cars.php");
    }else{
        echo"Problem updating car";
    }


}
?>


<html lang="en">
<h1 style="color:white;">Update Award </h1>
<head>
    <title>Add Award</title>
    
</head>

<body>

<!-- <div>
       Form to Add  award -->
    <form action="" method="POST">

   
        <input type="hidden" name="sid" value="<?= $id; ?>" />
        <div class="form-group">
            <label class = "label label-default" for="user_id">user_id :</label>
      <!-- SOLDIER DROP DOWN -->

            <select  class="form-control" name="user_id" id="user_id" value="">
                <?php echo PopulateDropwdownSoldier($user_id2) ?>
           </select>
        </div>
        <div class="form-group">
            <label class = "label label-default" for="recommender"class="report-title">recommender :</label>
            <input type="text" name="recommender" value="<?= $recommender; ?>" class="form-control"
                   id="recommender" placeholder="Enter recommender">
            <span style="color: red">

            </span>
        </div>
        <div class="form-group">
            <label class = "label label-default" for="award"class="report-title">Award :</label>
            <input type="text" name="award" value="<?= $award2; ?>" class="form-control"
                   id="award" placeholder="Enter Award">
            <span style="color: red">

            </span>
        </div>
        <div class="form-group">
            <label class = "label label-default" for="reason"class="report-title">Reason :</label>
            <input type="text" name="reason" value="<?= $reason; ?>" class="form-control"
                   id="reason" placeholder="Enter Reason">
            <span style="color: red">

            </span>
        </div>
        <div class="form-group">
            <label class = "label label-default" for="present"class="report-title">Present :</label>
            <input type="text" name="present" value="<?= $present; ?>" class="form-control"
                   id="present">
            <span style="color: red">

            </span>
        </div>
        <div class="form-group">
            <label class = "label label-default" for="days"class="report-title">Days :</label>
            <input type="date" name="days" value="<?= $days; ?>" class="form-control"
                   id="days">
            <span style="color: red">

            </span>
        </div>
        <div class="form-group">
            <label class = "label label-default" for="remarks"class="report-title">Remarks :</label>
            <input type="text" name="remarks" value="<?= $remarks; ?>" class="form-control"
                   id="remarks">
            <span style="color: red">

            </span>
        </div>
        <!-- SUBMIT/BACK BUTTONS -->
        <a href="award_report_list.php" id="btn_back" class="btn btn-success float-left">Back</a>
        <button type="submit" name="updAward"
                class="btn btn-primary float-right" id="btn-submit">
            Update Award
        </button>
    </form>
</div> 


</body>
</html>

