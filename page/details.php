<div class="main-body">
    <h3 class="title">Aircraft</h3>

    <form action="fix" method="POST">
        <input type="hidden" name="id" value="<?php echo $_SESSION['craftUniqID']; ?>">
        <input type="submit" name="change" class="btn btn-info" value="Change all">
    </form>

    <div class="row no-p notification">
        <div class="col-xs-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Condition</th>
                        <th>Status</th>
                        <th>Fix</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                            $tblquery = "SELECT * FROM expire WHERE air_craft = '$_SESSION[craftUniqID]' ORDER BY name";
                            $tblvalue = array();
                            $select = $collect->tbl_select($tblquery, $tblvalue);
                            foreach($select as $data){
                                extract($data);
                                ?>
                                <?php
                                    if($con == 'Check'){
                                        echo "
                                            <tr>
                                                <td>$name</td>
                                                <td>$con</td>
                                                <td>$status</td>
                                                <td>
                                                    <form action='fix' method='POST'>
                                                        <input type='hidden' name='id' value='$id'>
                                                        <input type='hidden' name='air' value='$air_craft'>
                                                        <input type='submit' name='fix' class='btn btn-warning' value='Change'>
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action='fixBad' method='POST'>
                                                        <input type='hidden' name='id' value='$id'>
                                                        <input type='hidden' name='air' value='$air_craft'>
                                                        <input type='submit' name='bad' class='btn btn-danger' value='Bad'>
                                                    </form>
                                                </td>
                                            </tr>
                                        ";
                                    }else if($con == 'Bad'){
                                        echo "
                                            <tr>
                                                <td>$name</td>
                                                <td>$con</td>
                                                <td>$status</td>
                                                <td>
                                                    <form action='fix' method='POST'>
                                                        <input type='hidden' name='id' value='$id'>
                                                        <input type='hidden' name='air' value='$air_craft'>
                                                        <input type='submit' name='fix' class='btn btn-info' value='Change'>
                                                    </form>
                                                </td>
                                            </tr>
                                        ";
                                    }else{
                                        echo "
                                            <tr>
                                                <td>$name</td>
                                                <td>$con</td>
                                                <td>$status</td>
                                                <td>Good</td>
                                            </tr>
                                        ";
                                    }
                            }
                        ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <div class="row no-p notification">
        <div class="col-xs-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Worker</th>
                        <th>Air Craft</th>
                        <th>Problem</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Fix</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php

                            $tblquery = "SELECT * FROM issue WHERE air = '$_SESSION[craftUniqID]' AND status = 'Bad' ORDER BY date DESC";
                            $tblvalue = array();
                            $select = $collect->tbl_select($tblquery, $tblvalue);
                            foreach($select as $data){
                                extract($data);
                                ?>
                                <?php
                                    echo "
                                        <tr>
                                            <td>$person</td>
                                            <td>$air_craft</td>
                                            <td>$issue</td>
                                            <td>$status</td>
                                            <td>$date</td>
                                            <td>
                                                <form action='fix' method='POST'>
                                                    <input type='hidden' name='id' value='$id'>
                                                    <input type='hidden' name='air' value='$air'>
                                                    <input type='submit' name='repair' class='btn btn-info' value='Fixed'>
                                                </form>
                                            </td>
                                        </tr>
                                    ";
                                    
                            }
                        ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>

