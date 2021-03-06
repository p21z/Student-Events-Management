<?php
    if (!$this->session->userdata('idxx'))
    {
        redirect('/login');
    }
    // print_r($_SESSION);


function getConnection_header_special()
{
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "semm";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection Failed: ".$conn->connect_error);
	}

	return $conn;
}

function get_where_custom_header_special($table_name, $column, $value)
{
    $conn = getConnection_header_special();
    $sql = "SELECT * FROM $table_name where ".$column."='".$value."'";
    $result = $conn->query($sql);
    return $result;
}

function get_header_special($table_name)
{
	$conn = getConnection_header_special();
	$sql = "SELECT * FROM $table_name";
	$result = $conn->query($sql);
	return $result;
}

function get_desc_limit_header_special($table_name, $column, $limit)
{
	$conn = getConnection_header_special();
	$sql = "SELECT * FROM $table_name ORDER BY $column DESC LIMIT $limit";
	$result = $conn->query($sql);
	return $result;
}


function get_where_desc_limit_header_special($table_name, $column, $value, $column2, $limit)
{
	$conn = getConnection_header_special();
	$sql = "SELECT * FROM $table_name where ".$column."='".$value."'ORDER BY ".$column2." DESC LIMIT ".$limit;
	$result = $conn->query($sql);
	return $result;
}

function get_where_not_header_special($table_name, $column1, $value1)
{
	$conn = getConnection_header_special();
	$sql = "SELECT * FROM $table_name where ".$column1." != '".$value1."'";
	$result = $conn->query($sql);
	return $result;
}

function get_where_not_2_custom_header_special($table_name, $column1, $value1, $column2, $value2)
{
	$conn = getConnection_header_special();
	$sql = "SELECT * FROM $table_name where ".$column1."!='".$value1."' and ".$column2." != '".$value2."'";
	$result = $conn->query($sql);
	return $result;
}

date_default_timezone_set('Asia/Singapore');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>School Events Management</title>

    <!-- Custom fonts for this template-->

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> -->
                
    <link href="<?=base_url('Template/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url('Template/css/sb-admin-2.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('Template/css/main.css')?>" rel="stylesheet">
    <link href="<?=base_url('Template/css/collapse.css')?>" rel="stylesheet">

    <link href="<?=base_url('Template/vendor/datatables/dataTables.bootstrap4.min.css')?>" rel="stylesheet">    



