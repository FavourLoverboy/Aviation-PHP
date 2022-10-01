<div class="main-body">
    <h3 class="title">Add Air Craft</h3>

    <div class="row no-p password" style="margin-top:-5px;">
        <div class="col-xs-12 no-p box" style="height:auto;">
            <form action="addAircraft" method="POST">
                <div class="inner">
                    <p class="text">Company Name:</p>
                    <input type="text" name="cn" placeholder="Enter air craft company name" required>
                </div>

                <div class="inner">
                    <p class="text">Serial No:</p>
                    <input type="text" name="sn" placeholder="Enter air craft serial no" required>
                </div>

                <div class="inner">
                    <p class="text">Tail No:</p>
                    <input type="text" name="tn" placeholder="Enter air craft tail no" required>
                </div>

                <div class="inner">
                    <p class="text">Aircraft :</p>
                    <select name="ata" required>
                        <option value="">Select Aircraft type</option>
                        <option value="Helicopter">Helicopter</option>
                        <option value="Jet Fighter">Jet Fighter</option>
                    </select>
                </div>

                <input type="submit" name="add" class="submit-btn" value="Add Air Craft">
            </form>
        </div>
    </div>
</div>

<?php
    if($_POST['add']){

        extract($_POST);

        $plane = time();

        $tblquery = "INSERT INTO air_craft VALUES(:id, :uniqe, :cn, :ata, :sn, :tn, :date, :status)";
        $tblvalue = array(
            ':id' => null,
            ':uniqe' => $plane,
            ':cn' => htmlspecialchars(ucfirst($cn)),
            ':ata' => htmlspecialchars($ata),
            ':sn' => htmlspecialchars($sn),
            ':tn' => htmlspecialchars($tn),
            ':date' => date("Y-m-d"),
            ':status' => 'Good'
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
                                Aircraft has been registered successfully.
                            </div>
                            <a class='btn' onclick='popupInvestNotification()'>Ok</a>
                        </div>
                    </div>
                </div>
            ";

            // Tail Gear Box
            $tblquery = "INSERT INTO expire VALUES(:id, :air_craft, :name, :con, :date, :status)";
            $tblvalue = array(
                ':id' => null,
                ':air_craft' => $plane,
                ':name' => htmlspecialchars("Tail Gear box"),
                ':con' => htmlspecialchars("Checked"),
                ':date' => date('Y-m-d'),
                ':status' => "Good"
            );
            $insert = $collect->tbl_insert($tblquery, $tblvalue);

            // Position Light
            $tblquery = "INSERT INTO expire VALUES(:id, :air_craft, :name, :con, :date, :status)";
            $tblvalue = array(
                ':id' => null,
                ':air_craft' => $plane,
                ':name' => htmlspecialchars("Position Light"),
                ':con' => htmlspecialchars("Checked"),
                ':date' => date('Y-m-d'),
                ':status' => "Good"
            );
            $insert = $collect->tbl_insert($tblquery, $tblvalue);
            
            // Confirmation Box
            $tblquery = "INSERT INTO expire VALUES(:id, :air_craft, :name, :con, :date, :status)";
            $tblvalue = array(
                ':id' => null,
                ':air_craft' => $plane,
                ':name' => htmlspecialchars("Confirmation Box"),
                ':con' => htmlspecialchars("Checked"),
                ':date' => date('Y-m-d'),
                ':status' => "Good"
            );
            $insert = $collect->tbl_insert($tblquery, $tblvalue);

            // Fuel Valve Assembly
            $tblquery = "INSERT INTO expire VALUES(:id, :air_craft, :name, :con, :date, :status)";
            $tblvalue = array(
                ':id' => null,
                ':air_craft' => $plane,
                ':name' => htmlspecialchars("Fuel Valve Assembly"),
                ':con' => htmlspecialchars("Checked"),
                ':date' => date('Y-m-d'),
                ':status' => "Good"
            );
            $insert = $collect->tbl_insert($tblquery, $tblvalue);

            // Oil Pressure Pump
            $tblquery = "INSERT INTO expire VALUES(:id, :air_craft, :name, :con, :date, :status)";
            $tblvalue = array(
                ':id' => null,
                ':air_craft' => $plane,
                ':name' => htmlspecialchars("Oil Pressure Pump"),
                ':con' => htmlspecialchars("Checked"),
                ':date' => date('Y-m-d'),
                ':status' => "Good"
            );
            $insert = $collect->tbl_insert($tblquery, $tblvalue);

            // Fuel Pressure Pump
            $tblquery = "INSERT INTO expire VALUES(:id, :air_craft, :name, :con, :date, :status)";
            $tblvalue = array(
                ':id' => null,
                ':air_craft' => $plane,
                ':name' => htmlspecialchars("Fuel Pressure Pump"),
                ':con' => htmlspecialchars("Checked"),
                ':date' => date('Y-m-d'),
                ':status' => "Good"
            );
            $insert = $collect->tbl_insert($tblquery, $tblvalue);

            // Equipment Plate
            $tblquery = "INSERT INTO expire VALUES(:id, :air_craft, :name, :con, :date, :status)";
            $tblvalue = array(
                ':id' => null,
                ':air_craft' => $plane,
                ':name' => htmlspecialchars("Equipment Plate"),
                ':con' => htmlspecialchars("Checked"),
                ':date' => date('Y-m-d'),
                ':status' => "Good"
            );
            $insert = $collect->tbl_insert($tblquery, $tblvalue);

            // Lead Lag Damper
            $tblquery = "INSERT INTO expire VALUES(:id, :air_craft, :name, :con, :date, :status)";
            $tblvalue = array(
                ':id' => null,
                ':air_craft' => $plane,
                ':name' => htmlspecialchars("Lead Lag Damper"),
                ':con' => htmlspecialchars("Checked"),
                ':date' => date('Y-m-d'),
                ':status' => "Good"
            );
            $insert = $collect->tbl_insert($tblquery, $tblvalue);
            
            // Spherical Bearing
            $tblquery = "INSERT INTO expire VALUES(:id, :air_craft, :name, :con, :date, :status)";
            $tblvalue = array(
                ':id' => null,
                ':air_craft' => $plane,
                ':name' => htmlspecialchars("Spherical Bearing"),
                ':con' => htmlspecialchars("Checked"),
                ':date' => date('Y-m-d'),
                ':status' => "Good"
            );
            $insert = $collect->tbl_insert($tblquery, $tblvalue);

            // Ball Bearing
            $tblquery = "INSERT INTO expire VALUES(:id, :air_craft, :name, :con, :date, :status)";
            $tblvalue = array(
                ':id' => null,
                ':air_craft' => $plane,
                ':name' => htmlspecialchars("Ball Bearing"),
                ':con' => htmlspecialchars("Checked"),
                ':date' => date('Y-m-d'),
                ':status' => "Good"
            );
            $insert = $collect->tbl_insert($tblquery, $tblvalue);
            
            // Oil And Fuel Ceals
            $tblquery = "INSERT INTO expire VALUES(:id, :air_craft, :name, :con, :date, :status)";
            $tblvalue = array(
                ':id' => null,
                ':air_craft' => $plane,
                ':name' => htmlspecialchars("Oil And Fuel Ceals"),
                ':con' => htmlspecialchars("Checked"),
                ':date' => date('Y-m-d'),
                ':status' => "Good"
            );
            $insert = $collect->tbl_insert($tblquery, $tblvalue);

            // Transfer Line
            $tblquery = "INSERT INTO expire VALUES(:id, :air_craft, :name, :con, :date, :status)";
            $tblvalue = array(
                ':id' => null,
                ':air_craft' => $plane,
                ':name' => htmlspecialchars("Transfer Line"),
                ':con' => htmlspecialchars("Checked"),
                ':date' => date('Y-m-d'),
                ':status' => "Good"
            );
            $insert = $collect->tbl_insert($tblquery, $tblvalue);

            // Hydraulic Line
            $tblquery = "INSERT INTO expire VALUES(:id, :air_craft, :name, :con, :date, :status)";
            $tblvalue = array(
                ':id' => null,
                ':air_craft' => $plane,
                ':name' => htmlspecialchars("Hydraulic Line"),
                ':con' => htmlspecialchars("Checked"),
                ':date' => date('Y-m-d'),
                ':status' => "Good"
            );
            $insert = $collect->tbl_insert($tblquery, $tblvalue);

            // Fuel And Oil Filter
            $tblquery = "INSERT INTO expire VALUES(:id, :air_craft, :name, :con, :date, :status)";
            $tblvalue = array(
                ':id' => null,
                ':air_craft' => $plane,
                ':name' => htmlspecialchars("Fuel And Oil Filter"),
                ':con' => htmlspecialchars("Checked"),
                ':date' => date('Y-m-d'),
                ':status' => "Good"
            );
            $insert = $collect->tbl_insert($tblquery, $tblvalue);

            // Check Valve
            $tblquery = "INSERT INTO expire VALUES(:id, :air_craft, :name, :con, :date, :status)";
            $tblvalue = array(
                ':id' => null,
                ':air_craft' => $plane,
                ':name' => htmlspecialchars("Check Valve"),
                ':con' => htmlspecialchars("Checked"),
                ':date' => date('Y-m-d'),
                ':status' => "Good"
            );
            $insert = $collect->tbl_insert($tblquery, $tblvalue);

            // Cooling Unit
            $tblquery = "INSERT INTO expire VALUES(:id, :air_craft, :name, :con, :date, :status)";
            $tblvalue = array(
                ':id' => null,
                ':air_craft' => $plane,
                ':name' => htmlspecialchars("Cooling Unit"),
                ':con' => htmlspecialchars("Checked"),
                ':date' => date('Y-m-d'),
                ':status' => "Good"
            );
            $insert = $collect->tbl_insert($tblquery, $tblvalue);

            // Purge Valve
            $tblquery = "INSERT INTO expire VALUES(:id, :air_craft, :name, :con, :date, :status)";
            $tblvalue = array(
                ':id' => null,
                ':air_craft' => $plane,
                ':name' => htmlspecialchars("Purge Valve"),
                ':con' => htmlspecialchars("Checked"),
                ':date' => date('Y-m-d'),
                ':status' => "Good"
            );
            $insert = $collect->tbl_insert($tblquery, $tblvalue);
        }
    }
?>
















