<?php
/* //Here for debugging purposes
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);*/

$db = DatabaseContext::dbConnect();
$soldier_id = $_GET["id"];

$updated_soldier = new User();
$selected_soldier = $updated_soldier->getUserById($soldier_id, $db);

if (isset($_POST["updateConfirm"])) {
    //Might change this to entering details into the class directly

    $response = $updated_soldier->updateUser($_POST['id'],$_POST['mos'],$_POST['rank'],$_POST['first_name'],$_POST['last_name'], $_POST['ssn'],$_POST['dod_id'],$_POST['dob'],$_POST['blood_type'],$_POST['address'], $db);
    if($response) {
        ?><script>window.location.href = "./personnel_report.php";</script><?php //Redirect to list after a successful update
    }
}
?>
<div class="container">
    <h2 class="report-title">Personnel Report - Update</h2>
    <form method="POST" name="personnel-update" action="">
    <input type="hidden" name="id" value="<?=$soldier_id?>">
        <div class="form-row">
          <div class="form-group col-md-6">
                <label class="label label-default" for="personnel-update_MOS">MOS:</label>
                <input type="text" class="form-control" id="personnel-update_MOS" placeholder="MOS" name="mos" value="<?=$selected_soldier->mos?>">
          </div>
          <div class="form-group col-md-6">
                <label class="label label-default" for="personnel-update_Rank">Rank:</label>
                <input type="text" class="form-control" id="personnel-update_Rank" name="rank" placeholder="Rank" value="<?=$selected_soldier->rank?>">
          </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label class="label label-default" for="personnel-update_fName">First Name:</label>
                <input type="text" class="form-control" id="personnel-update_fName" name="first_name" placeholder="First Name" value="<?=$selected_soldier->first_name?>">
            </div>
            <div class="form-group col-md-6">
                <label class="label label-default" for="personnel-update_lName">Last Name:</label>
                <input type="text" class="form-control" id="personnel-update_lName" name="last_name" placeholder="Last Name" value="<?=$selected_soldier->last_name?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label class="label label-default" for="personnel-update_SSN">SSN:</label>
                <input type="text" class="form-control" id="personnel-update_SSN" name="ssn" placeholder="SSN" value="<?=$selected_soldier->ssn?>">
            </div>
            <div class="form-group col-md-6">
                <label class="label label-default" for="personnel-update_DOD">DOD:</label>
                <input type="text" class="form-control" id="personnel-update_DOD" name="dod_id" placeholder="DOD" value="<?=$selected_soldier->dod_id?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label class="label label-default" for="personnel-update_DOB">Date of Birth:</label>
                <input type="text" class="form-control" id="personnel-update_DOB" name="dob" placeholder="DOB" value="<?=$selected_soldier->dob?>">
            </div>
            <div class="form-group col-md-6">
                <label class="label label-default" for="personnel-update_BloodType">Blood Group:</label>
                <input type="text" class="form-control" id="personnel-update_BloodType" name="blood_type" placeholder="Blood Group" value="<?=$selected_soldier->blood_type?>">
            </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label class="label label-default" for="personnel-update_Address">Address:</label>
            <input type="text" class="form-control" id="personnel-update_Address" name="address" placeholder="Address" value="<?=$selected_soldier->address?>">
          </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-8">
                <input type="submit" value="Update" name="updateConfirm" class="btn btn-success col-md-12">
            </div>
            <div class="form-group col-md-4">
                <a href="./personnel_report.php" class="btn btn-primary col-md-12" >Go Back</a>
            </div>
        </div>
    </form>
</div>