</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <div class="colorize-black">
        <ul class="navbar-nav bg-gradient-white sidebar sidebar-light accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center " href="<?=base_url()?>home">
                <div class="sidebar-brand-icon rotate-n-10">
                <i class="fas fa-chalkboard-teacher colorize-black"></i>
                </div>
                <div class="sidebar-brand-text mx-3 colorize-black">SITE<br>EVENTS</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0 colorize-primary">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url()?>home">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Home</span></a>
            </li>

            <!-- Divider -->
            <!-- ADMIN SIDE -->
            <?php
                if ($this->session->userdata('access')==="Dean")
                {
            ?>
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Admin Modules
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-users"></i>
                    <span>Personage</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Personage Components:</h6>
                        <a class="collapse-item" href="<?=base_url()?>users">Users</a>
                        <a class="collapse-item" href="<?=base_url()?>officers">Officers</a>
                        <a class="collapse-item" href="<?=base_url()?>advisers">Advisers</a>
                        <a class="collapse-item" href="<?=base_url()?>organizations">Organizations</a>
                    </div>
                </div>
            </li>
            
            <!-- Nav Item - Utilities Collapse Menu -->
            
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-calendar-day"></i>
                    <span>Events</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="<?=base_url()?>events/pending_events_view"">Pending</a>
                        <a class="collapse-item" href="<?=base_url()?>events/approved_events_view"">Approved</a>
                        <a class="collapse-item" href="<?=base_url()?>events/archived_events_view"">Archived</a>
                        <a class="collapse-item" href="<?=base_url()?>events/all_events_view"">All</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <?php
                    $orgs_data_2=get_where_custom_header_special('tbl_orgs', 'org_category', 'dean');

                    foreach ($orgs_data_2 as $key =>$row)
                    {
                        $org_id_2=$row['org_id'];
                        $org_name_2=$row['org_name'];
                        
                ?>
                        <a class="nav-link" href="<?=base_url()?>organizations_view/approved_events/<?=$org_id_2?>">
                            <i class="fas fa-building"></i>
                            <span><?=$org_name_2?></span>
                        </a>
                <?php
                    }
                ?>
                
            </li>

            <?php
                }
            ?>
            <?php
                if ($this->session->userdata('access')==="Student")
                {
            ?>
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Student Modules
                </div>

                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url()?>evaluation">
                        <i class="fas fa-star"></i>
                        <span>Evaluation</span>
                    </a>
                </li>
            <?php
                }
            ?>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Pages
            </div>
            <?php
                if ($this->session->userdata('access')==="Dean")
                {
            ?>
            
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
                    aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Organizations</span>
                </a>
                <div id="collapsePages" class="collapse show" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <?php
                            
                                $table_name = "tbl_orgs";
                                // $column = "org_id";
                                
                                $get_orgData = get_where_not_2_custom_header_special($table_name, 'org_category', 'dean', 'Archive', 1);
                    
                                foreach ($get_orgData as $key => $row)
                                {
                                    $org_id=$row['org_id'];
                                    $org_name=$row['org_name'];
                                    $org_abbr=$row['org_abbr'];
                                
                        ?>

                        <a class="collapse-item" href="<?=base_url()?>organizations_view/approved_events/<?=$org_id?>"><?= $org_abbr ?></a>

                        <?php
                                }
                } else 
                {
                        ?>

                            <!-- Nav Item - Pages Collapse Menu -->
                            <li class="nav-item active">
                                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
                                    aria-controls="collapsePages">
                                    <i class="fas fa-fw fa-folder"></i>
                                    <span>My Organizations</span>
                                </a>
                                <div id="collapsePages" class="collapse show" aria-labelledby="headingPages"
                                    data-parent="#accordionSidebar">
                                    <div class="bg-white py-2 collapse-inner rounded">
                                        <?php
                                            
                                            $table_name = "tbl_officers";
                                            $column = "user_id";
                                            
                                            $get_userData = get_where_custom_header_special($table_name, $column, $this->session->userdata('idxx'));
                                
                                            foreach ($get_userData as $key => $row)
                                            {
                                                $off_id=$row['off_id'];
                                                $user_id=$row['user_id'];
                                                $org_id=$row['org_id'];
                                                $off_type=$row['off_type'];
                                                
                                                $table_name = "tbl_orgs";
                                                $column = "org_id";
                                                
                                                $get_orgData = get_where_custom_header_special($table_name, $column, $org_id);
                                    
                                                foreach ($get_orgData as $key => $row)
                                                {
                                                    $org_id=$row['org_id'];
                                                    $org_name=$row['org_name'];
                                                }
                                        ?>

                                        <a class="collapse-item" href="<?=base_url()?>organizations_view/approved_events/<?=$org_id?>"><?= $org_name ?></a>

                                        <?php
                                            }

                    }
                                        ?>

                        <!-- <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item active" href="blank.html">Blank Page</a>
                    </div> -->
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li> -->

            <!-- Nav Item - Tables -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li> -->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <!-- <button class="rounded-circle border-0" id="sidebarToggle"></button> -->
            </div>

        </ul>
        <!-- End of Sidebar -->
        </div>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <!-- <span class="badge badge-danger badge-counter">5+</span> -->
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Notification Center
                                </h6>

                            <!-- PLAY HERE -->

                            <?php

                            if ($this->session->userdata('access')==="Dean")
                            {
                                // SEE ALL NOTIF
                                $table_name_x="tbl_notif";
                                // $column="org_id";
                                // $value="1";
                                // $limit=3;
                                // $notif_data=get_header_special($table_name);
                                // $notif_data=get_desc_hs($table_name_x);
                                $notif_data=get_desc_limit_header_special("tbl_notif", "notif_id", 3);

                                foreach ($notif_data as $key => $row) {
                                    $notif_id=$row['notif_id'];
                                    $username=$row['username'];
                                    $fullname=$row['fullname'];
                                    $user_type=$row['user_type'];
                                    $off_type=$row['off_type'];
                                    $datexx=$row['datexx'];
                                    $timexx=$row['timexx'];
                                    $action=$row['action'];
                                    $org_id=$row['org_id'];
                                    $event_id=$row['event_id'];
                                    
                                    $event_name="";
                                    $table_name_2="tbl_events";
                                    $column="event_id";
                                    $value=$event_id;
                                    $get_eventData=get_where_custom_header_special($table_name_2, $column, $value);

                                    foreach ($get_eventData as $key => $row)
                                    {
                                       $event_name=$row['event_name'];
                                    }

                                ?>

                                <a class="dropdown-item d-flex align-items-center" 
                                    <?php if($event_name!==""){?>
                                        href="<?=base_url().'events/event_details/'.$event_id?>"
                                    <?php } else
                                        { ?>
                                        href="#"
                                        <?php } ?>
                                >
                                    
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500"><?=$datexx?></div>
                                        <?=$username?>
                                        <span class="font-weight-bold">
                                        <br>
                                        <?php
                                        if ($event_name!=="")
                                        {
                                            echo $event_name." ".$action;
                                        } else
                                        {
                                            echo "event id(".$event_id.") ".$action;
                                        }
                                        
                                        ?>
                                       </span>
                                    </div>
                                </a>

                                <?php

                                }

                            } else
                            {
                                // SEE NOTIF OF ORGS YOU HAVE POSITION IN
                                // $notif_data=get_where_desc_limit_header_special($table_name, $column, $value, $column2, $limit);

                                $officer_data=get_where_custom_header_special("tbl_officers", "user_id", $this->session->userdata('idxx'));

                                foreach ($officer_data as $key => $row)
                                {
                                    $org_id=$row['org_id'];
                                    
                                    $notif_data=get_where_desc_limit_header_special("tbl_notif", "org_id", $org_id, "notif_id", 1);

                                    foreach ($notif_data as $key => $row)
                                    {
                                        
                                    $notif_id=$row['notif_id'];
                                    $username=$row['username'];
                                    $fullname=$row['fullname'];
                                    $user_type=$row['user_type'];
                                    $off_type=$row['off_type'];
                                    $datexx=$row['datexx'];
                                    $timexx=$row['timexx'];
                                    $action=$row['action'];
                                    $org_id=$row['org_id'];
                                    $event_id=$row['event_id'];
                                    
                                    $event_name="";
                                    $table_name_2="tbl_events";
                                    $column="event_id";
                                    $value=$event_id;
                                    $get_eventData=get_where_custom_header_special($table_name_2, $column, $value);

                                    foreach ($get_eventData as $key => $row)
                                    {
                                        $event_name=$row['event_name'];
                                    }

                                    ?>

                                    <a class="dropdown-item d-flex align-items-center" 
                                        <?php if($event_name!==""){?>
                                            href="<?=base_url().'events/event_details/'.$event_id?>"
                                        <?php } else
                                            { ?>
                                            href="#"
                                            <?php } ?>
                                    >

                                        <div class="mr-3">
                                            <div class="icon-circle bg-primary">
                                                <i class="fas fa-file-alt text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500"><?=$datexx?></div>
                                            <?=$username?>
                                            <span class="font-weight-bold">
                                            <br>
                                            <?php
                                        if ($event_name!=="")
                                        {
                                            echo $event_name." ".$action;
                                        } else
                                        {
                                            echo "event id(".$event_id.") ".$action;
                                        }
                                        
                                        ?>
                                        </span>
                                        </div>
                                    </a>

                                    <?php


                                    }
                                }


                            }

                            ?>
                                
                            <!-- END PLAY -->
                                
                                <a class="dropdown-item text-center small text-gray-500" href="<?=base_url()?>notification">Show All Notifications</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=$this->session->userdata('firstnamexx')." ".$this->session->userdata('lastnamexx')?></span>
                                
                                <?php
                                    $table_name="tbl_users";
                                    $column="user_id";
                                    $value=$this->session->userdata('idxx');

                                    $dp_data=get_where_custom_header_special($table_name, $column, $value);

                                    foreach ($dp_data as $key => $row) {
                                        $image=$row['image'];
                                    }

                                    if ($image==="")
                                    {
                                    ?>
                                        <img class="img-profile rounded-circle object-fit-dp"
                                            src="<?=base_url()?>assets/img/org_img.png">
                                    <?php
                                    } else
                                    {
                                    ?>
                                        <img class="img-profile rounded-circle object-fit-dp"
                                            src="<?=base_url()?>assets/img/<?=$image?>">
                                    <?php
                                    }
                                    ?>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?=base_url()?>profile">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?=base_url()?>logout">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">