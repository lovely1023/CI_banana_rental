<section id="container">
    <header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <a href="#" class="logo"><b><span>BANANACAMPERS</span></b></a>
        <div class="top-menu">
            <ul class="nav pull-right top-menu">
                <li><a class="logout" href="/">Goto-site</a></li>
                <li><a class="logout" href="/admin/index.php/Admin_C/log_out">Logout</a></li>
            </ul>
        </div>
    </header>
    <aside>
        <div id="sidebar" class="nav-collapse ">
            <ul class="sidebar-menu" id="nav-accordion">
                <p class="centered">
                    <a href="#">
                        <img src="/admin/assets/img/<?php if($img){echo $img;}else{echo 'avartar.png';};?>"
                            class="img-circle" width="80">
                    </a>
                </p>
                <h4 class="centered"><?php echo $first.' '.$last;?></h4>
                <li class="mt">
                    <a id="admininfo" class="" href="/admin/index.php/Admin_C/admin_first">
                    <i class="fa fa-dashboard"></i>
                    <span>Admin info</span>
                    </a>
                </li>
                <li class="mt">
                    <a id="usersmanage" class="" href="/admin/index.php/Admin_C/users">
                    <i class="fa fa-user"></i>
                    <span>User management</span>
                    </a>
                </li>
                <li class="mt">
                    <a id="adsmanage" class="" href="/admin/index.php/Admin_C/ads">
                    <i class="fa fa-dashboard"></i>
                    <span>Ads management</span>
                    </a>
                </li>
                <li class="mt">
                    <a id="bookingmanage" class="" href="/admin/index.php/Admin_C/booking">
                    <i class="fa fa-dashboard"></i>
                    <span>Booking management</span>
                    </a>
                </li>
                <li class="mt">
                    <a id="withdrawalmanage" class="" href="/admin/index.php/Admin_C/withdrawal">
                    <i class="fa fa-dashboard"></i>
                    <span>Payment management</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>