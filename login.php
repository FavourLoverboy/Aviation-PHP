<?php
    session_start();
    include('config/dblink.php');
    $collect = new DB();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login | Aviation</title>
        <link rel="shortcut icon" type="image/png" href="img/profile.png">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/login.css">
        <style>
            body{
                background-image: url("img/123.jpg");
                background-position: center center;
                background-repeat: no-repeat;
                background-size:cover;
            }
            .wrapper-login{
                background-image: url("img/12.jpg");
                background-position: center center;
                background-repeat: no-repeat;
                background-size:cover;
                border-radius:10px;
                margin-top:60px;
            }
            /* .wrapper-login:before{
                background: 0, 0, 0, 0.3;
                content:'';
                height:100%;
                width:100%;
            } */
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 wrapper-login" style="background:transparent;">
                    <!-- <img src="https://cryptomarketinvestment.org/site/wp-content/uploads/2021/11/crypto-market-logo-2.png"> -->
                    <div class="wrapper-box" style="background:rgba(255, 255, 255, 0.3);">
                        <h1>User Login</h1>
                        <form action="login.php" method="POST">
                            <div class="form-box">
                                <label for="n">Email Address</label>
                                <input type="email" name="email" id="n" placeholder="name@example.com" required>
                                <br/><br/>
                                <label for="p">Password</label>
                                <input type="password" name="password" id="p" placeholder="Enter Password" required>
                                <br/><br/>
                                <input type="submit" name="login" value="Login">

                                <p style="margin-top:10px;">Forgot Your Password <a href="reset.php">Reset.</a></p>

                                <p>Don't Have An Account Yet? <a href="registration.php">Sign Up.</a></p>

                                <p style="margin-top:45px;">© Copyright 2021 All Rights Reserved.</p>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        <script src="js/main.js"></script>
    </body>
</html>

<?php

    if($_POST['login']){

        extract($_POST);
        $tblquery = "SELECT * FROM users WHERE email = :email && password = :password && status = :status";
        $tblvalue = array(
            ':email' => htmlspecialchars($email),
            ':password' => htmlspecialchars($password),
            ':status' => "Active"
        );
       //print_r($tblquery);
        $select = $collect->tbl_select($tblquery, $tblvalue);
        if($select){
            foreach($select as $data){
                extract($data);
                $_SESSION['myId'] = $id;
                $_SESSION['ln'] = $ln;
                $_SESSION['fn'] = $fn;
                $_SESSION['email'] = $email;
                $_SESSION['level'] = $level;
                $_SESSION['date'] = $date;
                $_SESSION['lastLogin'] = $last_login;
                $_SESSION['status'] = $status;
                $_SESSION['picture'] = $picture;
                $_SESSION['password'] = $password;
                $_SESSION['ms'] = $ms;

                if($_SESSION['level'] == 'Admin'){
                    header ('Location: dashboard_admin');
                    echo '<script> window.location="dashboard_admin"; </script>';
                }else if($_SESSION['level'] == 'Main'){
                    header ('Location: dashboard_mini');
                    echo '<script> window.location="dashboard_mini"; </script>';
                }
            }
        }else{
            echo "<script> alert('Oops Something went wrong. Please check if your password and Username are correctly spelt, Or if the error persist it may be that your account has been Disabled.'); </script>";
        }

        if($select){
            $tblquery = "UPDATE users SET last_login = :last_login WHERE id = :id";
            $tblvalue = array(
                ':last_login' => date("Y-m-d"),
                ':id' => $_SESSION['myId']
            );
            $update = $collect->tbl_update($tblquery, $tblvalue);
        }

        if($select){
            $name = $_SESSION['ln'] . " " . $_SESSION['fn'];
            $tblquery = "INSERT INTO notification VALUES(:id, :userId, :name, :message, :time, :date, :status)";
            $tblvalue = array(
                ':id' => null,
                ':userId' => $_SESSION['myId'],
                ':name' => $name,
                ':message' => "Your account was logged in.",
                ':time' => time(),
                ':date' => date("Y-m-d"),
                ':status' => 'Show'
            );
            // print_r($tblvalue);
            $insert = $collect->tbl_insert($tblquery, $tblvalue);
        }
    }
?>

<?php
    $tblquery = "SELECT * FROM expire WHERE CURDATE() - date > 1";
    $tblvalue = array();
    $select = $collect->tbl_select($tblquery, $tblvalue);
    foreach($select as $data){
        extract($data);

        $tblquery = "UPDATE expire SET con = :con, status = :status WHERE id = :id";
        $tblvalue = array(
            ':con' => "Check",
            ':status' => "Bad",
            ':id' => $id
        );
        $update = $collect->tbl_update($tblquery, $tblvalue);
        if($update){
            $tblquery = "UPDATE air_craft SET status = :status WHERE uniqe = :id";
            $tblvalue = array(
                ':status' => "Bad",
                ':id' => $air_craft
            );
            $update = $collect->tbl_update($tblquery, $tblvalue);
        }
        
        ?>
        <?php
    }
?>
<?php
    $tblquery = "SELECT * FROM expire";
    $tblvalue = array();
    $select = $collect->tbl_select($tblquery, $tblvalue);
    foreach($select as $data){
        extract($data);

        $date1 = date_create($date);
        $date2 = date_create(date('Y-m-d'));
        $diff = date_diff($date1, $date2);
        $diff2 = $diff->format("%a");

        if($diff2 > 2){
            $tblquery = "UPDATE expire SET con = :con, status = :status WHERE id = :id";
            $tblvalue = array(
                ':con' => "Bad",
                ':status' => "Bad",
                ':id' => $id
            );
            $update = $collect->tbl_update($tblquery, $tblvalue);
            if($update){
                $tblquery = "UPDATE air_craft SET status = :status WHERE uniqe = :id";
                $tblvalue = array(
                    ':status' => "Bad",
                    ':id' => $air_craft
                );
                $update = $collect->tbl_update($tblquery, $tblvalue);
            }
        }
        ?>
        <?php
    }
?>