<div class="side-menu-wrapper">
    <div class="dropdown-box-username">
        <div class="username" onclick="toggleDropDownBoxUsername()">
            <div class="left">
                <?php echo $_SESSION['fn'];?>
            </div>
            <div class="right">
                <span><i class="fa fa-caret-down" aria-hidden="true"></i></span>
            </div>
        </div>
        <div class="dropdown">
            <a href="profile">Account Setting</a>
        </div>
    </div>
</div>

<?php 
    if($_SESSION['level'] === 'Main'){
        echo "
            <div class='side-menu-navigation-mobile'>
                <a href='aircraft'>
                    <div class='row navigator'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-home' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Aircraft</span>
                        </div>
                    </div>
                </a>
                <a href='dashboard'>
                    <div class='row navigator'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-home' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Dashboard</span>
                        </div>
                    </div>
                </a>
                <a href='bad'>
                    <div class='row navigator'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-download' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Grounded</span>
                        </div>
                    </div>
                </a>
                <a href='issue'> 
                    <div class='row navigator'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-download' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Issues</span>
                        </div>
                    </div>
                </a>
                <a href='store'>
                    <div class='row navigator'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-download' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Store</span>
                        </div>
                    </div>
                </a>
            </div>
        ";
    }else if($_SESSION['level'] === 'Admin'){
        echo "
            <div class='side-menu-navigation-mobile'>
                <a href='addAircraft'>
                    <div class='row navigator'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-home' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Add Aircraft</span>
                        </div>
                    </div>
                </a>
                <a href='addPart'>
                    <div class='row navigator'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-download' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Add Parts</span>
                        </div>
                    </div>
                </a>
                <a href='aircraft'>
                    <div class='row navigator'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-home' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Aircraft</span>
                        </div>
                    </div>
                </a>
                <a href='dashboard_Admin'>
                    <div class='row navigator'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-home' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Dashboard</span>
                        </div>
                    </div>
                </a>
                <a href='employee'>
                    <div class='row navigator'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-download' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Employees</span>
                        </div>
                    </div>
                </a>
                <a href='bad'>
                    <div class='row navigator'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-download' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Grounded</span>
                        </div>
                    </div>
                </a>
                <a href='issue'> 
                    <div class='row navigator'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-download' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Issues</span>
                        </div>
                    </div>
                </a>
                <a href='store'>
                    <div class='row navigator'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-download' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Store</span>
                        </div>
                    </div>
                </a>
                <a href='suspend'>
                    <div class='row navigator'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-download' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Suspend</span>
                        </div>
                    </div>
                </a>
            </div>
        ";
    }
?>