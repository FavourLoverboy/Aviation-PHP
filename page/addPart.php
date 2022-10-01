<div class="main-body">
    <h3 class="title">Add Air Craft</h3>

    <div class="row no-p password" style="margin-top:-5px;">
        <div class="col-xs-12 no-p box" style="height:auto;">
            <form action="addPart" method="POST">

                <div class="inner">
                    <p class="text">Part:</p>
                    <select id="c" name="name" required>
                        <option value="">Choose Part</option>
                        <?php include('listOfParts.php'); ?>
                    </select>
                </div>

                <div class="inner">
                    <p class="text">Serial No:</p>
                    <input type="text" name="sn" placeholder="Enter serial no (Option)">
                </div>

                <input type="submit" name="add" class="submit-btn" value="Add part">
            </form>
        </div>
    </div>
</div>

<?php
    if($_POST['add']){

        extract($_POST);

        $plane = time();

        $tblquery = "INSERT INTO parts VALUES(:id, :name, :sn, :date, :status)";
        $tblvalue = array(
            ':id' => null,
            ':name' => htmlspecialchars($name),
            ':sn' => htmlspecialchars($sn),
            ':date' => date("Y-m-d"),
            ':status' => '1'
        );
        $insert = $collect->tbl_insert($tblquery, $tblvalue);
        if($insert){
            echo "
                <div class='container-fluid invest-popup-notification'>
                    <div class='main-box'>
                        <div class='head'>
                            <div class='row no-p'>
                                <div class='col-xs-11'>
                                    <h4>Message</h4>
                                </div>
                                <div class='col-xs-1 close' onclick='popupInvestNotification()'>
                                    <h4><span><i class='fa fa-times' aria-hidden='true'></i></span></h4>
                                </div>
                            </div>
                        </div>
                        <div class='bottom'>
                            <div class='msg'>
                                Part has been recorded successfully.
                            </div>
                            <a class='btn' onclick='popupInvestNotification()'>Ok</a>
                        </div>
                    </div>
                </div>
            ";
        }
    }
?>
















