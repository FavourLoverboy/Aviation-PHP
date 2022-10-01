<div class="main-body">
    <h3 class="title">Add Complain</h3>

    <div class="row no-p password" style="margin-top:-5px;">
        <div class="col-xs-12 no-p box" style="height:auto;">
            <form action="issue" method="POST">

                <div class="inner">
                    <p class="text">Air Craft:</p>
                    <select name="ac" required>
                        <option value=''>Choose air craft</option>
                        <?php
                            $tblquery = "SELECT * FROM air_craft ORDER BY ata";
                            $tblvalue = array();
                            $select = $collect->tbl_select($tblquery, $tblvalue);
                            foreach($select as $data){
                                extract($data);
                                ?>
                                <?php
                                    echo "
                                        <option value='$uniqe,$ata'>$ata $cn $uniqe</option>
                                    ";
                            }
                        ?>
                    </select>
                </div>

                <div class="inner">
                    <p class="text">Status:</p>
                    <select name="status" required>
                        <option value=''>Select condition</option>
                        <option value='Bad'>Bad</option>
                        <option value='Good'>Good</option>
                    </select>
                </div>

                <div class="inner">
                    <p class="text">Narrate issue:</p>
                    <textarea name="issue" required></textarea>
                </div>

                <input type="submit" name="report" class="submit-btn" value="Add part">
            </form>
        </div>
    </div>
</div>

<?php
    if($_POST['report']){

        extract($_POST);

        $name = $_SESSION['ln'] . " " . $_SESSION['fn'];
        $details =  explode( ",", $ac, 2);
        $plane = $details[0] . " " . $details[1];

        $tblquery = "INSERT INTO issue VALUES(:id, :person, :air, :air_craft, :issue, :date, :status)";
        $tblvalue = array(
            ':id' => null,
            ':person' => htmlspecialchars($name),
            ':air' => htmlspecialchars($details[0]),
            ':air_craft' => htmlspecialchars($plane),
            ':issue' => htmlspecialchars($issue),
            ':date' => date("Y-m-d"),
            ':status' => htmlspecialchars($status)
        );
        $insert = $collect->tbl_insert($tblquery, $tblvalue);
        if($insert){

            $details =  explode( ",", $ac, 2);
            $craft = $details[0];

            if($status == 'Bad'){
                $tblquery = "UPDATE air_craft SET status = :status WHERE uniqe = '$craft'";
                $tblvalue = array(
                    ':status' => "Bad"
                );
                $update = $collect->tbl_update($tblquery, $tblvalue);
            }
            

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
                                Issue has been submitted.
                            </div>
                            <a class='btn' onclick='popupInvestNotification()'>Ok</a>
                        </div>
                    </div>
                </div>
            ";
        }
    }
?>