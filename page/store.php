<div class="main-body">
    <h3 class="title">All Patient</h3>

    <div class="row no-p client">
        <div class="col-xs-12 no-p">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Names</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                            $tblquery = "SELECT count(name) as total, name FROM parts WHERE status = '1' GROUP BY name ORDER BY name";
                            $tblvalue = array();
                            $select = $collect->tbl_select($tblquery, $tblvalue);
                            foreach($select as $data){
                                extract($data);
                                ?>
                                <?php
                                    echo "
                                        <tr>
                                            <td>$name</td>
                                            <td>$total</td>
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