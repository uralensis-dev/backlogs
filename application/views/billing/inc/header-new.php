<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Uralensis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/newtheme/img/favicon.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/newtheme/css/bootstrap.min.css'); ?>">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/newtheme/css/font-awesome.min.css'); ?>">
    <!-- Lineawesome CSS -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/newtheme/css/line-awesome.min.css'); ?>">
    <!-- Datatable CSS -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/newtheme/css/dataTables.bootstrap4.min.css'); ?>">
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/newtheme/css/select2.min.css'); ?>">
    <!-- Stickey CSS -->
     <link rel="stylesheet" href="<?php echo base_url('/assets/css/sticky.css'); ?>">
    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/newtheme/css/bootstrap-datetimepicker.min.css'); ?>">
    <!-- Datetimepicker CSS -->
    <!-- Tagsinput CSS -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/newtheme/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css'); ?>">
    <!--Full Calendar CSS Files-->
    <link href='<?php echo base_url('/assets/fullcalendar/core/main.css'); ?>' rel='stylesheet'/>
    <link href='<?php echo base_url('/assets/fullcalendar/daygrid/main.css'); ?>' rel='stylesheet'/>
    <!--Full Calendar CSS Files-->
    <!-- Summernote CSS -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/newtheme/plugins/summernote/dist/summernote-bs4.css'); ?>">
    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/newtheme/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/newtheme/css/custom_billing.css'); ?>">
    <?php
    if (!empty($styles)) {
        foreach ($styles as $value) {
            ?>
            <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/<?php echo $value; ?>"/>
            <?php
        }
    }
    ?>
