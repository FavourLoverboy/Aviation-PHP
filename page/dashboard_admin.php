<div class="main-body">
    <h3 class="title">Welcome, <?php echo $_SESSION['fn'];?>!</h3>

    <div class="dashboard-nav">
        <div class="row" style="padding:0px;">
            <div class="col-md-6" style="padding:0px;">
                <div class="row">
                    <div class="col-xs-4 col-md-3 nav-btn"></div>
                    <div class="col-xs-4 col-md-3 nav-btn"></div>
                    <div class="col-xs-4 col-md-3 nav-btn"></div>
                    <div class="col-xs-4 col-md-3 nav-btn"></div>
                </div>
            </div>
            <div class="col-md-6"></div>
        </div>
    </div>

    <div class="dashboard-main-body">
        <div class="row dashboard-main-row">
            <div class="col-md-3 dashboard-box1">
                <div class="dashboard-box-inner1">
                    <div class="row">
                        <div class="col-xs-3 icon-box">
                            <span><i class="fa fa-download" aria-hidden="true"></i></span>
                        </div>
                        <div class="col-xs-9 parent-text-box">
                            <div class="text-box">
                                <div class="row">
                                    <?php
                                        $tblquery = "SELECT count(id) as total FROM users WHERE level != 'Admin'";
                                        $tblvalue = array();
                                        $select = $collect->tbl_select($tblquery, $tblvalue);
                                        foreach($select as $data){
                                            extract($data);
                                            echo "
                                                <div class='col-xs-12 top'>Users</div>
                                                <div class='col-xs-12 down'>$total</div>
                                            ";
                                        }
                                    ?>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 dashboard-box2">
                <div class="dashboard-box-inner1">
                    <div class="row">
                        <div class="col-xs-3 icon-box">
                            <span style="color:green;"><i class="fa fa-plane" aria-hidden="true"></i></span>
                        </div>
                        <div class="col-xs-9 parent-text-box">
                            <div class="text-box">
                                <div class="row">
                                    <?php
                                        $tblquery = "SELECT count(id) as total FROM air_craft";
                                        $tblvalue = array();
                                        $select = $collect->tbl_select($tblquery, $tblvalue);
                                        foreach($select as $data){
                                            extract($data);
                                            ?>
                                            <?php
                                                echo "
                                                    <div class='col-xs-12 top'>Air Crafts</div>
                                                    <div class='col-xs-12 down'>$total</div>
                                                ";
                                        }
                                    ?>
                                </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 dashboard-box3">
                <div class="dashboard-box-inner1">
                    <div class="row">
                        <div class="col-xs-3 icon-box">
                            <span style="color:pink;"><i class="fa fa-info" aria-hidden="true"></i></span>
                        </div>
                        <div class="col-xs-9 parent-text-box">
                            <div class="text-box">
                                <div class="row">
                                    <?php
                                        $tblquery = "SELECT count(id) as total FROM air_craft WHERE status = 'Good'";
                                        $tblvalue = array();
                                        $select = $collect->tbl_select($tblquery, $tblvalue);
                                        foreach($select as $data){
                                            extract($data);
                                            ?>
                                            <?php
                                                echo "
                                                    <div class='col-xs-12 top'>Available</div>
                                                    <div class='col-xs-12 down'>$total</div>
                                                ";
                                        }
                                    ?>
                                </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 dashboard-box4">
                <div class="dashboard-box-inner1">
                    <div class="row">
                        <div class="col-xs-3 icon-box">
                            <span style="color:blue;"><i class="fa fa-question" aria-hidden="true"></i></span>
                        </div>
                        <div class="col-xs-9 parent-text-box">
                            <div class="text-box">
                                <div class="row">
                                    <?php
                                        $tblquery = "SELECT count(id) as total FROM air_craft WHERE status = 'Bad'";
                                        $tblvalue = array();
                                        $select = $collect->tbl_select($tblquery, $tblvalue);
                                        foreach($select as $data){
                                            extract($data);
                                            ?>
                                            <?php
                                                echo "
                                                    <div class='col-xs-12 top'>Grounded</div>
                                                    <div class='col-xs-12 down'>$total</div>
                                                ";
                                        }
                                    ?>
                                </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row dashboard-main-row2">
            <div class="col-md-3 dashboard-box1">
                <div class="dashboard-box-inner1">
                    <div class="row">
                        <div class="col-xs-3 icon-box">
                            <span style="color:purple;"><i class="fa fa-times" aria-hidden="true"></i></span>
                        </div>
                        <div class="col-xs-9 parent-text-box">
                            <div class="text-box">
                                <div class="row">
                                    <?php
                                        $tblquery = "SELECT count(id) as total FROM expire WHERE status = 'Bad'";
                                        $tblvalue = array();
                                        $select = $collect->tbl_select($tblquery, $tblvalue);
                                        foreach($select as $data){
                                            extract($data);
                                            ?>
                                            <?php
                                                echo "
                                                    <div class='col-xs-12 top'>Expire</div>
                                                    <div class='col-xs-12 down'>$total</div>
                                                ";
                                        }
                                    ?>
                                </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 dashboard-box2">
                <div class="dashboard-box-inner1">
                    <div class="row">
                        <div class="col-xs-3 icon-box">
                            <span style="color:pink;"><i class="fa fa-exclamation" aria-hidden="true"></i></span>
                        </div>
                        <div class="col-xs-9 parent-text-box">
                            <div class="text-box">
                                <div class="row">
                                    <?php
                                        $tblquery = "SELECT count(id) as total FROM issue WHERE status = 'Bad'";
                                        $tblvalue = array();
                                        $select = $collect->tbl_select($tblquery, $tblvalue);
                                        foreach($select as $data){
                                            extract($data);
                                            ?>
                                            <?php
                                                echo "
                                                    <div class='col-xs-12 top'>Issues</div>
                                                    <div class='col-xs-12 down'>$total</div>
                                                ";
                                        }
                                    ?>
                                </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 dashboard-box3">
                <div class="dashboard-box-inner1">
                    <div class="row">
                        <div class="col-xs-3 icon-box">
                            <span style="color:pink;"><i class="fa fa-archive" aria-hidden="true"></i></span>
                        </div>
                        <div class="col-xs-9 parent-text-box">
                            <div class="text-box">
                                <div class="row">
                                    <?php
                                        $tblquery = "SELECT count(id) as total FROM parts WHERE status = 1";
                                        $tblvalue = array();
                                        $select = $collect->tbl_select($tblquery, $tblvalue);
                                        foreach($select as $data){
                                            extract($data);
                                            ?>
                                            <?php
                                                echo "
                                                    <div class='col-xs-12 top'>Store</div>
                                                    <div class='col-xs-12 down'>$total</div>
                                                ";
                                        }
                                    ?>
                                </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 dashboard-box4">
                <div class="dashboard-box-inner1">
                    <div class="row">
                        <div class="col-xs-3 icon-box">
                            <span style="color:blue;"><i class="fa fa-users" aria-hidden="true"></i></span>
                        </div>
                        <div class="col-xs-9 parent-text-box">
                            <div class="text-box">
                                <div class="row">
                                    <?php
                                        $tblquery = "SELECT count(id) as total FROM users WHERE level != 'Admin' AND status = 'Active'";
                                        $tblvalue = array();
                                        $select = $collect->tbl_select($tblquery, $tblvalue);
                                        foreach($select as $data){
                                            extract($data);
                                            ?>
                                            <?php
                                                echo "
                                                    <div class='col-xs-12 top'>Active</div>
                                                    <div class='col-xs-12 down'>$total</div>
                                                ";
                                        }
                                    ?>
                                </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row dashboard-main-row2">
            <div class="col-md-3 dashboard-box1">
                <div class="dashboard-box-inner1">
                    <div class="row">
                        <div class="col-xs-3 icon-box">
                            <span style="color:purple;"><i class="fa fa-frown-o" aria-hidden="true"></i></span>
                        </div>
                        <div class="col-xs-9 parent-text-box">
                            <div class="text-box">
                                <div class="row">
                                    <?php
                                        $tblquery = "SELECT count(id) as total FROM users WHERE level != 'Admin' AND status != 'Active'";
                                        $tblvalue = array();
                                        $select = $collect->tbl_select($tblquery, $tblvalue);
                                        foreach($select as $data){
                                            extract($data);
                                            ?>
                                            <?php
                                                echo "
                                                    <div class='col-xs-12 top'>Suspend</div>
                                                    <div class='col-xs-12 down'>$total</div>
                                                ";
                                        }
                                    ?>
                                </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php

    // $tblquery = "SELECT * FROM expire";
    // $tblvalue = array();
    // $select = $collect->tbl_select($tblquery, $tblvalue);
    // foreach($select as $data){
    //     extract($data);

    //     $date1 = $date;
    //     $date2 = date("Y-m-d");
        
    //     function dateDiff($date1, $date2){
    //         $date1_ts = strtotime($date1);
    //         $date2_ts = strtotime($date2);
    //         $diff = $date2_ts - $date1_ts;
    //         return round($diff / 86400);
    //     }
                
    //     $diff = dateDiff($date1, $date2);
        
    //     if($diff > 1){
    //         $tblquery = "UPDATE expire SET con = :con, status = :status WHERE date = :id";
    //         $tblvalue = array(
    //             ':con' => "Check12",
    //             ':status' => "Check12",
    //             ':id' => $date
    //         );
    //         $update = $collect->tbl_update($tblquery, $tblvalue);
    //     }
    // }
?>