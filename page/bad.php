<div class="main-body">
    <h3 class="title">Aircraft</h3>

    <div class="row no-p notification">
        <div class="col-xs-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Serial No</th>
                        <th>Company</th>
                        <th>Type</th>
                        <th>View</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                            $tblquery = "SELECT * FROM air_craft WHERE status = 'Bad' ORDER BY ata";
                            $tblvalue = array();
                            $select = $collect->tbl_select($tblquery, $tblvalue);
                            foreach($select as $data){
                                extract($data);
                                ?>
                                <?php
                                    echo "
                                        <tr>
                                            <td>$sn</td>
                                            <td>$cn</td>
                                            <td>$ata</td>
                                            <td>
                                                <form action='bad' method='POST'>
                                                    <input type='hidden' name='id' value='$id'>
                                                    <input type='hidden' name='uniqe' value='$uniqe'>
                                                    <input type='submit' name='view' class='btn btn-danger' value='View'>
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

<?php
    if($_POST['view']){

        extract($_POST);

        $_SESSION['craftID'] = $id;
        $_SESSION['craftUniqID'] = $uniqe;

        echo '<script> window.location="http://localhost/aviation/details"; </script>';
        
    }
?>