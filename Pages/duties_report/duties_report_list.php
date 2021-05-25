<?php
require_once "../Models/DatabaseContext.php";
require_once "../Models/Dutie.php";

// DATABASE CONNECTION
$dbcon= DatabaseContext::dbConnect();//DatabaseContext
//DUTIE MODEL
$s = new Dutie();
$Duties = $s->getAllDuties(DatabaseContext::dbConnect());
?>
<!--
Form By Journey
    !-->
    <body>
<link rel="stylesheet" href="../Stylesheets/form.css">
<link rel="stylesheet" href="../Stylesheets/reports_page.css">

<h1 class="report-title">Dutie Report list</h1>
<table class="table table-bordered tbl tbl__frg">
    <thead>
        <tr>
            <th>Duty/Qualification ID</th>
            <th>Duty/ Qualification Name</th>
            
        </tr>
    </thead>
    <tbody>

    <?php foreach ($Duties as $Dutie) { ?>
            <tr>
                <td><?= $Dutie->id; ?></td>
                <td><?= $Dutie->qualifications_category_name; ?></td>
                <!-- UPDATE/DELETE BUTTONS -->
                <td>
                    <form action="../Pages/duties_report_update.php" method="post">
                        <input type="hidden" name="id" value="<?= $Dutie->id; ?>"/>
                        <input type="submit"class="button btn btn-primary"  name="updateDutie" value="Update"/>
                    </form>
                </td>
                <td>
                    <form action="duties_report/duties_report_delete.php" method="post">
                        <input type="hidden" name="id" value="<?=  $Dutie->id; ?>"/>
                        <input type="submit"class="button btn btn-danger"  name="deleteDutie" value="Delete"/>
                    </form>
                </td>
            </tr>
        <?php } ?>
        
    </tbody>
    <a href="./duties_report_add.php" id="btn_back" class="btn btn-success float-left">Add New Duty</a>
</table>
</body>