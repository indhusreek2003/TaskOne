
<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobLab - Pending Jobs</title>

    <link rel="shortcut icon" type="image/png" href="https://script.viserlab.com/joblab/assets/images/logo_icon/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://script.viserlab.com/joblab/assets/global/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://script.viserlab.com/joblab/assets/admin/css/vendor/bootstrap-toggle.min.css">
    <link rel="stylesheet" href="https://script.viserlab.com/joblab/assets/global/css/all.min.css">
    <link rel="stylesheet" href="https://script.viserlab.com/joblab/assets/global/css/line-awesome.min.css">

    
    <link rel="stylesheet" href="https://script.viserlab.com/joblab/assets/global/css/select2.min.css">
    <link rel="stylesheet" href="https://script.viserlab.com/joblab/assets/admin/css/app.css">

        <style>
        .dropdown-item {
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .dropdown-menu {
            padding: 0;
        }
    </style>
</head>

<body>

            <div class="page-wrapper default-version">
        <div class="sidebar bg--dark">
    <button class="res-sidebar-close-btn"><i class="las la-times"></i></button>
    <div class="sidebar__inner">
        <div class="sidebar__logo">
            <a href="https://script.viserlab.com/joblab/admin/dashboard" class="sidebar__main-logo"><img src="https://script.viserlab.com/joblab/assets/images/logo_icon/logo.png" alt="image"></a>
        </div>
        <div class="sidebar__menu-wrapper">
            <ul class="sidebar__menu">
                                                                                                        <li class="sidebar-menu-item ">
                                                                                                        <li class="sidebar-menu-item active">
                            <a href = "/dashboard" class="nav-link ">
                                <i class="menu-icon las la-home"></i>
                                <span class="menu-title">Dashboard</span>
                                                                                            </a>
                        </li>
                                                                                                                            <li class="sidebar-menu-item ">
                            <a href="/categories" class="nav-link ">
                                <i class="menu-icon las la-stream"></i>
                                <span class="menu-title">Categories</span>
                                                                                            </a>
                        </li>
                                                                                                                            <li class="sidebar-menu-item ">
                            <a href="/roles" class="nav-link ">
                                <i class="menu-icon las la-user-tag"></i>
                                <span class="menu-title">Roles</span>
                                                                                            </a>
                        </li>
                                                                                                                            <li class="sidebar-menu-item ">
                            <a href="/manageindustry" class="nav-link ">
                                <i class="menu-icon las la-industry"></i>
                                <span class="menu-title">Manage Industry</span>
                                                                                            </a>
                        </li>
                                                                                                                            <li class="sidebar-menu-item ">
                            <a href="/managedepartment" class="nav-link ">
                                <i class="menu-icon las la-building"></i>
                                <span class="menu-title">Manage Department</span>
                                                                                            </a>
                        </li>
                                                                                                                            <li class="sidebar-menu-item ">
                            <a href="/manageplan" class="nav-link ">
                                <i class="menu-icon lab la-telegram-plane"></i>
                                <span class="menu-title">Manage Plan</span>
                                                                                            </a>
                        </li>
                                                                                                    <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon las la-clipboard-list"></i>
                                <span class="menu-title">Manage Jobs</span>
                                                                                                            <span class="menu-badge menu-badge-level-one bg--warning ms-auto">
                                            <i class="fas fa-exclamation"></i>
                                        </span>
                                                                    </a>
                            <div class="sidebar-submenu  ">
                                <ul>
                                                                                                                <li class="sidebar-menu-item  ">
                                            <a href="/alljobs" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">All Jobs</span>
                                                                                                                                            </a>
                                        </li>
                                                                                                                <li class="sidebar-menu-item  ">
                                            <a href="/pendingjobs" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">Pending Jobs</span>
                                                                                                                                                    <span class="menu-badge bg--info ms-auto">2</span>
                                                                                            </a>
                                        </li>
                                                                                                                <li class="sidebar-menu-item  ">
                                            <a href="/approvedjobs" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">Approved Jobs</span>
                                                                                                                                            </a>
                                        </li>
                                                                                                                <li class="sidebar-menu-item  ">
                                            <a href="/expiredjobs" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">Expired Jobs</span>
                                                                                                                                            </a>
                                        </li>
                                                                                                                <li class="sidebar-menu-item  ">
                                            <a href="/rejectedjobs" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">Rejected Jobs</span>
                                                                                                                                            </a>
                                        </li>
                                                                    </ul>
                            </div>
                        </li>
                                                                                                    <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon las la-users"></i>
                                <span class="menu-title">Manage Users</span>
                                                                                                                                                                                                                                                                        </a>
                            <div class="sidebar-submenu  ">
                                <ul>
                                                                                                                <li class="sidebar-menu-item  ">
                                            <a href="/activeusers" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">Active Users</span>
                                                                                                                                            </a>
                                        </li>
                                                                                                                <li class="sidebar-menu-item  ">
                                            <a href="/bannedusers" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">Banned Users</span>
                                                                                                                                            </a>
                                        </li>
                                                                                                                <li class="sidebar-menu-item  ">
                                            <a href="/emailunverified" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">Email Unverified</span>
                                                                                                                                            </a>
                                        </li>
                                                                                                                <li class="sidebar-menu-item  ">
                                            <a href="/mobileunverified" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">Mobile Unverified</span>
                                                                                                                                            </a>
                                        </li>
                                                                                                                <li class="sidebar-menu-item  ">
                                            <a href="/allusers" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">All Users</span>
                                                                                                                                            </a>
                                        </li>
                                                                                                                <li class="sidebar-menu-item  ">
                                            <a href="/sendnotification" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">Send Notification</span>
                                                                                                                                            </a>
                                        </li>
                                                                    </ul>
                            </div>
                        </li>
                                                                                                    <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon las la-user-friends"></i>
                                <span class="menu-title">Manage Employers</span>
                                                                                                                                                                                                                                                                        </a>
                            <div class="sidebar-submenu  ">
                                <ul>
                                                                                                                <li class="sidebar-menu-item  ">
                                            <a href="/activeemployers" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">Active Employers</span>
                                                                                                                                            </a>
                                        </li>
                                                                                                                <li class="sidebar-menu-item  ">
                                            <a href="/bannedemployers" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">Banned Employers</span>
                                                                                                                                            </a>
                                        </li>
                                                                                                                <li class="sidebar-menu-item  ">
                                            <a href="/emailunverified" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">Email Unverified</span>
                                                                                                                                            </a>
                                        </li>
                                                                                                                <li class="sidebar-menu-item  ">
                                            <a href="/mobileunverified" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">Mobile Unverified</span>
                                                                                                                                            </a>
                                        </li>
                                                                                                                <li class="sidebar-menu-item  ">
                                            <a href="/withbalance" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">With Balance</span>
                                                                                                                                            </a>
                                        </li>
                                                                                                                <li class="sidebar-menu-item  ">
                                            <a href="/allemployers" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">All Employers</span>
                                                                                                                                            </a>
                                        </li>
                                                                                                                <li class="sidebar-menu-item  ">
                                            <a href="/sendnotification" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">Send Notification</span>
                                                                                                                                            </a>
                                        </li>
                                                                    </ul>
                            </div>
                        </li>
                                                                                                    <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon la la-globe"></i>
                                <span class="menu-title">Manage Location</span>
                                                            </a>
                            <div class="sidebar-submenu  ">
                                <ul>
                                                                                                                <li class="sidebar-menu-item  ">
                                            <a href="/city" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">City</span>
                                                                                                                                            </a>
                                        </li>
                                                                                                                <li class="sidebar-menu-item  ">
                                            <a href="/location" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">Location</span>
                                                                                                                                            </a>
                                        </li>
                                                                    </ul>
                            </div>
                        </li>
                                                                                                    <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon las la-graduation-cap"></i>
                                <span class="menu-title">Manage Education</span>
                                                            </a>
                            <div class="sidebar-submenu  ">
                                <ul>
                                                                                                                <li class="sidebar-menu-item  ">
                                            <a href="/level" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">Level</span>
                                                                                                                                            </a>
                                        </li>
                                                                                                                <li class="sidebar-menu-item  ">
                                            <a href="/degree" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">Degree</span>
                                                                                                                                            </a>
                                        </li>
                                                                                                                <li class="sidebar-menu-item  ">
                                            <a href="/group" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">Group</span>
                                                                                                                                            </a>
                                        </li>
                                                                    </ul>
                            </div>
                        </li>
                                                                                                    <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon las la-list-alt"></i>
                                <span class="menu-title">Manage Basic</span>
                                                            </a>
                            <div class="sidebar-submenu  ">
                                <ul>
                                                                                                                <li class="sidebar-menu-item  ">
                                            <a href="/skill" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">Skill</span>
                                                                                                                                            </a>
                                        </li>
                                                                                                                <li class="sidebar-menu-item  ">
                                            <a href="/experience" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">Experience</span>
                                                                                                                                            </a>
                                        </li>
                                                                                                                <li class="sidebar-menu-item  ">
                                            <a href="/type" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">Type</span>
                                                                                                                                            </a>
                                        </li>
                                                                                                                <li class="sidebar-menu-item  ">
                                            <a href="/shift" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">Shift</span>
                                                                                                                                            </a>
                                        </li>
                                                                                                                <li class="sidebar-menu-item  ">
                                            <a href="/salaryperiod" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">Salary Period</span>
                                                                                                                                            </a>
                                        </li>
                                                                                                                <li class="sidebar-menu-item  ">
                                            <a href="/numberofemployee" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">Number Of Employees</span>
                                                                                                                                            </a>
                                        </li>
                                                                    </ul>
                            </div>
                        </li>
                                                                                                    <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon las la-file-invoice-dollar"></i>
                                <span class="menu-title">Payments</span>
                                                                                                            <span class="menu-badge menu-badge-level-one bg--warning ms-auto">
                                            <i class="fas fa-exclamation"></i>
                                        </span>
                                                                    </a>
                            <div class="sidebar-submenu  ">
                                <ul>
                                                                                                                <li class="sidebar-menu-item  ">
                                            <a href="/pendingpayments" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">Pending Payments</span>
                                                                                                                                                    <span class="menu-badge bg--info ms-auto">24</span>
                                                                                            </a>
                                        </li>
                                                                                                                <li class="sidebar-menu-item  ">
                                            <a href="/approvedpayments" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">Approved Payments</span>
                                                                                                                                            </a>
                                        </li>
                                                                                                                <li class="sidebar-menu-item  ">
                                            <a href="/successfulpayments" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">Successful Payments</span>
                                                                                                                                            </a>
                                        </li>
                                                                                                                <li class="sidebar-menu-item  ">
                                            <a href="/rejectedpayments" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">Rejected Payments</span>
                                                                                                                                            </a>
                                        </li>
                                                                                                                <li class="sidebar-menu-item  ">
                                            <a href="/initiatedpayments" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">Initiated Payments</span>
                                                                                                                                            </a>
                                        </li>
                                                                                                                <li class="sidebar-menu-item  ">
                                            <a href="/allpayments" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">All Payments</span>
                                                                                                                                            </a>
                                        </li>
                                                                    </ul>
                            </div>
                        </li>
                                                                                                    <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon la la-ticket"></i>
                                <span class="menu-title">Support Ticket</span>
                                                                                                            <span class="menu-badge menu-badge-level-one bg--warning ms-auto">
                                            <i class="fas fa-exclamation"></i>
                                        </span>
                                                                    </a>
                            <div class="sidebar-submenu  ">
                                <ul>
                                                                                                                <li class="sidebar-menu-item  ">
                                            <a href="/pendingticket" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">Pending Ticket</span>
                                                                                                                                                    <span class="menu-badge bg--info ms-auto">15</span>
                                                                                            </a>
                                        </li>
                                                                                                                <li class="sidebar-menu-item  ">
                                            <a href="/closedticket" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">Closed Ticket</span>
                                                                                                                                            </a>
                                        </li>
                                                                                                                <li class="sidebar-menu-item  ">
                                            <a href="/answeredticket" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">Answered Ticket</span>
                                                                                                                                            </a>
                                        </li>
                                                                                                                <li class="sidebar-menu-item  ">
                                            <a href="/allticket" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">All Ticket</span>
                                                                                                                                            </a>
                                        </li>
                                                                    </ul>
                            </div>
                        </li>
                                                                                                    <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon la la-list"></i>
                                <span class="menu-title">Report</span>
                                                            </a>
                            <div class="sidebar-submenu  ">
                                <ul>
                                                                                                                <li class="sidebar-menu-item  ">
                                            <a href="/transactionhistory" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">Transaction History</span>
                                                                                                                                            </a>
                                        </li>
                                                                                                                <li class="sidebar-menu-item  ">
                                            <a href="/loginhistory" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">Login History</span>
                                                                                                                                            </a>
                                        </li>
                                                                                                                <li class="sidebar-menu-item  ">
                                            <a href="/notificationhistory" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">Notification History</span>
                                                                                                                                            </a>
                                        </li>
                                                                    </ul>
                            </div>
                        </li>
                                                                                                                            <li class="sidebar-menu-item ">
                            <a href="/subscribers" class="nav-link ">
                                <i class="menu-icon las la-thumbs-up"></i>
                                <span class="menu-title">Subscribers</span>
                                                                                            </a>
                        </li>
                                                                                                                            <li class="sidebar-menu-item ">
                            <a href="/systemsetting" class="nav-link ">
                                <i class="menu-icon las la-life-ring"></i>
                                <span class="menu-title">System Setting</span>
                                                                                            </a>
                        </li>
                                                                                                    <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon la la-server"></i>
                                <span class="menu-title">Extra</span>
                                                                                                                                </a>
                            <div class="sidebar-submenu  ">
                                <ul>
                                                                                                                <li class="sidebar-menu-item  ">
                                            <a href="/application" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">Application</span>
                                                                                                                                            </a>
                                        </li>
                                                                                                                <li class="sidebar-menu-item  ">
                                            <a href="/server" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">Server</span>
                                                                                                                                            </a>
                                        </li>
                                                                                                            <li class="sidebar-menu-item  ">
                                            <a href="/cache" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">Cache</span>
                                                                                                                                            </a>
                                        </li>
                                                                                                                <li class="sidebar-menu-item  ">
                                            <a href="/update" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">Update</span>
                                                                                                                                            </a>
                                        </li>
                                                                    </ul>
                            </div>
                        </li>
                                                                                                                            <li class="sidebar-menu-item ">
                            <a href="
                            /reportandrequest" class="nav-link ">
                                <i class="menu-icon las la-bug"></i>
                                <span class="menu-title">Report &amp; Request</span>
                                                                                            </a>
                        </li>
                                                </ul>
        </div>
        <div class="version-info text-center text-uppercase">
            <span class="text--primary">joblab</span>
            <span class="text--success">V4.0 </span>
        </div>
    </div>
</div>
<!-- sidebar end -->

        <!-- navbar-wrapper start -->
<nav class="navbar-wrapper bg--dark d-flex flex-wrap">
    <div class="navbar__left">
        <button type="button" class="res-sidebar-open-btn me-3"><i class="las la-bars"></i></button>
        <form class="navbar-search">
            <input type="search" name="#0" class="navbar-search-field" id="searchInput" autocomplete="off"
                   placeholder="Search here...">
            <i class="las la-search"></i>
            <ul class="search-list"></ul>
        </form>
    </div>
    <div class="navbar__right">
        <ul class="navbar__action-list">
                        <li>
                <button type="button" class="primary--layer" data-bs-toggle="tooltip" data-bs-placement="bottom"
                        title="Visit Website">
                    <a href="https://script.viserlab.com/joblab" target="_blank"><i class="las la-globe"></i></a>
                </button>
            </li>
            <li class="dropdown">
                <button type="button" class="primary--layer notification-bell" data-bs-toggle="dropdown"
                        data-display="static" aria-haspopup="true" aria-expanded="false">
                    <span data-bs-toggle="tooltip" data-bs-placement="bottom" title="Unread Notifications">
                        <i class="las la-bell  icon-left-right "></i>
                    </span>
                                            <span
                              class="notification-count">9+</span>
                                    </button>
                <div class="dropdown-menu dropdown-menu--md p-0 border-0 box--shadow1 dropdown-menu-right">
                    <div class="dropdown-menu__header">
                        <span class="caption">Notification</span>
                                                    <p>You have 59 unread notification</p>
                                            </div>
                    <div
                         class="dropdown-menu__body ">
                                                    <a href="https://script.viserlab.com/joblab/admin/notification/read/752"
                               class="dropdown-menu__item">
                                <div class="navbar-notifi">
                                    <div class="navbar-notifi__right">
                                        <h6 class="notifi__title">New employer registered</h6>
                                        <span class="time"><i class="far fa-clock"></i>
                                            1 day ago</span>
                                    </div>
                                </div>
                            </a>
                                                    <a href="https://script.viserlab.com/joblab/admin/notification/read/751"
                               class="dropdown-menu__item">
                                <div class="navbar-notifi">
                                    <div class="navbar-notifi__right">
                                        <h6 class="notifi__title">New employer registered</h6>
                                        <span class="time"><i class="far fa-clock"></i>
                                            2 days ago</span>
                                    </div>
                                </div>
                            </a>
                                                    <a href="https://script.viserlab.com/joblab/admin/notification/read/750"
                               class="dropdown-menu__item">
                                <div class="navbar-notifi">
                                    <div class="navbar-notifi__right">
                                        <h6 class="notifi__title">New employer registered</h6>
                                        <span class="time"><i class="far fa-clock"></i>
                                            3 days ago</span>
                                    </div>
                                </div>
                            </a>
                                                    <a href="https://script.viserlab.com/joblab/admin/notification/read/749"
                               class="dropdown-menu__item">
                                <div class="navbar-notifi">
                                    <div class="navbar-notifi__right">
                                        <h6 class="notifi__title">New employer registered</h6>
                                        <span class="time"><i class="far fa-clock"></i>
                                            3 days ago</span>
                                    </div>
                                </div>
                            </a>
                                                    <a href="https://script.viserlab.com/joblab/admin/notification/read/748"
                               class="dropdown-menu__item">
                                <div class="navbar-notifi">
                                    <div class="navbar-notifi__right">
                                        <h6 class="notifi__title">New member registered</h6>
                                        <span class="time"><i class="far fa-clock"></i>
                                            3 days ago</span>
                                    </div>
                                </div>
                            </a>
                                                    <a href="https://script.viserlab.com/joblab/admin/notification/read/747"
                               class="dropdown-menu__item">
                                <div class="navbar-notifi">
                                    <div class="navbar-notifi__right">
                                        <h6 class="notifi__title">New employer registered</h6>
                                        <span class="time"><i class="far fa-clock"></i>
                                            5 days ago</span>
                                    </div>
                                </div>
                            </a>
                                                    <a href="https://script.viserlab.com/joblab/admin/notification/read/746"
                               class="dropdown-menu__item">
                                <div class="navbar-notifi">
                                    <div class="navbar-notifi__right">
                                        <h6 class="notifi__title">New member registered</h6>
                                        <span class="time"><i class="far fa-clock"></i>
                                            5 days ago</span>
                                    </div>
                                </div>
                            </a>
                                                    <a href="https://script.viserlab.com/joblab/admin/notification/read/745"
                               class="dropdown-menu__item">
                                <div class="navbar-notifi">
                                    <div class="navbar-notifi__right">
                                        <h6 class="notifi__title">New employer registered</h6>
                                        <span class="time"><i class="far fa-clock"></i>
                                            5 days ago</span>
                                    </div>
                                </div>
                            </a>
                                                    <a href="https://script.viserlab.com/joblab/admin/notification/read/744"
                               class="dropdown-menu__item">
                                <div class="navbar-notifi">
                                    <div class="navbar-notifi__right">
                                        <h6 class="notifi__title">New member registered</h6>
                                        <span class="time"><i class="far fa-clock"></i>
                                            5 days ago</span>
                                    </div>
                                </div>
                            </a>
                                                    <a href="https://script.viserlab.com/joblab/admin/notification/read/743"
                               class="dropdown-menu__item">
                                <div class="navbar-notifi">
                                    <div class="navbar-notifi__right">
                                        <h6 class="notifi__title">New member registered</h6>
                                        <span class="time"><i class="far fa-clock"></i>
                                            1 week ago</span>
                                    </div>
                                </div>
                            </a>
                                            </div>
                    <div class="dropdown-menu__footer">
                        <a href="https://script.viserlab.com/joblab/admin/notifications" class="view-all-message">View all notifications</a>
                    </div>
                </div>
            </li>
            <li>
                <button type="button" class="primary--layer" data-bs-toggle="tooltip" data-bs-placement="bottom"
                        title="System Setting">
                    <a href="https://script.viserlab.com/joblab/admin/system-setting"><i class="las la-wrench"></i></a>
                </button>
            </li>
            <li class="dropdown d-flex profile-dropdown">
                <button type="button" data-bs-toggle="dropdown" data-display="static" aria-haspopup="true"
                        aria-expanded="false">
                    <span class="navbar-user">
                        <span class="navbar-user__thumb"><img
                                 src="https://script.viserlab.com/joblab/assets/admin/images/profile/687ceb076e9e21753017095.png"
                                 alt="image"></span>
                        <span class="navbar-user__info">
                            <span class="navbar-user__name">admin</span>
                        </span>
                        <span class="icon"><i class="las la-chevron-circle-down"></i></span>
                    </span>
                </button>
                <div class="dropdown-menu dropdown-menu--sm p-0 border-0 box--shadow1 dropdown-menu-right">
                    <a href="https://script.viserlab.com/joblab/admin/profile"
                       class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                        <i class="dropdown-menu__icon las la-user-circle"></i>
                        <span class="dropdown-menu__caption">Profile</span>
                    </a>

                    <a href="https://script.viserlab.com/joblab/admin/password"
                       class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                        <i class="dropdown-menu__icon las la-key"></i>
                        <span class="dropdown-menu__caption">Password</span>
                    </a>

                    <a href="https://script.viserlab.com/joblab/admin/logout"
                       class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                        <i class="dropdown-menu__icon las la-sign-out-alt"></i>
                        <span class="dropdown-menu__caption">Logout</span>
                    </a>
                </div>
                <button type="button" class="breadcrumb-nav-open ms-2 d-none">
                    <i class="las la-sliders-h"></i>
                </button>
            </li>
        </ul>
    </div>
</nav>
<!-- navbar-wrapper end -->

        <div class="container-fluid px-3 px-sm-0">
            <div class="body-wrapper">
                <div class="bodywrapper__inner">
                                        <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
    <h6 class="page-title">Pending Jobs</h6>
    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
            </div>
</div>

                        <div class="row">
        <div class="col-lg-12">
            <div class="show-filter mb-3 text-end w-100">
                <button type="button" class="btn btn-outline--primary showFilterBtn btn-sm">
                    <i class="las la-filter"></i>Filter                </button>
            </div>
                        <div class="card responsive-filter-card mb-4">
                <div class="card-body">
                    <form>
                        <div class="d-flex flex-wrap gap-4">
                            <div class="flex-grow-1">
                                <label>Job Title / Company Name</label>
                                <input type="text" name="search" value="" class="form-control">
                            </div>
                            <div class="flex-grow-1">
                                <label>Category</label>
                                <select name="category_id" class="form-control select2">
                                    <option value="">All</option>
                                                                            <option value="1" >
                                            Accounting/Finance</option>
                                                                            <option value="2" >
                                            Production/Operation</option>
                                                                            <option value="3" >
                                            Bank/Non-Bank Fin .Institution</option>
                                                                            <option value="4" >
                                            Education/Training</option>
                                                                            <option value="5" >
                                            Engineer/Architects</option>
                                                                            <option value="6" >
                                            Design/Creative</option>
                                                                            <option value="7" >
                                            Health and Fitness</option>
                                                                            <option value="8" >
                                            It &amp; Telecommunication</option>
                                                                            <option value="9" >
                                            Customer Support</option>
                                                                            <option value="10" >
                                            Call Center</option>
                                                                            <option value="11" >
                                            Research / Consultancy</option>
                                                                            <option value="12" >
                                            Data Entry/Operator</option>
                                                                            <option value="13" >
                                            Security/Support</option>
                                                                            <option value="14" >
                                            Data Entry / Operator</option>
                                                                            <option value="15" >
                                            Sales &amp; Marketing</option>
                                                                            <option value="16" >
                                            Logistics &amp; Supply Chain</option>
                                                                    </select>
                            </div>
                            <div class="flex-grow-1">
                                <label>Types</label>
                                <select name="type_id" class="form-control select2">
                                    <option value="">All</option>
                                                                            <option value="1" >
                                            Full Job</option>
                                                                            <option value="2" >
                                            Part Time</option>
                                                                            <option value="3" >
                                            Full Time</option>
                                                                    </select>
                            </div>
                            <div class="flex-grow-1">
                                <label>Shift</label>
                                <select name="shift_id" class="form-control select2">
                                    <option value="">All</option>
                                                                            <option value="1" >
                                            Third Shift</option>
                                                                            <option value="2" >
                                            Day Shift</option>
                                                                            <option value="3" >
                                            First shift</option>
                                                                            <option value="4" >
                                            Night Shift</option>
                                                                    </select>
                            </div>
                            <div class="flex-grow-1">
                                <label>Location</label>
                                <select name="location_id" class="form-control select2">
                                    <option value="">All</option>
                                                                            <option value="1" >
                                            New York</option>
                                                                            <option value="2" >
                                            Manhattan</option>
                                                                            <option value="3" >
                                            Brooklyn</option>
                                                                            <option value="4" >
                                            Queens</option>
                                                                            <option value="5" >
                                            Bronx</option>
                                                                            <option value="6" >
                                            Staten Island</option>
                                                                            <option value="7" >
                                            Harlem</option>
                                                                            <option value="8" >
                                            Chelsea</option>
                                                                            <option value="9" >
                                            SoHo</option>
                                                                            <option value="10" >
                                            Upper East Side</option>
                                                                            <option value="11" >
                                            Tribeca</option>
                                                                            <option value="12" >
                                            Los Angeles</option>
                                                                            <option value="13" >
                                            Hollywood</option>
                                                                            <option value="14" >
                                            Beverly Hills</option>
                                                                            <option value="15" >
                                            Santa Monica</option>
                                                                            <option value="16" >
                                            Venice</option>
                                                                            <option value="17" >
                                            Downtown LA</option>
                                                                            <option value="18" >
                                            Pasadena</option>
                                                                            <option value="19" >
                                            Burbank</option>
                                                                            <option value="20" >
                                            Glendale</option>
                                                                            <option value="21" >
                                            Echo Park</option>
                                                                            <option value="22" >
                                            Culver City</option>
                                                                            <option value="23" >
                                            Chicago</option>
                                                                            <option value="24" >
                                            The Loop</option>
                                                                            <option value="25" >
                                            River North</option>
                                                                            <option value="26" >
                                            Lincoln Park</option>
                                                                            <option value="27" >
                                            Hyde Park</option>
                                                                            <option value="28" >
                                            Englewood</option>
                                                                            <option value="29" >
                                            Chinatown</option>
                                                                            <option value="30" >
                                            Wicker Park</option>
                                                                            <option value="31" >
                                            Bronzeville</option>
                                                                            <option value="32" >
                                            South Loop</option>
                                                                            <option value="33" >
                                            Old Town</option>
                                                                            <option value="34" >
                                            Houston</option>
                                                                            <option value="35" >
                                            Downtown</option>
                                                                            <option value="36" >
                                            Midtown</option>
                                                                            <option value="37" >
                                            Uptown</option>
                                                                            <option value="38" >
                                            Montrose</option>
                                                                            <option value="39" >
                                            The Heights</option>
                                                                            <option value="40" >
                                            River Oaks</option>
                                                                            <option value="41" >
                                            Westchase</option>
                                                                            <option value="42" >
                                            Museum District</option>
                                                                            <option value="43" >
                                            Galleria</option>
                                                                            <option value="44" >
                                            EaDo</option>
                                                                            <option value="45" >
                                            London</option>
                                                                            <option value="46" >
                                            Chelsea</option>
                                                                            <option value="47" >
                                            Kensington</option>
                                                                            <option value="48" >
                                            Camden</option>
                                                                            <option value="49" >
                                            Islington</option>
                                                                            <option value="50" >
                                            Greenwich</option>
                                                                            <option value="51" >
                                            Hackney</option>
                                                                            <option value="52" >
                                            Westminster</option>
                                                                            <option value="53" >
                                            Hammersmith</option>
                                                                            <option value="54" >
                                            Stratford</option>
                                                                            <option value="55" >
                                            Notting Hill</option>
                                                                            <option value="56" >
                                            Toronto</option>
                                                                            <option value="57" >
                                            Downtown</option>
                                                                            <option value="58" >
                                            Scarborough</option>
                                                                            <option value="59" >
                                            North York</option>
                                                                            <option value="60" >
                                            Etobicoke</option>
                                                                            <option value="61" >
                                            York</option>
                                                                            <option value="62" >
                                            Liberty Village</option>
                                                                            <option value="63" >
                                            The Annex</option>
                                                                            <option value="64" >
                                            Chinatown</option>
                                                                            <option value="65" >
                                            Kensington Market</option>
                                                                            <option value="66" >
                                            Bloor West</option>
                                                                            <option value="67" >
                                            Mumbai</option>
                                                                            <option value="68" >
                                            Andheri</option>
                                                                            <option value="69" >
                                            Bandra</option>
                                                                            <option value="70" >
                                            Juhu</option>
                                                                            <option value="71" >
                                            Dadar</option>
                                                                            <option value="72" >
                                            Colaba</option>
                                                                            <option value="73" >
                                            Borivali</option>
                                                                            <option value="74" >
                                            Goregaon</option>
                                                                            <option value="75" >
                                            Malad</option>
                                                                            <option value="76" >
                                            Powai</option>
                                                                            <option value="77" >
                                            Worli</option>
                                                                            <option value="78" >
                                            Sydney</option>
                                                                            <option value="79" >
                                            Sydney CBD</option>
                                                                            <option value="80" >
                                            Bondi</option>
                                                                            <option value="81" >
                                            Parramatta</option>
                                                                            <option value="82" >
                                            Newtown</option>
                                                                            <option value="83" >
                                            Manly</option>
                                                                            <option value="84" >
                                            Chatswood</option>
                                                                            <option value="85" >
                                            Surry Hills</option>
                                                                            <option value="86" >
                                            North Sydney</option>
                                                                            <option value="87" >
                                            Glebe</option>
                                                                            <option value="88" >
                                            Redfern</option>
                                                                            <option value="89" >
                                            Dubai</option>
                                                                            <option value="90" >
                                            Downtown Dubai</option>
                                                                            <option value="91" >
                                            Jumeirah</option>
                                                                            <option value="92" >
                                            Deira</option>
                                                                            <option value="93" >
                                            Bur Dubai</option>
                                                                            <option value="94" >
                                            Dubai Marina</option>
                                                                            <option value="95" >
                                            Al Barsha</option>
                                                                            <option value="96" >
                                            Business Bay</option>
                                                                            <option value="97" >
                                            JLT</option>
                                                                            <option value="98" >
                                            Palm Jumeirah</option>
                                                                            <option value="99" >
                                            Al Quoz</option>
                                                                            <option value="100" >
                                            Cape Town</option>
                                                                            <option value="101" >
                                            City Bowl</option>
                                                                            <option value="102" >
                                            Sea Point</option>
                                                                            <option value="103" >
                                            Green Point</option>
                                                                            <option value="104" >
                                            Camps Bay</option>
                                                                            <option value="105" >
                                            Claremont</option>
                                                                            <option value="106" >
                                            Observatory</option>
                                                                            <option value="107" >
                                            Rondebosch</option>
                                                                            <option value="108" >
                                            Newlands</option>
                                                                            <option value="109" >
                                            Table View</option>
                                                                            <option value="110" >
                                            Woodstock</option>
                                                                    </select>
                            </div>
                            <div class="flex-grow-1 align-self-end">
                                <button class="btn btn--primary w-100 h-45">
                                    <i class="fas fa-filter"></i>Filter                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card  ">
                <div class="card-body p-0">
                    <div class="table-responsive--md  table-responsive">
                        <table class="table table--light style--two">
                            <thead>
                                <tr>
                                    <th>Title | Employer</th>
                                    <th>Vacancy</th>
                                    <th>Deadline</th>
                                    <th>Total Applications</th>
                                    <th>Featured</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                                                    <tr>
                                        <td>
                                            <span class="d-block">dsa</span>
                                            <a class="text--small"
                                                href="https://script.viserlab.com/joblab/admin/employers/detail/12">Nova Labs</a>
                                        </td>
                                        <td><span class="d-block">2</span></td>
                                        <td><span class="text--small">2025-09-27</span></td>
                                        <td>
                                            <a href="https://script.viserlab.com/joblab/admin/jobs/apply/list/1646"
                                                class="badge badge--primary">
                                                0
                                            </a>
                                        </td>
                                        <td>
                                                                                            <span class="badge badge--dark">No</span> <br>
                                                                                    </td>
                                        <td> <span class="badge badge--warning">Pending</span> </td>
                                        <td>
                                            <button class="btn btn-sm btn-outline--info" data-bs-toggle="dropdown"
                                                type="button" aria-expanded="false">
                                                <i class="las la-ellipsis-v"></i>
                                                Action                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item"
                                                    href="https://script.viserlab.com/joblab/admin/jobs/details/1646">
                                                    <i class="las la-desktop"></i> Details                                                </a>
                                                                                                                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <span class="d-block">Example Job Title 1</span>
                                            <a class="text--small"
                                                href="https://script.viserlab.com/joblab/admin/employers/detail/12">Nova Labs</a>
                                        </td>
                                        <td><span class="d-block">3</span></td>
                                        <td><span class="text--small">2025-09-30</span></td>
                                        <td>
                                            <a href="https://script.viserlab.com/joblab/admin/jobs/apply/list/1645"
                                                class="badge badge--primary">
                                                0
                                            </a>
                                        </td>
                                        <td>
                                                                                            <span class="badge badge--dark">No</span> <br>
                                                                                    </td>
                                        <td> <span class="badge badge--warning">Pending</span> </td>
                                        <td>
                                            <button class="btn btn-sm btn-outline--info" data-bs-toggle="dropdown"
                                                type="button" aria-expanded="false">
                                                <i class="las la-ellipsis-v"></i>
                                                Action                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item"
                                                    href="https://script.viserlab.com/joblab/admin/jobs/details/1645">
                                                    <i class="las la-desktop"></i> Details                                                </a>
                                                                                                                                            </div>
                                        </td>
                                    </tr>
                                                            </tbody>
                        </table>
                    </div>
                </div>
                            </div>
        </div>
    </div>

    <div id="confirmationModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirmation Alert!</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="las la-times"></i>
                </button>
            </div>
            <form method="POST">
                <input type="hidden" name="_token" value="mkOlhbyqrh1Q2LPKC9ITx8ffzfXGQZlmjPvouVlQ" autocomplete="off">                <div class="modal-body">
                    <p class="question"></p>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn--dark" data-bs-dismiss="modal">No</button>
                    <button type="submit" class="btn btn--primary">Yes</button>
                </div>
            </form>
        </div>
    </div>
</div>

                </div>
            </div>
        </div>
    </div>
    
    <script src="https://script.viserlab.com/joblab/assets/global/js/jquery-3.7.1.min.js"></script>
    <script src="https://script.viserlab.com/joblab/assets/global/js/bootstrap.bundle.min.js"></script>
    <script src="https://script.viserlab.com/joblab/assets/admin/js/vendor/bootstrap-toggle.min.js"></script>

    <link href="https://script.viserlab.com/joblab/assets/global/css/iziToast.min.css" rel="stylesheet">
<link href="https://script.viserlab.com/joblab/assets/global/css/iziToast_custom.css" rel="stylesheet">
<script src="https://script.viserlab.com/joblab/assets/global/js/iziToast.min.js"></script>

<script>
    "use strict";
    const colors = {
        success: '#28c76f',
        error: '#eb2222',
        warning: '#ff9f43',
        info: '#1e9ff2',
    }

    const icons = {
        success: 'fas fa-check-circle',
        error: 'fas fa-times-circle',
        warning: 'fas fa-exclamation-triangle',
        info: 'fas fa-exclamation-circle',
    }

    const notifications = [];
    const errors = [];


    const triggerToaster = (status, message) => {
        iziToast[status]({
            title: status.charAt(0).toUpperCase() + status.slice(1),
            message: message,
            position: "topRight",
            backgroundColor: '#fff',
            icon: icons[status],
            iconColor: colors[status],
            progressBarColor: colors[status],
            titleSize: '1rem',
            messageSize: '1rem',
            titleColor: '#474747',
            messageColor: '#a2a2a2',
            transitionIn: 'obunceInLeft'
        });
    }

    if (notifications.length) {
        notifications.forEach(element => {
            triggerToaster(element[0], element[1]);
        });
    }

    if (errors.length) {
        errors.forEach(error => {
            triggerToaster('error', error);
        });
    }

    function notify(status, message) {
        if (typeof message == 'string') {
            triggerToaster(status, message);
        } else {
            $.each(message, (i, val) => triggerToaster(status, val));
        }
    }
</script>
    
    <script src="https://script.viserlab.com/joblab/assets/global/js/nicEdit.js"></script>
    <script src="https://script.viserlab.com/joblab/assets/global/js/select2.min.js"></script>
    <script src="https://script.viserlab.com/joblab/assets/admin/js/app.js"></script>

    
    <script>
        "use strict";
        bkLib.onDomLoaded(function() {
            $(".nicEdit").each(function(index) {
                $(this).attr("id", "nicEditor" + index);
                new nicEditor({
                    fullPanel: true
                }).panelInstance('nicEditor' + index, {
                    hasPanel: true
                });
            });
        });
        (function($) {
            $(document).on('mouseover ', '.nicEdit-main,.nicEdit-panelContain', function() {
                $('.nicEdit-main').focus();
            });

            $('.breadcrumb-nav-open').on('click', function() {
                $(this).toggleClass('active');
                $('.breadcrumb-nav').toggleClass('active');
            });

            $('.breadcrumb-nav-close').on('click', function() {
                $('.breadcrumb-nav').removeClass('active');
            });

            if ($('.topTap').length) {
                $('.breadcrumb-nav-open').removeClass('d-none');
            }
        })(jQuery);
    </script>

    
<script>
    (function ($) {
        "use strict";
        $(document).on('click','.confirmationBtn', function () {
            var modal   = $('#confirmationModal');
            let data    = $(this).data();
            modal.find('.question').text(`${data.question}`);
            modal.find('form').attr('action', `${data.action}`);
            modal.modal('show');
        });
    })(jQuery);
</script>
    <script>
        if($('li').hasClass('active')){
            $('.sidebar__menu-wrapper').animate({
                scrollTop: eval($(".active").offset().top - 320)
            },500);
        }
    </script>
    <script>
        "use strict";
        var routes = [{"admin.login":"https:\/\/script.viserlab.com\/joblab\/admin"},{"admin.login":"https:\/\/script.viserlab.com\/joblab\/admin"},{"admin.logout":"https:\/\/script.viserlab.com\/joblab\/admin\/logout"},{"admin.password.reset":"https:\/\/script.viserlab.com\/joblab\/admin\/password\/reset"},{"admin.password.":"https:\/\/script.viserlab.com\/joblab\/admin\/password\/reset"},{"admin.password.code.verify":"https:\/\/script.viserlab.com\/joblab\/admin\/password\/code-verify"},{"admin.password.verify.code":"https:\/\/script.viserlab.com\/joblab\/admin\/password\/verify-code"},{"admin.password.reset.form":"https:\/\/script.viserlab.com\/joblab\/admin\/password\/reset\/{token}"},{"admin.password.change":"https:\/\/script.viserlab.com\/joblab\/admin\/password\/reset\/change"},{"admin.dashboard":"https:\/\/script.viserlab.com\/joblab\/admin\/dashboard"},{"admin.chart.deposit.withdraw":"https:\/\/script.viserlab.com\/joblab\/admin\/chart\/deposit-withdraw"},{"admin.chart.transaction":"https:\/\/script.viserlab.com\/joblab\/admin\/chart\/transaction"},{"admin.profile":"https:\/\/script.viserlab.com\/joblab\/admin\/profile"},{"admin.profile.update":"https:\/\/script.viserlab.com\/joblab\/admin\/profile"},{"admin.password":"https:\/\/script.viserlab.com\/joblab\/admin\/password"},{"admin.password.update":"https:\/\/script.viserlab.com\/joblab\/admin\/password"},{"admin.notifications":"https:\/\/script.viserlab.com\/joblab\/admin\/notifications"},{"admin.notification.read":"https:\/\/script.viserlab.com\/joblab\/admin\/notification\/read\/{id}"},{"admin.notifications.read.all":"https:\/\/script.viserlab.com\/joblab\/admin\/notifications\/read-all"},{"admin.notifications.delete.all":"https:\/\/script.viserlab.com\/joblab\/admin\/notifications\/delete-all"},{"admin.notifications.delete.single":"https:\/\/script.viserlab.com\/joblab\/admin\/notifications\/delete-single\/{id}"},{"admin.request.report":"https:\/\/script.viserlab.com\/joblab\/admin\/request-report"},{"admin.":"https:\/\/script.viserlab.com\/joblab\/admin\/request-report"},{"admin.download.attachment":"https:\/\/script.viserlab.com\/joblab\/admin\/download-attachments\/{file_hash}"},{"admin.users.all":"https:\/\/script.viserlab.com\/joblab\/admin\/users"},{"admin.users.active":"https:\/\/script.viserlab.com\/joblab\/admin\/users\/active"},{"admin.users.banned":"https:\/\/script.viserlab.com\/joblab\/admin\/users\/banned"},{"admin.users.email.verified":"https:\/\/script.viserlab.com\/joblab\/admin\/users\/email-verified"},{"admin.users.email.unverified":"https:\/\/script.viserlab.com\/joblab\/admin\/users\/email-unverified"},{"admin.users.mobile.unverified":"https:\/\/script.viserlab.com\/joblab\/admin\/users\/mobile-unverified"},{"admin.users.mobile.verified":"https:\/\/script.viserlab.com\/joblab\/admin\/users\/mobile-verified"},{"admin.users.detail":"https:\/\/script.viserlab.com\/joblab\/admin\/users\/detail\/{id}"},{"admin.users.update":"https:\/\/script.viserlab.com\/joblab\/admin\/users\/update\/{id}"},{"admin.users.add.sub.balance":"https:\/\/script.viserlab.com\/joblab\/admin\/users\/add-sub-balance\/{id}"},{"admin.users.notification.single":"https:\/\/script.viserlab.com\/joblab\/admin\/users\/send-notification\/{id}"},{"admin.users.notification.single":"https:\/\/script.viserlab.com\/joblab\/admin\/users\/send-notification\/{id}"},{"admin.users.login":"https:\/\/script.viserlab.com\/joblab\/admin\/users\/login\/{id}"},{"admin.users.status":"https:\/\/script.viserlab.com\/joblab\/admin\/users\/status\/{id}"},{"admin.users.notification.all":"https:\/\/script.viserlab.com\/joblab\/admin\/users\/send-notification"},{"admin.users.notification.all.send":"https:\/\/script.viserlab.com\/joblab\/admin\/users\/send-notification"},{"admin.users.list":"https:\/\/script.viserlab.com\/joblab\/admin\/users\/list"},{"admin.users.segment.count":"https:\/\/script.viserlab.com\/joblab\/admin\/users\/count-by-segment\/{methodName}"},{"admin.users.notification.log":"https:\/\/script.viserlab.com\/joblab\/admin\/users\/notification-log\/{id}"},{"admin.users.employment.history":"https:\/\/script.viserlab.com\/joblab\/admin\/users\/employment-history\/{id}"},{"admin.users.educational.qualification":"https:\/\/script.viserlab.com\/joblab\/admin\/users\/educational-qualification\/{i}"},{"admin.users.applied.job":"https:\/\/script.viserlab.com\/joblab\/admin\/users\/applied\/job\/{id}"},{"admin.employers.all":"https:\/\/script.viserlab.com\/joblab\/admin\/employers"},{"admin.employers.featured":"https:\/\/script.viserlab.com\/joblab\/admin\/employers\/featured\/{id}"},{"admin.employers.active":"https:\/\/script.viserlab.com\/joblab\/admin\/employers\/active"},{"admin.employers.banned":"https:\/\/script.viserlab.com\/joblab\/admin\/employers\/banned"},{"admin.employers.email.verified":"https:\/\/script.viserlab.com\/joblab\/admin\/employers\/email-verified"},{"admin.employers.email.unverified":"https:\/\/script.viserlab.com\/joblab\/admin\/employers\/email-unverified"},{"admin.employers.mobile.unverified":"https:\/\/script.viserlab.com\/joblab\/admin\/employers\/mobile-unverified"},{"admin.employers.mobile.verified":"https:\/\/script.viserlab.com\/joblab\/admin\/employers\/mobile-verified"},{"admin.employers.with.balance":"https:\/\/script.viserlab.com\/joblab\/admin\/employers\/with-balance"},{"admin.employers.add.sub.balance":"https:\/\/script.viserlab.com\/joblab\/admin\/employers\/add-sub-balance\/{id}"},{"admin.employers.detail":"https:\/\/script.viserlab.com\/joblab\/admin\/employers\/detail\/{id}"},{"admin.employers.update":"https:\/\/script.viserlab.com\/joblab\/admin\/employers\/update\/{id}"},{"admin.employers.notification.single":"https:\/\/script.viserlab.com\/joblab\/admin\/employers\/send-notification\/{id}"},{"admin.employers.notification.single":"https:\/\/script.viserlab.com\/joblab\/admin\/employers\/send-notification\/{id}"},{"admin.employers.login":"https:\/\/script.viserlab.com\/joblab\/admin\/employers\/login\/{id}"},{"admin.employers.status":"https:\/\/script.viserlab.com\/joblab\/admin\/employers\/status\/{id}"},{"admin.employers.notification.all":"https:\/\/script.viserlab.com\/joblab\/admin\/employers\/send-notification"},{"admin.employers.notification.all.send":"https:\/\/script.viserlab.com\/joblab\/admin\/employers\/send-notification"},{"admin.employers.list":"https:\/\/script.viserlab.com\/joblab\/admin\/employers\/list"},{"admin.employers.segment.count":"https:\/\/script.viserlab.com\/joblab\/admin\/employers\/count-by-segment\/{methodName}"},{"admin.employers.notification.log":"https:\/\/script.viserlab.com\/joblab\/admin\/employers\/notification-log\/{id}"},{"admin.subscriber.index":"https:\/\/script.viserlab.com\/joblab\/admin\/subscriber"},{"admin.subscriber.send.email":"https:\/\/script.viserlab.com\/joblab\/admin\/subscriber\/send-email"},{"admin.subscriber.remove":"https:\/\/script.viserlab.com\/joblab\/admin\/subscriber\/remove\/{id}"},{"admin.subscriber.send.email":"https:\/\/script.viserlab.com\/joblab\/admin\/subscriber\/send-email"},{"admin.gateway.automatic.index":"https:\/\/script.viserlab.com\/joblab\/admin\/gateway\/automatic"},{"admin.gateway.automatic.edit":"https:\/\/script.viserlab.com\/joblab\/admin\/gateway\/automatic\/edit\/{alias}"},{"admin.gateway.automatic.update":"https:\/\/script.viserlab.com\/joblab\/admin\/gateway\/automatic\/update\/{code}"},{"admin.gateway.automatic.remove":"https:\/\/script.viserlab.com\/joblab\/admin\/gateway\/automatic\/remove\/{id}"},{"admin.gateway.automatic.status":"https:\/\/script.viserlab.com\/joblab\/admin\/gateway\/automatic\/status\/{id}"},{"admin.gateway.manual.index":"https:\/\/script.viserlab.com\/joblab\/admin\/gateway\/manual"},{"admin.gateway.manual.create":"https:\/\/script.viserlab.com\/joblab\/admin\/gateway\/manual\/new"},{"admin.gateway.manual.store":"https:\/\/script.viserlab.com\/joblab\/admin\/gateway\/manual\/new"},{"admin.gateway.manual.edit":"https:\/\/script.viserlab.com\/joblab\/admin\/gateway\/manual\/edit\/{alias}"},{"admin.gateway.manual.update":"https:\/\/script.viserlab.com\/joblab\/admin\/gateway\/manual\/update\/{id}"},{"admin.gateway.manual.status":"https:\/\/script.viserlab.com\/joblab\/admin\/gateway\/manual\/status\/{id}"},{"admin.deposit.list":"https:\/\/script.viserlab.com\/joblab\/admin\/payment\/all\/{user_id?}"},{"admin.deposit.pending":"https:\/\/script.viserlab.com\/joblab\/admin\/payment\/pending\/{user_id?}"},{"admin.deposit.rejected":"https:\/\/script.viserlab.com\/joblab\/admin\/payment\/rejected\/{user_id?}"},{"admin.deposit.approved":"https:\/\/script.viserlab.com\/joblab\/admin\/payment\/approved\/{user_id?}"},{"admin.deposit.successful":"https:\/\/script.viserlab.com\/joblab\/admin\/payment\/successful\/{user_id?}"},{"admin.deposit.initiated":"https:\/\/script.viserlab.com\/joblab\/admin\/payment\/initiated\/{user_id?}"},{"admin.deposit.details":"https:\/\/script.viserlab.com\/joblab\/admin\/payment\/details\/{id}"},{"admin.deposit.reject":"https:\/\/script.viserlab.com\/joblab\/admin\/payment\/reject"},{"admin.deposit.approve":"https:\/\/script.viserlab.com\/joblab\/admin\/payment\/approve\/{id}"},{"admin.report.transaction":"https:\/\/script.viserlab.com\/joblab\/admin\/report\/transaction\/{user_id?}"},{"admin.report.login.history":"https:\/\/script.viserlab.com\/joblab\/admin\/report\/login\/history"},{"admin.report.login.ipHistory":"https:\/\/script.viserlab.com\/joblab\/admin\/report\/login\/ipHistory\/{ip}"},{"admin.report.notification.history":"https:\/\/script.viserlab.com\/joblab\/admin\/report\/notification\/history"},{"admin.report.email.details":"https:\/\/script.viserlab.com\/joblab\/admin\/report\/email\/detail\/{id}"},{"admin.ticket.index":"https:\/\/script.viserlab.com\/joblab\/admin\/ticket"},{"admin.ticket.pending":"https:\/\/script.viserlab.com\/joblab\/admin\/ticket\/pending"},{"admin.ticket.closed":"https:\/\/script.viserlab.com\/joblab\/admin\/ticket\/closed"},{"admin.ticket.answered":"https:\/\/script.viserlab.com\/joblab\/admin\/ticket\/answered"},{"admin.ticket.view":"https:\/\/script.viserlab.com\/joblab\/admin\/ticket\/view\/{id}"},{"admin.ticket.reply":"https:\/\/script.viserlab.com\/joblab\/admin\/ticket\/reply\/{id}"},{"admin.ticket.close":"https:\/\/script.viserlab.com\/joblab\/admin\/ticket\/close\/{id}"},{"admin.ticket.download":"https:\/\/script.viserlab.com\/joblab\/admin\/ticket\/download\/{attachment_id}"},{"admin.ticket.delete":"https:\/\/script.viserlab.com\/joblab\/admin\/ticket\/delete\/{id}"},{"admin.language.manage":"https:\/\/script.viserlab.com\/joblab\/admin\/language"},{"admin.language.manage.store":"https:\/\/script.viserlab.com\/joblab\/admin\/language"},{"admin.language.manage.delete":"https:\/\/script.viserlab.com\/joblab\/admin\/language\/delete\/{id}"},{"admin.language.manage.update":"https:\/\/script.viserlab.com\/joblab\/admin\/language\/update\/{id}"},{"admin.language.key":"https:\/\/script.viserlab.com\/joblab\/admin\/language\/edit\/{id}"},{"admin.language.import.lang":"https:\/\/script.viserlab.com\/joblab\/admin\/language\/import"},{"admin.language.store.key":"https:\/\/script.viserlab.com\/joblab\/admin\/language\/store\/key\/{id}"},{"admin.language.delete.key":"https:\/\/script.viserlab.com\/joblab\/admin\/language\/delete\/key\/{id}"},{"admin.language.update.key":"https:\/\/script.viserlab.com\/joblab\/admin\/language\/update\/key\/{id}"},{"admin.language.get.key":"https:\/\/script.viserlab.com\/joblab\/admin\/language\/get-keys"},{"admin.setting.system":"https:\/\/script.viserlab.com\/joblab\/admin\/system-setting"},{"admin.setting.general":"https:\/\/script.viserlab.com\/joblab\/admin\/general-setting"},{"admin.":"https:\/\/script.viserlab.com\/joblab\/admin\/general-setting"},{"admin.setting.socialite.credentials":"https:\/\/script.viserlab.com\/joblab\/admin\/setting\/social\/credentials"},{"admin.setting.socialite.credentials.update":"https:\/\/script.viserlab.com\/joblab\/admin\/setting\/social\/credentials\/update\/{key}"},{"admin.setting.socialite.credentials.status.update":"https:\/\/script.viserlab.com\/joblab\/admin\/setting\/social\/credentials\/status\/{key}"},{"admin.setting.system.configuration":"https:\/\/script.viserlab.com\/joblab\/admin\/setting\/system-configuration"},{"admin.":"https:\/\/script.viserlab.com\/joblab\/admin\/setting\/system-configuration"},{"admin.setting.logo.icon":"https:\/\/script.viserlab.com\/joblab\/admin\/setting\/logo-icon"},{"admin.setting.logo.icon":"https:\/\/script.viserlab.com\/joblab\/admin\/setting\/logo-icon"},{"admin.setting.custom.css":"https:\/\/script.viserlab.com\/joblab\/admin\/custom-css"},{"admin.":"https:\/\/script.viserlab.com\/joblab\/admin\/custom-css"},{"admin.setting.sitemap":"https:\/\/script.viserlab.com\/joblab\/admin\/sitemap"},{"admin.":"https:\/\/script.viserlab.com\/joblab\/admin\/sitemap"},{"admin.setting.robot":"https:\/\/script.viserlab.com\/joblab\/admin\/robot"},{"admin.":"https:\/\/script.viserlab.com\/joblab\/admin\/robot"},{"admin.setting.cookie":"https:\/\/script.viserlab.com\/joblab\/admin\/cookie"},{"admin.":"https:\/\/script.viserlab.com\/joblab\/admin\/cookie"},{"admin.maintenance.mode":"https:\/\/script.viserlab.com\/joblab\/admin\/maintenance-mode"},{"admin.":"https:\/\/script.viserlab.com\/joblab\/admin\/maintenance-mode"},{"admin.setting.profile.update":"https:\/\/script.viserlab.com\/joblab\/admin\/profile-update-setting"},{"admin.setting.profile.update.submit":"https:\/\/script.viserlab.com\/joblab\/admin\/profile-update-setting"},{"admin.cron.index":"https:\/\/script.viserlab.com\/joblab\/admin\/cron\/index"},{"admin.cron.store":"https:\/\/script.viserlab.com\/joblab\/admin\/cron\/store"},{"admin.cron.update":"https:\/\/script.viserlab.com\/joblab\/admin\/cron\/update"},{"admin.cron.delete":"https:\/\/script.viserlab.com\/joblab\/admin\/cron\/delete\/{id}"},{"admin.cron.schedule":"https:\/\/script.viserlab.com\/joblab\/admin\/cron\/schedule"},{"admin.cron.schedule.store":"https:\/\/script.viserlab.com\/joblab\/admin\/cron\/schedule\/store"},{"admin.cron.schedule.status":"https:\/\/script.viserlab.com\/joblab\/admin\/cron\/schedule\/status\/{id}"},{"admin.cron.schedule.pause":"https:\/\/script.viserlab.com\/joblab\/admin\/cron\/schedule\/pause\/{id}"},{"admin.cron.schedule.logs":"https:\/\/script.viserlab.com\/joblab\/admin\/cron\/schedule\/logs\/{id}"},{"admin.cron.schedule.log.resolved":"https:\/\/script.viserlab.com\/joblab\/admin\/cron\/schedule\/log\/resolved\/{id}"},{"admin.cron.log.flush":"https:\/\/script.viserlab.com\/joblab\/admin\/cron\/schedule\/log\/flush\/{id}"},{"admin.setting.notification.global.email":"https:\/\/script.viserlab.com\/joblab\/admin\/notification\/global\/email"},{"admin.setting.notification.global.email.update":"https:\/\/script.viserlab.com\/joblab\/admin\/notification\/global\/email\/update"},{"admin.setting.notification.global.sms":"https:\/\/script.viserlab.com\/joblab\/admin\/notification\/global\/sms"},{"admin.setting.notification.global.sms.update":"https:\/\/script.viserlab.com\/joblab\/admin\/notification\/global\/sms\/update"},{"admin.setting.notification.global.push":"https:\/\/script.viserlab.com\/joblab\/admin\/notification\/global\/push"},{"admin.setting.notification.global.push.update":"https:\/\/script.viserlab.com\/joblab\/admin\/notification\/global\/push\/update"},{"admin.setting.notification.templates":"https:\/\/script.viserlab.com\/joblab\/admin\/notification\/templates"},{"admin.setting.notification.template.edit":"https:\/\/script.viserlab.com\/joblab\/admin\/notification\/template\/edit\/{type}\/{id}"},{"admin.setting.notification.template.update":"https:\/\/script.viserlab.com\/joblab\/admin\/notification\/template\/update\/{type}\/{id}"},{"admin.setting.notification.email":"https:\/\/script.viserlab.com\/joblab\/admin\/notification\/email\/setting"},{"admin.setting.notification.":"https:\/\/script.viserlab.com\/joblab\/admin\/notification\/email\/setting"},{"admin.setting.notification.email.test":"https:\/\/script.viserlab.com\/joblab\/admin\/notification\/email\/test"},{"admin.setting.notification.sms":"https:\/\/script.viserlab.com\/joblab\/admin\/notification\/sms\/setting"},{"admin.setting.notification.":"https:\/\/script.viserlab.com\/joblab\/admin\/notification\/sms\/setting"},{"admin.setting.notification.sms.test":"https:\/\/script.viserlab.com\/joblab\/admin\/notification\/sms\/test"},{"admin.setting.notification.push":"https:\/\/script.viserlab.com\/joblab\/admin\/notification\/notification\/push\/setting"},{"admin.setting.notification.":"https:\/\/script.viserlab.com\/joblab\/admin\/notification\/notification\/push\/setting"},{"admin.setting.notification.push.upload":"https:\/\/script.viserlab.com\/joblab\/admin\/notification\/notification\/push\/setting\/upload"},{"admin.setting.notification.push.download":"https:\/\/script.viserlab.com\/joblab\/admin\/notification\/notification\/push\/setting\/download"},{"admin.extensions.index":"https:\/\/script.viserlab.com\/joblab\/admin\/extensions"},{"admin.extensions.update":"https:\/\/script.viserlab.com\/joblab\/admin\/extensions\/update\/{id}"},{"admin.extensions.status":"https:\/\/script.viserlab.com\/joblab\/admin\/extensions\/status\/{id}"},{"admin.system.info":"https:\/\/script.viserlab.com\/joblab\/admin\/system\/info"},{"admin.system.server.info":"https:\/\/script.viserlab.com\/joblab\/admin\/system\/server-info"},{"admin.system.optimize":"https:\/\/script.viserlab.com\/joblab\/admin\/system\/optimize"},{"admin.system.optimize.clear":"https:\/\/script.viserlab.com\/joblab\/admin\/system\/optimize-clear"},{"admin.system.update":"https:\/\/script.viserlab.com\/joblab\/admin\/system\/system-update"},{"admin.system.update.process":"https:\/\/script.viserlab.com\/joblab\/admin\/system\/system-update"},{"admin.system.update.log":"https:\/\/script.viserlab.com\/joblab\/admin\/system\/system-update\/log"},{"admin.seo":"https:\/\/script.viserlab.com\/joblab\/admin\/seo"},{"admin.frontend.index":"https:\/\/script.viserlab.com\/joblab\/admin\/frontend\/index"},{"admin.frontend.templates":"https:\/\/script.viserlab.com\/joblab\/admin\/frontend\/templates"},{"admin.frontend.templates.active":"https:\/\/script.viserlab.com\/joblab\/admin\/frontend\/templates"},{"admin.frontend.sections":"https:\/\/script.viserlab.com\/joblab\/admin\/frontend\/frontend-sections\/{key?}"},{"admin.frontend.sections.content":"https:\/\/script.viserlab.com\/joblab\/admin\/frontend\/frontend-content\/{key}"},{"admin.frontend.sections.element":"https:\/\/script.viserlab.com\/joblab\/admin\/frontend\/frontend-element\/{key}\/{id?}"},{"admin.frontend.sections.element.slug.check":"https:\/\/script.viserlab.com\/joblab\/admin\/frontend\/frontend-slug-check\/{key}\/{id?}"},{"admin.frontend.sections.element.seo":"https:\/\/script.viserlab.com\/joblab\/admin\/frontend\/frontend-element-seo\/{key}\/{id}"},{"admin.frontend.":"https:\/\/script.viserlab.com\/joblab\/admin\/frontend\/frontend-element-seo\/{key}\/{id}"},{"admin.frontend.remove":"https:\/\/script.viserlab.com\/joblab\/admin\/frontend\/remove\/{id}"},{"admin.frontend.manage.pages":"https:\/\/script.viserlab.com\/joblab\/admin\/frontend\/manage-pages"},{"admin.frontend.manage.pages.check.slug":"https:\/\/script.viserlab.com\/joblab\/admin\/frontend\/manage-pages\/check-slug\/{id?}"},{"admin.frontend.manage.pages.save":"https:\/\/script.viserlab.com\/joblab\/admin\/frontend\/manage-pages"},{"admin.frontend.manage.pages.update":"https:\/\/script.viserlab.com\/joblab\/admin\/frontend\/manage-pages\/update"},{"admin.frontend.manage.pages.delete":"https:\/\/script.viserlab.com\/joblab\/admin\/frontend\/manage-pages\/delete\/{id}"},{"admin.frontend.manage.section":"https:\/\/script.viserlab.com\/joblab\/admin\/frontend\/manage-section\/{id}"},{"admin.frontend.manage.section.update":"https:\/\/script.viserlab.com\/joblab\/admin\/frontend\/manage-section\/{id}"},{"admin.frontend.manage.pages.seo":"https:\/\/script.viserlab.com\/joblab\/admin\/frontend\/manage-seo\/{id}"},{"admin.frontend.":"https:\/\/script.viserlab.com\/joblab\/admin\/frontend\/manage-seo\/{id}"},{"admin.category.index":"https:\/\/script.viserlab.com\/joblab\/admin\/category"},{"admin.category.save":"https:\/\/script.viserlab.com\/joblab\/admin\/category\/save\/{id?}"},{"admin.category.status":"https:\/\/script.viserlab.com\/joblab\/admin\/category\/status\/{id}"},{"admin.role.index":"https:\/\/script.viserlab.com\/joblab\/admin\/role"},{"admin.role.store":"https:\/\/script.viserlab.com\/joblab\/admin\/role\/store\/{id?}"},{"admin.role.status":"https:\/\/script.viserlab.com\/joblab\/admin\/role\/status\/{id?}"},{"admin.industry.index":"https:\/\/script.viserlab.com\/joblab\/admin\/industry"},{"admin.industry.save":"https:\/\/script.viserlab.com\/joblab\/admin\/industry\/save\/{id?}"},{"admin.industry.status":"https:\/\/script.viserlab.com\/joblab\/admin\/industry\/status\/{id}"},{"admin.department.index":"https:\/\/script.viserlab.com\/joblab\/admin\/department"},{"admin.department.store":"https:\/\/script.viserlab.com\/joblab\/admin\/department\/store\/{id?}"},{"admin.department.status":"https:\/\/script.viserlab.com\/joblab\/admin\/department\/status\/{id}"},{"admin.plan.index":"https:\/\/script.viserlab.com\/joblab\/admin\/plan"},{"admin.plan.save":"https:\/\/script.viserlab.com\/joblab\/admin\/plan\/save\/{id?}"},{"admin.plan.status":"https:\/\/script.viserlab.com\/joblab\/admin\/plan\/status\/{id}"},{"admin.plan.subscriber.list":"https:\/\/script.viserlab.com\/joblab\/admin\/plan\/subscriber\/list\/{id?}"},{"admin.location.city.index":"https:\/\/script.viserlab.com\/joblab\/admin\/location\/city"},{"admin.location.city.save":"https:\/\/script.viserlab.com\/joblab\/admin\/location\/city\/save\/{id?}"},{"admin.location.city.status":"https:\/\/script.viserlab.com\/joblab\/admin\/location\/city\/status\/{id}"},{"admin.location.index":"https:\/\/script.viserlab.com\/joblab\/admin\/location"},{"admin.location.save":"https:\/\/script.viserlab.com\/joblab\/admin\/location\/save\/{id?}"},{"admin.location.status":"https:\/\/script.viserlab.com\/joblab\/admin\/location\/status\/{id}"},{"admin.education.level.index":"https:\/\/script.viserlab.com\/joblab\/admin\/education\/level"},{"admin.education.level.save":"https:\/\/script.viserlab.com\/joblab\/admin\/education\/level\/save\/{id?}"},{"admin.education.level.status":"https:\/\/script.viserlab.com\/joblab\/admin\/education\/level\/status\/{id}"},{"admin.education.degree.index":"https:\/\/script.viserlab.com\/joblab\/admin\/education\/degree"},{"admin.education.degree.save":"https:\/\/script.viserlab.com\/joblab\/admin\/education\/degree\/save\/{id?}"},{"admin.education.degree.status":"https:\/\/script.viserlab.com\/joblab\/admin\/education\/degree\/status\/{id}"},{"admin.education.group.index":"https:\/\/script.viserlab.com\/joblab\/admin\/education\/group"},{"admin.education.group.save":"https:\/\/script.viserlab.com\/joblab\/admin\/education\/group\/save\/{id?}"},{"admin.education.group.status":"https:\/\/script.viserlab.com\/joblab\/admin\/education\/group\/status\/{id}"},{"admin.skill.index":"https:\/\/script.viserlab.com\/joblab\/admin\/skill"},{"admin.skill.save":"https:\/\/script.viserlab.com\/joblab\/admin\/skill\/save\/{id?}"},{"admin.skill.status":"https:\/\/script.viserlab.com\/joblab\/admin\/skill\/status\/{id}"},{"admin.experience.index":"https:\/\/script.viserlab.com\/joblab\/admin\/experience"},{"admin.experience.save":"https:\/\/script.viserlab.com\/joblab\/admin\/experience\/save\/{id?}"},{"admin.experience.status":"https:\/\/script.viserlab.com\/joblab\/admin\/experience\/status\/{id}"},{"admin.type.index":"https:\/\/script.viserlab.com\/joblab\/admin\/type"},{"admin.type.save":"https:\/\/script.viserlab.com\/joblab\/admin\/type\/save\/{id?}"},{"admin.type.status":"https:\/\/script.viserlab.com\/joblab\/admin\/type\/status\/{id}"},{"admin.shift.index":"https:\/\/script.viserlab.com\/joblab\/admin\/shift"},{"admin.shift.save":"https:\/\/script.viserlab.com\/joblab\/admin\/shift\/save\/{id?}"},{"admin.shift.status":"https:\/\/script.viserlab.com\/joblab\/admin\/shift\/status\/{id}"},{"admin.salary.period.index":"https:\/\/script.viserlab.com\/joblab\/admin\/salary"},{"admin.salary.period.save":"https:\/\/script.viserlab.com\/joblab\/admin\/salary\/save\/{id?}"},{"admin.salary.period.status":"https:\/\/script.viserlab.com\/joblab\/admin\/salary\/status\/{id}"},{"admin.number.of.employee.index":"https:\/\/script.viserlab.com\/joblab\/admin\/number\/of\/employee"},{"admin.number.of.employee.save":"https:\/\/script.viserlab.com\/joblab\/admin\/number\/of\/employee\/save\/{id?}"},{"admin.number.of.employee.status":"https:\/\/script.viserlab.com\/joblab\/admin\/number\/of\/employee\/status\/{id}"},{"admin.jobs.index":"https:\/\/script.viserlab.com\/joblab\/admin\/jobs"},{"admin.jobs.pending":"https:\/\/script.viserlab.com\/joblab\/admin\/jobs\/pending"},{"admin.jobs.approved":"https:\/\/script.viserlab.com\/joblab\/admin\/jobs\/approved"},{"admin.jobs.rejected":"https:\/\/script.viserlab.com\/joblab\/admin\/jobs\/reject"},{"admin.jobs.expired":"https:\/\/script.viserlab.com\/joblab\/admin\/jobs\/expired"},{"admin.jobs.approve":"https:\/\/script.viserlab.com\/joblab\/admin\/jobs\/approve\/{id}"},{"admin.jobs.reject":"https:\/\/script.viserlab.com\/joblab\/admin\/jobs\/reject\/{id}"},{"admin.jobs.details":"https:\/\/script.viserlab.com\/joblab\/admin\/jobs\/details\/{id}"},{"admin.jobs.apply.list":"https:\/\/script.viserlab.com\/joblab\/admin\/jobs\/apply\/list\/{id}"},{"admin.jobs.featured":"https:\/\/script.viserlab.com\/joblab\/admin\/jobs\/featured\/{id}"},{"admin.jobs.applicants":"https:\/\/script.viserlab.com\/joblab\/admin\/jobs\/applicants\/{id}"}];
        var settings = {"general_setting":{"keyword":["general","fundamental","site information","site","website settings","basic settings","global settings","site color","timezone","site currency","pagination","currency format","site title","base color","secondary color","paginate"],"title":"General Setting","subtitle":"Configure the fundamental information of the site.","icon":"las la-cog","route_name":"admin.setting.general"},"resume_setting":{"keyword":["profile update","profile setting","profile update progress"],"title":"Profile Update Setting","subtitle":"Configure profile update progress settings.","icon":"lar la-file","route_name":"admin.setting.profile.update"},"logo_favicon":{"keyword":["branding","identity","logo upload","site branding","brand identity","favicon","website icon","website favicon","website logo"],"title":"Logo and Favicon","subtitle":"Upload your logo and favicon here.","icon":"las la-images","route_name":"admin.setting.logo.icon"},"system_configuration":{"keyword":["basic modules","control","modules","system","configuration settings","system control","force ssl","force secure password","kyc control","email control","sms control","verification control","push notification control","language control","mobile verification","email verification","in app payment"],"title":"System Configuration","subtitle":"Control all of the basic modules of the system.","icon":"las la-cogs","route_name":"admin.setting.system.configuration"},"notification_setting":{"keyword":["email configuration","sms configure","push notification configure","email setting","sms setting","push notification setting","firebase setting","firebase control","email template","sms template","push notification template","notification template","smtp","sendgrid","send grid","mailjet","mail jet","php","nexmo","clickatell","click a tell","infobip","info bip","message bird","sms broadcast","twilio","text magic","custom api","template setting","global template","global notification"],"title":"Notification Setting","subtitle":"Control and configure overall notification elements of the system.","icon":"las la-bell","route_name":"admin.setting.notification.global.email"},"payment_gateways":{"keyword":["automatic","manual","configure payment gateways","aamarpay","amarpay","authorize","autorize.net","btcpay","btc pay","binance","blockchain","cashmaal","checkout","coinbase commerce","coingate","coinpayments","flutterwave","instamojo","mercado pago","mollie","nmi","now payments","nowpayments","payeer","paypal","paystack","paytm","perfect money","perfectmoney","razorpay","skrill","sslcommerz","stripe","twocheckout","two checkout","2checkout"],"title":"Payment Gateways","subtitle":"Configure automatic or manual payment gateways to accept payment from users.","icon":"las la-credit-card","route_name":"admin.gateway.automatic.index"},"seo_configuration":{"keyword":["SEO","meta title","meta description","meta keywords","optimization","meta tags","SEO configuration"],"title":"SEO Configuration","subtitle":"Configure proper meta title, meta description, meta keywords, etc to make the system SEO-friendly.","icon":"las la-globe","route_name":"admin.seo"},"manage_frontend":{"keyword":["frontend","template","manage frontend","frontend contents","frontend settings","about us","banner","contact","faq","social icons","section settings","subscribe","blogs","blog section","category","contact us","employer login","employer register","featured company","company","featured jobs","jobs","footer","user login","employer","user register","registration disable","roles","sponsored companies","top companies","hot jobs","user profile setting"],"title":"Manage Frontend","subtitle":"Control all of the frontend contents of the system.","icon":"la la-html5","route_name":"admin.frontend.index"},"manage_pages":{"keyword":["pages","manage pages","home page","contact page","blog page"],"title":"Manage Pages","subtitle":"Control dynamic and static pages of the system.","icon":"las la-list","route_name":"admin.frontend.manage.pages"},"social_login_setting":{"keyword":["social login","social media","authentication","social media login","social media authentication","facebook login","google login","linkedin login"],"title":"Social Login Setting","subtitle":"Provide the required information here to use the login system by social media.","icon":"las la-user-circle","route_name":"admin.setting.socialite.credentials"},"language":{"keyword":["language","localize","translation","translate","internationalization","language settings","localization settings","translation settings","configure languages","configure localization"],"title":"Language","subtitle":"Configure your required languages and keywords to localize the system.","icon":"las la-language","route_name":"admin.language.manage"},"extensions":{"keyword":["extensions","plugins","addons","extension settings","plugin settings","addon settings","captcha","custom captcha","google captcha","recaptcha","re-captcha","re captcha","tawk","tawk.to","tawk to","analytics","google analytics","facebook comment"],"title":"Extensions","subtitle":"Manage extensions of the system here to extend some extra features of the system.","icon":"las la-puzzle-piece","route_name":"admin.extensions.index"},"cron_job_setting":{"keyword":["cron job","automate operations","schedule","automate","tasks","cron job settings","task scheduling","automation settings","configure cron job","configure tasks"],"title":"Cron Job Setting","subtitle":"Configure cron job to automate some operations of the system.","icon":"las la-clock","route_name":"admin.cron.index"},"policy_pages":{"keyword":["privacy and policy","terms and condition","terms of service"],"title":"Policy Pages","subtitle":"Configure your policy and terms of the system here.","icon":"las la-shield-alt","route_name":"admin.frontend.sections","params":{"key":"policy_pages"}},"maintenance_mode":{"keyword":["maintenance mode","system maintenance","system health","maintenance settings","system health settings","enable maintenance","disable maintenance","maintenance configuration"],"title":"Maintenance Mode","subtitle":"Enable or disable the maintenance mode of the system when required.","icon":"las la-robot","route_name":"admin.maintenance.mode"},"gdpr_cookie":{"keyword":["GDPR cookie","cookie policy","data privacy","GDPR settings","cookie policy settings","data privacy settings"],"title":"GDPR Cookie","subtitle":"Set GDPR Cookie policy if required. It will ask visitor of the system to accept if enabled.","icon":"las la-cookie-bite","route_name":"admin.setting.cookie"},"custom_css":{"keyword":["custom CSS","modify styles","frontend","styling","design customization","CSS settings","style settings","frontend customization","design settings","customize CSS"],"title":"Custom CSS","subtitle":"Write custom css here to modify some styles of frontend of the system if you need to.","icon":"lab la-css3-alt","route_name":"admin.setting.custom.css"},"sitemap":{"keyword":["Site map","sitemap","xml","sitemap.xml"],"title":"Sitemap XML","subtitle":"Insert the sitemap XML here to enhance SEO performance.","icon":"las la-sitemap","route_name":"admin.setting.sitemap"},"robots":{"keyword":["Robots","txt","robots.txt","robot.txt"],"title":"Robots txt","subtitle":"Insert the robots.txt content here to enhance bot web crawlers and instruct them on how to interact with certain areas of the website.","icon":"las la-robot","route_name":"admin.setting.robot"}};
        var sidenav = {"dashboard":{"keyword":["Dashboard","Home","Panel","Admin","Control center","Overview","Main hub","Management hub","Administrative hub","Central hub","Command center","Administrator portal","Centralized interface","Admin console","Management dashboard","Main screen","Administrative dashboard","Command dashboard","Main control panel"],"title":"Dashboard","icon":"las la-home","route_name":"admin.dashboard","menu_active":"admin.dashboard"},"category":{"keyword":["category","categories","Category management","Category list","Category activity"],"title":"Categories","icon":"las la-stream","route_name":"admin.category.index","menu_active":"admin.category.*"},"manage_role":{"keyword":["manage role","roles","role management","role list","role activity"],"title":"Roles","icon":"las la-user-tag","route_name":"admin.role.index","menu_active":"admin.role.*"},"industry":{"keyword":["industry","industries","Industry management","Industry list","Industry activity"],"title":"Manage Industry","icon":"las la-industry","route_name":"admin.industry.index","menu_active":"admin.industry.*"},"department":{"keyword":["department","departments","Department management","Department list","Department activity"],"title":"Manage Department","icon":"las la-building","route_name":"admin.department.index","menu_active":"admin.department.*"},"plan":{"keyword":["plan","plans","Plan management","Plan list","Plan activity"],"title":"Manage Plan","icon":"lab la-telegram-plane","route_name":"admin.plan.index","menu_active":"admin.plan.*"},"manage_jobs":{"title":"Manage Jobs","icon":"las la-clipboard-list","menu_active":"admin.jobs*","counters":["pendingJobCount"],"submenu":[{"keyword":["all jobs","Manage Jobs","Job management","All job listings"],"title":"All Jobs","route_name":"admin.jobs.index","menu_active":"admin.jobs.index"},{"keyword":["pending jobs","Manage Jobs","Job management","Pending job listings"],"title":"Pending Jobs","route_name":"admin.jobs.pending","menu_active":"admin.jobs.pending","counter":"pendingJobCount"},{"keyword":["approved jobs","Manage Jobs","Job management","Approved job listings"],"title":"Approved Jobs","route_name":"admin.jobs.approved","menu_active":"admin.jobs.approved"},{"keyword":["expired jobs","Manage Jobs","Job management","Expired job listings"],"title":"Expired Jobs","route_name":"admin.jobs.expired","menu_active":"admin.jobs.expired"},{"keyword":["rejected jobs","Manage Jobs","Job management","Rejected job listings"],"title":"Rejected Jobs","route_name":"admin.jobs.rejected","menu_active":"admin.jobs.rejected"}]},"manage_users":{"title":"Manage Users","icon":"las la-users","counters":["bannedUsersCount","emailUnverifiedUsersCount","mobileUnverifiedUsersCount"],"menu_active":"admin.users*","submenu":[{"keyword":["active users","Manage Users","User management","User control","User status","User activity","User analytics"],"title":"Active Users","route_name":"admin.users.active","menu_active":"admin.users.active"},{"keyword":["banned users","Manage Users","User management","Account bans","User activity"],"title":"Banned Users","route_name":"admin.users.banned","menu_active":"admin.users.banned","counter":"bannedUsersCount"},{"keyword":["email unverified users","Manage Users","User verification","User authentication","User management"],"title":"Email Unverified","route_name":"admin.users.email.unverified","menu_active":"admin.users.email.unverified","counter":"emailUnverifiedUsersCount"},{"keyword":["mobile unverified users","Manage Users","User verification","User authentication","User management"],"title":"Mobile Unverified","route_name":"admin.users.mobile.unverified","menu_active":"admin.users.mobile.unverified","counter":"mobileUnverifiedUsersCount"},{"keyword":["all users users","Manage Users","User management","User control","User activity","User analytics"],"title":"All Users","route_name":"admin.users.all","menu_active":"admin.users.all"},{"keyword":["send notification users","Manage Users","User notifications","User management","User activity"],"title":"Send Notification","route_name":"admin.users.notification.all","menu_active":"admin.users.notification.all"}]},"manage_employers":{"title":"Manage Employers","icon":"las la-user-friends","counters":["bannedEmployersCount","emailUnverifiedEmployersCount","mobileUnverifiedEmployersCount"],"menu_active":"admin.employers*","submenu":[{"keyword":["active employers","Manage Employers","Employer management","Employer control","Employer status","Employer activity","Employer analytics"],"title":"Active Employers","route_name":"admin.employers.active","menu_active":"admin.employers.active"},{"keyword":["banned employers","Manage Employers","Employer management","Account bans","Employer activity"],"title":"Banned Employers","route_name":"admin.employers.banned","menu_active":"admin.employers.banned","counter":"bannedEmployersCount"},{"keyword":["email unverified employers","Manage Employers","Employer verification","Employer authentication","Employer management"],"title":"Email Unverified","route_name":"admin.employers.email.unverified","menu_active":"admin.employers.email.unverified","counter":"emailUnverifiedEmployersCount"},{"keyword":["mobile unverified employers","Manage Employers","Employer verification","Employer authentication","Employer management"],"title":"Mobile Unverified","route_name":"admin.employers.mobile.unverified","menu_active":"admin.employers.mobile.unverified","counter":"mobileUnverifiedEmployersCount"},{"keyword":["with balance employers","Manage Employers","Employer management","Employer activity","Account management"],"title":"With Balance","route_name":"admin.employers.with.balance","menu_active":"admin.employers.with.balance"},{"keyword":["all employers","Manage Employers","Employer management","Employer control","Employer activity","Employer analytics"],"title":"All Employers","route_name":"admin.employers.all","menu_active":"admin.employers.all"},{"keyword":["send notification employers","Manage Employers","Employer notifications","Employer management","Employer activity"],"title":"Send Notification","route_name":"admin.employers.notification.all","menu_active":"admin.employers.notification.all"}]},"manage_location":{"title":"Manage Location","icon":"la la-globe","menu_active":"admin.location*","submenu":[{"keyword":["city","Manage Location","Location management","City management"],"title":"City","route_name":"admin.location.city.index","menu_active":"admin.location.city.index"},{"keyword":["location","Manage Location","Location management","General location management"],"title":"Location","route_name":"admin.location.index","menu_active":"admin.location.index"}]},"manage_education":{"title":"Manage Education","icon":"las la-graduation-cap","menu_active":"admin.education*","submenu":[{"keyword":["level of education","Manage Education","Education management","Education levels"],"title":"Level","route_name":"admin.education.level.index","menu_active":"admin.education.level.index"},{"keyword":["degree","Manage Education","Education management","Degree management"],"title":"Degree","route_name":"admin.education.degree.index","menu_active":"admin.education.degree.index"},{"keyword":["Group","Manage Education","Education management","group management"],"title":"Group","route_name":"admin.education.group.index","menu_active":"admin.education.group.index"}]},"manage_basic":{"title":"Manage Basic","icon":"las la-list-alt","menu_active":["admin.skill.index","admin.experience.index","admin.type.index","admin.shift.index","admin.salary.period.index","admin.number.of.employee.index"],"submenu":[{"keyword":["skill","Manage Basic","Basic management","Skill management"],"title":"Skill","route_name":"admin.skill.index","menu_active":"admin.skill.index"},{"keyword":["experience","Manage Basic","Basic management","Experience management"],"title":"Experience","route_name":"admin.experience.index","menu_active":"admin.experience.index"},{"keyword":["type","Manage Basic","Basic management","Type management"],"title":"Type","route_name":"admin.type.index","menu_active":"admin.type.index"},{"keyword":["shift","Manage Basic","Basic management","Shift management"],"title":"Shift","route_name":"admin.shift.index","menu_active":"admin.shift.index"},{"keyword":["salary period","Manage Basic","Basic management","Salary period management"],"title":"Salary Period","route_name":"admin.salary.period.index","menu_active":"admin.salary.period.index"},{"keyword":["number of employees","Manage Basic","Basic management","Employee management"],"title":"Number Of Employees","route_name":"admin.number.of.employee.index","menu_active":"admin.number.of.employee.index"}]},"deposits":{"title":"Payments","icon":"las la-file-invoice-dollar","counters":["pendingDepositsCount"],"menu_active":"admin.deposit*","submenu":[{"keyword":["Pending payments","payments","payment management","payment control","payment status","payment activity"],"title":"Pending Payments","route_name":"admin.deposit.pending","menu_active":"admin.deposit.pending","counter":"pendingDepositsCount","params":{"user_id":""}},{"keyword":["Approved payments","payments","payments management","payments activity"],"title":"Approved Payments","route_name":"admin.deposit.approved","menu_active":"admin.deposit.approved","params":{"user_id":""}},{"keyword":["Successful payments","payments","payments management","payments activity"],"title":"Successful Payments","route_name":"admin.deposit.successful","menu_active":"admin.deposit.successful","params":{"user_id":""}},{"keyword":["Rejected payments","payments","payments management","payments activity"],"title":"Rejected Payments","route_name":"admin.deposit.rejected","menu_active":"admin.deposit.rejected","params":{"user_id":""}},{"keyword":["Initiated payments","payments","payments management","payments activity"],"title":"Initiated Payments","route_name":"admin.deposit.initiated","menu_active":"admin.deposit.initiated","params":{"user_id":""}},{"keyword":["All payments","payments","payments management","payments control","payments activity"],"title":"All Payments","route_name":"admin.deposit.list","menu_active":"admin.deposit.list","params":{"user_id":""}}]},"support_ticket":{"title":"Support Ticket","icon":"la la-ticket","counters":["pendingTicketCount"],"menu_active":"admin.ticket*","submenu":[{"keyword":["Pending Ticket","Support Ticket","Ticket management","Ticket control","Ticket status","Ticket activity"],"title":"Pending Ticket","route_name":"admin.ticket.pending","menu_active":"admin.ticket.pending","counter":"pendingTicketCount"},{"keyword":["Closed Ticket","Support Ticket","Ticket management","Ticket activity"],"title":"Closed Ticket","route_name":"admin.ticket.closed","menu_active":"admin.ticket.closed"},{"keyword":["Answered Ticket","Support Ticket","Ticket management","Ticket activity"],"title":"Answered Ticket","route_name":"admin.ticket.answered","menu_active":"admin.ticket.answered"},{"keyword":["All Ticket","Support Ticket","Ticket management","Ticket control","Ticket activity"],"title":"All Ticket","route_name":"admin.ticket.index","menu_active":"admin.ticket.index"}]},"reports":{"title":"Report","icon":"la la-list","menu_active":"admin.report*","submenu":[{"keyword":["Transaction Log","Report","Transaction report","Transaction history","Transaction activity","balance sheet","balance log","balance history"],"title":"Transaction History","route_name":"admin.report.transaction","menu_active":["admin.report.transaction","admin.report.transaction.search"],"params":{"user_id":""}},{"keyword":["Login History","Report","Login report","Login history","Login activity"],"title":"Login History","route_name":"admin.report.login.history","menu_active":["admin.report.login.history","admin.report.login.ipHistory"]},{"keyword":["Notification History","Report","Notification report","Notification history","Notification activity","email log","email history","sms log","sms history","push notification log","push notification history"],"title":"Notification History","route_name":"admin.report.notification.history","menu_active":"admin.report.notification.history"}]},"subscriber":{"keyword":["subscriber","subscribers","Subscription management","Subscriber list","Subscriber activity"],"title":"Subscribers","icon":"las la-thumbs-up","route_name":"admin.subscriber.index","menu_active":"admin.subscriber.*"},"system_setting":{"keyword":["System Setting","setting","System configuration","System preferences","Configuration management","System setup"],"title":"System Setting","icon":"las la-life-ring","route_name":"admin.setting.system","menu_active":["admin.setting.system","admin.setting.general","admin.setting.socialite.credentials","admin.cron*","admin.setting.system.configuration","admin.setting.logo.icon","admin.extensions.index","admin.language.manage","admin.language.key","admin.seo","admin.frontend.templates","admin.frontend.manage.*","admin.maintenance.mode","admin.setting.cookie","admin.setting.custom.css","admin.setting.sitemap","admin.setting.robot","admin.setting.notification.global.email","admin.setting.notification.global.sms","admin.setting.notification.global.push","admin.setting.notification.email","admin.setting.notification.sms","admin.setting.notification.push","admin.setting.notification.templates","admin.setting.notification.template.edit","admin.frontend.index","admin.frontend.sections*","admin.gateway*"]},"extra":{"title":"Extra","icon":"la la-server","menu_active":"admin.system*","counters":["updateAvailable"],"submenu":[{"keyword":["Application","System","Application management","Application settings","System information","version","laravel","timezone"],"title":"Application","route_name":"admin.system.info","menu_active":"admin.system.info"},{"keyword":["Server","System","Server management","Server settings","System information","version","php version","software","ip address","server ip address","server port","http host"],"title":"Server","route_name":"admin.system.server.info","menu_active":"admin.system.server.info"},{"keyword":["Cache","System","Cache management","Cache optimization","System performance","clear cache"],"title":"Cache","route_name":"admin.system.optimize","menu_active":"admin.system.optimize"},{"keyword":["Update","System","Update management","System update","Software updates","version update","upgrade","latest version"],"title":"Update","route_name":"admin.system.update","menu_active":"admin.system.update*","counter":"updateAvailable"}]},"report_and_request":{"keyword":["Report & Request","Report and Request","Reports and Requests","Reporting and Requests","Report management","Request management","feature request","bug report"],"title":"Report & Request","icon":"las la-bug","route_name":"admin.request.report","menu_active":"admin.request.report"}};
        var settingsData = Object.assign({}, settings, sidenav);

        $('.navbar__action-list .dropdown-menu').on('click', function(event) {
            event.stopPropagation();
        });
    </script>
    <script src="https://script.viserlab.com/joblab/assets/admin/js/search.js"></script>
    <script>
        "use strict";

        function getEmptyMessage() {
            return `<li class="text-muted">
                <div class="empty-search text-center">
                    <img src="https://script.viserlab.com/joblab/assets/images/empty_list.png" alt="empty">
                    <p class="text-muted">No search result found</p>
                </div>
            </li>`
        }
    </script>
</body>

</html>