</head>

 <style type="text/css">
            .success { background: #468847; color: #ffffff; }
            .warning { background: #f89406; color: #ffffff; }
            .important { background: #b94a48; color: #ffffff; }
            .info { background: #3a87ad; color: #ffffff; }
        </style>

    <script>
// Set the date we're counting down to
var countDownDate = new Date("Feb 29, 2020 04:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Output the result in an element with id="demo"
    if (document.getElementById("demo") != null)
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";

    // If the count down is over, write some text
    if (distance < 0) {
        clearInterval(x);
        if (document.getElementById("demo") != null)
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>
<style>
    .alert {
        padding: 20px;
        background-color: #f44336;
        color: white;
        margin-left: 200px;
    }

    .alert.info {
        background-color: #2196F3;
    }

    .closebtn {
        margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
    }

    #demo {
        text-align: center;
        font-size: 22px;
        margin-top: 0px;
    }

    .closebtn:hover {
        color: black;
    }
</style>
<body>
<!-- Main Wrapper -->
<div class="main-wrapper">
    <!-- Header -->
    <div class="header">
        <!-- Logo -->
        <!-- <div class="header-left">
            <a href="index.html" class="logo">
                <img src="assets/img/logo.png" width="40" height="40" alt="">
            </a>
        </div> -->
        <!-- /Logo -->
        <a id="toggle_btn" href="javascript:void(0);">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
        </a>
        <!-- Header Title -->
        <div class="page-title-box">
            <h3>PathHub</h3>
        </div>
        <!-- /Header Title -->
        <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>
        <!-- Header Menu -->
        <form class="tg-formtheme tg-searchrecord">
            <fieldset>
                <div class="form-group tg-inputicon">
                    <input type="text" class="form-control typeahead" placeholder="Search Record">
                    <i class="lnr lnr-magnifier"></i>
                </div>
            </fieldset>
        </form>
        <ul class="nav user-menu">
                <!-- Search -->
                <li class="nav-item">
                    <div class="top-nav-search">
                        <a href="javascript:void(0);" class="responsive-search">
                            <i class="fa fa-search"></i>
                        </a>
                        
                    </div>
                </li>
                <!-- /Search -->
                <!-- Flag -->
                <li class="nav-item dropdown has-arrow flag-nav">
                    
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="<?php echo base_url('/assets/newtheme/img/flags/us.png'); ?>" alt="" height="16"> English
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="<?php echo base_url('/assets/newtheme/img/flags/fr.png'); ?>" alt="" height="16"> French
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="<?php echo base_url('/assets/newtheme/img/flags/es.png'); ?>" alt="" height="16"> Spanish
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="<?php echo base_url('/assets/newtheme/img/flags/de.png'); ?>" alt="" height="16"> German
                        </a>
                    </div>
                </li>
                <!-- /Flag -->
                 <?php
                $group_row = $this->ion_auth->get_users_groups()->row();
                $group_type = $group_row->group_type;
                ?>
                <?php if (in_array($group_type,LAB_GROUP)) : ?>
                    <li class="new-item">
                        <a href="<?php echo base_url('index.php/institute/bookingin'); ?>" class="nav-link">
                            <img src="<?php echo base_url() ?>/assets/icons/add_new.png" class="img-responsive" />
                        </a>
                    </li>
                   
                    <li class="new-item" title='Publish'><?php $date_year = date('Y'); ?>
                        <a href="<?php echo base_url('lab/published_reports/' . $date_year . '/all'); ?>" class="nav-link">
                            <img src="<?php echo base_url() ?>/assets/icons/white/publish.png" class="img-responsive" />
                            <span class="badge badge-pill"  id='reported_counter'>0</span>
                        </a>
                    </li>

                    <li class="new-item" title='Unpublish'>
                        <a href="<?php echo base_url('index.php/lab/lab_record_list'); ?>" class="nav-link">
                            <img src="<?php echo base_url() ?>/assets/icons/white/unpublish.png" class="img-responsive" />
                            <span class="badge badge-pill" id='unreported_counter'>0</span>
                        </a>
                    </li>

                    <li class="new-item" title='Further Work' >
                        <a href="<?php echo base_url('index.php/lab/view_further_work?fw_page=requested'); ?>" class="nav-link">
                            <img src="<?php echo base_url() ?>/assets/icons/white/Further-work.png" class="img-responsive further-work-img" />
                            <span class="badge badge-pill" id="further_work_counter">0</span>
                        </a>
                    </li>
                    
                <?php endif; ?>
                
                <?php if ($group_type=="D") : ?>
                
                <li class="new-item">
                    <a href="<?php echo base_url('index.php/institute/bookingin'); ?>" class="nav-link">
                        <img src="<?php echo base_url() ?>/assets/icons/add_new.png" class="img-responsive" />
                    </a>
                </li>
                <li class="new-item"><?php $date_year = date('Y'); ?>
                    <a href="<?php echo base_url('index.php/lab/published_reports/' . $date_year . '/all'); ?>" class="nav-link">
                        <img src="<?php echo base_url() ?>/assets/icons/white/publish.png" class="img-responsive" />
                        <span class="badge badge-pill">
                            <?php
                            if (function_exists('uralensis_get_doctor_publish_records_count')) {
                                uralensis_get_doctor_publish_records_count('reported');
                            }
                            ?>
                        </span>
                    </a>
                </li>
                
                <li class="new-item">
                    <a href="<?php echo base_url('lab/lab_record_list'); ?>" class="nav-link">
                        <img src="<?php echo base_url() ?>/assets/icons/white/unpublish.png" class="img-responsive" />
                        <span class="badge badge-pill">
                            <?php
                            if (function_exists('uralensis_get_doctor_publish_records_count')) {
                                uralensis_get_doctor_publish_records_count('unreported');
                            } ?>
                        </span>
                    </a>
                </li>

                <li class="new-item">
                    <a href="<?php echo base_url('index.php/lab/view_further_work?fw_page=requested'); ?>" class="nav-link">
                        <img src="<?php echo base_url() ?>/assets/icons/white/Further-work.png" class="img-responsive further-work-img" />

                        <span class="badge badge-pill">
                            <?php
                            if (function_exists('uralensis_get_doctor_further_work_data_count')) {
                                echo uralensis_get_doctor_further_work_data_count();
                            } ?>
                        </span>
                    </a>
                </li>
                
                <?php endif; ?>
                <li class="new-item" title='Enquiry'>
                    <a href="<?php echo base_url('labEnquiries'); ?>" class="nav-link">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge badge-pill" id="enquiry_count">0</span>
                    </a>
                </li>
                <!-- Notifications -->
                <li class="nav-item dropdown" title='Notification'>
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i> <span class="badge badge-pill" id="notification_counter">0</span>
                    </a>
                    <div class="dropdown-menu notifications notification">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notifications</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">

                                <?php $notification = getNotificationCount($this->ion_auth->user()->row()->id);
                                if (count(getNotificationCount($this->ion_auth->user()->row()->id)) > 0) {

                                    foreach ($notification as $rec) {

                                ?>
                                        <li class="notification-message">
                                            <a href="<?php echo ($rec->redirect_url!=""?base_url($rec->redirect_url):'javascript:void(0)'); ?>">
                                                <div class="media">

                                                    <div class="media-body">
                                                        <p class="noti-details"><?php echo  $rec->notification ?></p>
                                                        <p class="noti-time"><span class="notification-time"><?php echo  date("d,M,Y h:m", strtotime($rec->startdate)) ?></span></p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                <?php

                                    }
                                }
                                ?>

                            </ul>
                            <div class="view_more_btn"><a href="javascript:;"> View More </a></div>
                        </div>
                    </div>
                </li>
               
                <li class="nav-item dropdown hidden">

                    <a href="<?php echo site_url('pm/index'); ?>" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <img src="<?php echo base_url()?>assets/img/comment-bubble-white.png" alt="" class="img-responsive" /> <span class="badge badge-pill"><?php echo count(getUnreadMessagesCounter(intval($this->ion_auth->user()->row()->id)));
                    ?></span>
                    </a>
                    <?php

                    $messagescount = getUnreadMessagesCounter(intval($this->ion_auth->user()->row()->id));
                    if (count($messagescount) > 0) { ?>
                        <div class="dropdown-menu notifications comments">
                            <div class="topnav-dropdown-header">
                                <span class="notification-title"><a href="<?php echo site_url('pm/index'); ?>">Messages</a></span>
                                <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                            </div>
                            <div class="noti-content">
                                <ul class="notification-list">

                                    <?php
                                    $messages = getMessagesForDashbaord(intval($this->ion_auth->user()->row()->id));
                                    foreach ($messages as $rec) {
                                    ?>
                                        <li class="notification-message">
                                            <a href="<?php echo (base_url() . '/pm/message/' . $rec->privmsg_id); ?>">
                                                <div class="list-item">
                                                    <div class="list-left">
                                                        <span class="avatar">
                                                            <?php if ($rec->profile_picture_path != "") { ?>
                                                                <img alt="" src="<?php echo base_url($rec->profile_picture_path); ?>" />
                                                            <?php } else { ?>

                                                                <img alt="" src="<?php echo base_url('/assets/img/dummy-doctors.jpg'); ?>" />
                                                            <?php  } ?>
                                                        </span>
                                                    </div>
                                                    <div class="list-body">
                                                        <span class="message-author"><?php echo  $rec->enc_first_name . " " . $rec->enc_last_name ?> </span>
                                                        <span class="message-time"><?php echo  date("d,M,Y h:m", strtotime($rec->privmsg_date)) ?></span>
                                                        <div class="clearfix"></div>
                                                        <span class="message-content"><?php echo  $rec->privmsg_body ?></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    <?php } ?>

                                </ul>
                            </div>

                            <div class="topnav-dropdown-footer">
                                <a href="<?php echo site_url('pm/index'); ?>">View all Messages</a>
                            </div>

                        </div>
                    <?php } ?>
                </li>
                <!-- /Message Notifications -->
                <li class="nav-item dropdown has-arrow main-drop">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <?php $userinfo = getLoggedInUserProfile(intval($this->ion_auth->user()->row()->id)); ?>
                        <span class="user-img"><img src="<?php echo base_url($userinfo[0]->profile_picture_path); ?>" alt="">
                            <span class="status online"></span></span>
                        <span><?php echo $userinfo[0]->first_name. ' '.$userinfo[0]->last_name; ?></span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?php echo base_url() ?>auth/edit_user/<?php echo  $this->ion_auth->user()->row()->id ?>">My Profile</a>
                       
                        <?php if (in_array($group_type,HOSPITAL_GROUP)) : ?>
                       <a class="dropdown-item" href="<?php echo base_url('institute/settings'); ?>">Settings</a>
                      <?php endif; ?>
                      <?php if (in_array($group_type,LAB_GROUP)) : ?>
                       <a class="dropdown-item" href="<?php echo base_url('laboratory/labsetting'); ?>">Settings</a>
                      <?php endif; ?>
                       
                       
                       
                       
                       
                        <?php if ($_SESSION['admin_id']) { ?>
                            <a class="dropdown-item" href="<?php echo base_url('index.php/institute/switchUserAccountToAdmin/' . $_SESSION['admin_id']); ?>">Logout to Admin</a>

                        <?php
                        } else { ?>
                            <a class="dropdown-item" href="<?php echo base_url('index.php/auth/logout'); ?>">Logout</a>
                        <?php
                        } ?>
                    </div>
                </li>
            </ul>
        <!-- /Header Menu -->
        <!-- Mobile Menu -->
        <div class="dropdown mobile-user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="<?php echo  base_url() ?>auth/edit_user/194">My Profile</a>
                <a class="dropdown-item" href="<?php echo site_url('Settings'); ?>">Settings</a>
                <a class="dropdown-item" href="<?php echo base_url('index.php/auth/logout'); ?>">Logout</a>
            </div>
        </div>
        <!-- /Mobile Menu -->
    </div>
    <!-- /Header -->
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <?php genMenu()?>
            </div>
        </div>
    </div>
    <!-- /Sidebar -->
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid">
        
        
   