<?php
    if($_POST['fix']){

        extract($_POST);

        $tblquery = "UPDATE expire SET con = :con, date = :date, status = :status WHERE id = '$id'";
        $tblvalue = array(
            ':con' => "Checked",
            ':date' => date('Y-m-d'),
            ':status' => "Good"
        );
        // print_r($tblvalue);
        $update = $collect->tbl_update($tblquery, $tblvalue);
        if($update){
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
                                This aircraft part has been changed.
                            </div>
                            <a class='btn' onclick='popupInvestNotification()'>Ok</a>
                        </div>
                    </div>
                </div>
            ";
        }else{
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
                                Something went wrong, please try again later.
                            </div>
                            <a class='btn' onclick='popupInvestNotification()'>Ok</a>
                        </div>
                    </div>
                </div>
            ";
        }
        if($update){
            $tblquery = "SELECT * FROM expire WHERE air_craft = '$air' ORDER BY con";
            $tblvalue = array();
            // print_r($tblquery);
            $select = $collect->tbl_select($tblquery, $tblvalue);
            foreach($select as $data){
                extract($data);
                ?>
                <?php
                    if($con == 'Bad'){
                        echo '<script> window.location="http://localhost/aviation/details"; </script>';
                    }else{
                        $tblquery = "SELECT * FROM issue WHERE air = '$air'";
                        $tblvalue = array();
                        // print_r($tblquery);
                        $select = $collect->tbl_select($tblquery, $tblvalue);
                        foreach($select as $data){
                            extract($data);
                            ?>
                            <?php
                                if($status == 'Bad'){
                                    echo '<script> window.location="http://localhost/aviation/details"; </script>';
                                }else{
                                    $tblquery = "UPDATE air_craft SET status = :status WHERE uniqe = '$air'";
                                    $tblvalue = array(
                                        ':status' => "Good"
                                    );
                                    $update = $collect->tbl_update($tblquery, $tblvalue);
                                }
                        }
                    }
            }
        }
        echo '<script> window.location="http://localhost/aviation/details"; </script>';
    }
?>



<?php
    if($_POST['change']){

        extract($_POST);

        $tblquery = "UPDATE expire SET con = :con, date = :date, status = :status WHERE air_craft = '$id'";
        $tblvalue = array(
            ':con' => "Checked",
            ':date' => date('Y-m-d'),
            ':status' => "Good"
        );
        // print_r($tblvalue);
        $update = $collect->tbl_update($tblquery, $tblvalue);
        if($update){
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
                                This aircraft's part has been changed.
                            </div>
                            <a class='btn' onclick='popupInvestNotification()'>Ok</a>
                        </div>
                    </div>
                </div>
            ";
        }else{
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
                                Something went wrong, please try again later.
                            </div>
                            <a class='btn' onclick='popupInvestNotification()'>Ok</a>
                        </div>
                    </div>
                </div>
            ";
        }
        if($update){
            
            $tblquery = "SELECT * FROM issue WHERE air = '$air'";
            $tblvalue = array();
            // print_r($tblquery);
            $select = $collect->tbl_select($tblquery, $tblvalue);
            foreach($select as $data){
                extract($data);
                ?>
                <?php
                    if($status == 'Bad'){
                        echo '<script> window.location="http://localhost/aviation/details"; </script>';
                    }else{
                        $tblquery = "UPDATE air_craft SET status = :status WHERE uniqe = '$air'";
                        $tblvalue = array(
                            ':status' => "Good"
                        );
                        $update = $collect->tbl_update($tblquery, $tblvalue);
                    }
            }
                    
            
        }
        echo '<script> window.location="http://localhost/aviation/details"; </script>';
    }
?>


<?php
    if($_POST['repair']){

        extract($_POST);

        $tblquery = "SELECT * FROM expire WHERE air_craft = '$air'";
        $tblvalue = array();
        // print_r($tblquery);
        $select = $collect->tbl_select($tblquery, $tblvalue);
        foreach($select as $data){
            extract($data);
            ?>
            <?php
               
               if($con != 'Checked'){
                    $tblquery = "UPDATE air_craft SET status = :status WHERE uniqe = '$air'";
                    $tblvalue = array(
                        ':status' => "Bad"
                    );
                    // print_r($tblvalue);
                    $update = $collect->tbl_update($tblquery, $tblvalue);
                }else{
                    $tblquery = "UPDATE air_craft SET status = :status WHERE uniqe = '$air'";
                    $tblvalue = array(
                        ':status' => "Good"
                    );
                    // print_r($tblvalue);
                    $update = $collect->tbl_update($tblquery, $tblvalue);
                }

                $tblquery = "UPDATE issue SET status = :status WHERE air = '$air'";
                $tblvalue = array(
                    ':status' => "Good"
                );
                // print_r($tblvalue);
                $update = $collect->tbl_update($tblquery, $tblvalue);
                if($update){
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
                                        This problem has been fixed.
                                    </div>
                                    <a class='btn' onclick='popupInvestNotification()'>Ok</a>
                                </div>
                            </div>
                        </div>
                    ";
                    echo '<script> window.location="http://localhost/aviation/details"; </script>';
                }
                
        }
    }
?>


