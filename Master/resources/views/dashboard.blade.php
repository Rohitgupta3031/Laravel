<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="endless admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, endless admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <title>Endless - Premium Admin Template</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="assets/css/chartist.css">
    <link rel="stylesheet" type="text/css" href="assets/css/prism.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link id="bootstrap-file" rel="stylesheet" type="text/css" href="#">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link id="color" rel="stylesheet" href="assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
</head>

<body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="loader bg-white">
            <div class="whirly-loader"> </div>
        </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper">
        <!-- Page Header Start-->
        <div class="page-main-header">
            <div class="main-header-right row">
                <div class="main-header-left col-auto px-0 d-lg-none">
                    <div class="logo-wrapper"><a href="index.html"><img src="assets/images/endless-logo.png" alt=""></a>
                    </div>
                </div>
                <div class="vertical-mobile-sidebar col-auto ps-3 d-none"><i class="fa fa-bars sidebar-bar"></i></div>
                <div class="mobile-sidebar col-auto ps-0 d-block">
                    <div class="media-body switch-sm">
                        <label class="switch"><a href="#"><i id="sidebar-toggle"
                                    data-feather="align-left"></i></a></label>
                    </div>
                </div>
                <div class="nav-right col p-0">
                    <ul class="nav-menus">
                        <li>
                            <form class="form-inline search-form" action="#" method="get">
                                <div class="form-group me-0">
                                    <div class="Typeahead Typeahead--twitterUsers">
                                        <div class="u-posRelative">
                                            <input class="Typeahead-input form-control-plaintext" id="demo-input"
                                                type="text" name="q" placeholder="Search...">
                                            <div class="spinner-border Typeahead-spinner" role="status"><span
                                                    class="sr-only">Loading...</span></div><span
                                                class="d-sm-none mobile-search"><i data-feather="search"></i></span>
                                        </div>
                                        <div class="Typeahead-menu"></div>
                                    </div>
                                </div>
                            </form>
                        </li>
                        <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i
                                    data-feather="maximize"></i></a></li>
                        <li class="onhover-dropdown"><a class="txt-dark" href="#">
                                <h6>EN</h6>
                            </a>
                            <ul class="language-dropdown onhover-show-div p-20">
                                <li><a href="#" data-lng="en"><i class="flag-icon flag-icon-is"></i> English</a></li>
                                <li><a href="#" data-lng="es"><i class="flag-icon flag-icon-um"></i> Spanish</a></li>
                                <li><a href="#" data-lng="pt"><i class="flag-icon flag-icon-uy"></i> Portuguese</a></li>
                                <li><a href="#" data-lng="fr"><i class="flag-icon flag-icon-nz"></i> French</a></li>
                            </ul>
                        </li>
                        <li class="onhover-dropdown"><i data-feather="bell"></i><span class="dot"></span>
                            <ul class="notification-dropdown onhover-show-div">
                                <li>Notification <span class="badge rounded-pill badge-primary pull-right">3</span></li>
                                <li>
                                    <div class="media">
                                        <div class="media-body">
                                            <h6 class="mt-0"><span><i class="shopping-color"
                                                        data-feather="shopping-bag"></i></span>Your order
                                                ready for Ship..!<small class="pull-right">9:00 AM</small></h6>
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="media-body">
                                            <h6 class="mt-0 txt-success"><span><i class="download-color font-success"
                                                        data-feather="download"></i></span>Download Complete<small
                                                    class="pull-right">2:30
                                                    PM</small></h6>
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="media-body">
                                            <h6 class="mt-0 txt-danger"><span><i class="alert-color font-danger"
                                                        data-feather="alert-circle"></i></span>250 MB trash files<small
                                                    class="pull-right">5:00
                                                    PM</small></h6>
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="bg-light txt-dark"><a href="#">All</a> notification</li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="right_side_toggle" data-feather="message-circle"></i><span
                                    class="dot"></span></a>
                        </li>
                        <li class="onhover-dropdown">
                            <div class="media align-items-center"><img
                                    class="align-self-center pull-right img-50 rounded-circle"
                                    src="assets/images/user.png" alt="header-user">
                                <div class="dotted-animation"><span class="animate-circle"></span><span
                                        class="main-circle"></span>
                                </div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div p-20">
                                <li><a href="#"><i data-feather="user"></i> Edit Profile</a></li>
                                <li><a href="#"><i data-feather="mail"></i> Inbox</a></li>
                                <li><a href="#"><i data-feather="lock"></i> Lock Screen</a></li>
                                <li><a href="#"><i data-feather="settings"></i> Settings</a></li>
                                <li><a href="#"><i data-feather="log-out"></i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
                </div>
                <script id="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName"></div>
            </div>
            </div>
          </script>
                <script id="empty-template" type="text/x-handlebars-template">
            <div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div>
            
          </script>
            </div>
        </div>
        <!-- Page Header Ends                              -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <div class="page-sidebar">
                <div class="main-header-left d-none d-lg-block">
                    <div class="logo-wrapper"><a href="index.html"><img src="assets/images/endless-logo.png" alt=""></a>
                    </div>
                </div>
                <div class="sidebar custom-scrollbar">
                    <div class="sidebar-user text-center">
                        <div><img class="img-60 rounded-circle" src="assets/images/user/1.jpg" alt="#">
                            <div class="profile-edit"><a href="edit-profile.html" target="_blank"><i
                                        data-feather="edit"></i></a>
                            </div>
                        </div>
                        <h6 class="mt-3 f-14">ELANA</h6>
                        <p>general manager.</p>
                    </div>
                    <ul class="sidebar-menu">
                        <li><a class="sidebar-header" href="#"><i data-feather="home"></i><span>Dashboard</span><span
                                    class="badge rounded-pill badge-primary">6</span><i
                                    class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li><a href="index.html"><i class="fa fa-circle"></i><span>Default</span></a></li>
                                <li><a href="dashboard-ecommerce.html"><i
                                            class="fa fa-circle"></i><span>E-commerce</span></a></li>
                                <li><a href="dashboard-university.html"><i
                                            class="fa fa-circle"></i><span>University</span></a></li>
                                <li><a href="dashboard-bitcoin.html"><i class="fa fa-circle"></i><span>Crypto</span></a>
                                </li>
                                <li><a href="dashboard-server.html"><i class="fa fa-circle"></i><span>Server</span></a>
                                </li>
                                <li><a href="dashboard-project.html"><i
                                            class="fa fa-circle"></i><span>Project</span></a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-header" href="#"><i data-feather="airplay"></i><span>Widgets</span><i
                                    class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li><a href="general-widget.html"><i class="fa fa-circle"></i>General</a></li>
                                <li><a href="chart-widget.html"><i class="fa fa-circle"></i>Chart</a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-header" href="starter-kit/layout-light.html"><i
                                    data-feather="anchor"></i><span>
                                    Starter kit</span></a></li>
                        <li><a class="sidebar-header" href="#"><i data-feather="disc"></i><span>Color Version</span><i
                                    class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li><a href="layout-light.html"><i class="fa fa-circle"></i>Layout Light</a></li>
                                <li><a href="layout-dark.html"><i class="fa fa-circle"></i>Layout Dark</a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-header" href="#"><i data-feather="sidebar"></i><span>Sidebar</span><i
                                    class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li><a href="compact.html"><i class="fa fa-circle"></i>Compact Sidebar</a></li>
                                <li><a href="compact-small.html"><i class="fa fa-circle"></i>Compact Icon Sidebar</a>
                                </li>
                                <li><a href="sidebar-hidden.html"><i class="fa fa-circle"></i>Sidebar Hidden</a></li>
                                <li><a href="sidebar-fixed.html"><i class="fa fa-circle"></i>Sidebar Fixed</a></li>
                                <li><a class="disabled" href="" onclick="return false;"><i
                                            class="fa fa-circle"></i>Disable</a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-header" href="#"><i data-feather="layout"></i><span>Page layout</span><i
                                    class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li><a href="box-layout.html"><i class="fa fa-circle"></i>Boxed</a></li>
                                <li><a href="layout-rtl.html"><i class="fa fa-circle"></i>RTL</a></li>
                                <li><a href="1-column.html"><i class="fa fa-circle"></i>1 Column</a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-header" href="#"><i data-feather="align-justify"></i><span>Menu
                                    Options</span><i class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li><a href="hide-on-scroll.html"><i class="fa fa-circle"></i>Hide menu on Scroll</a>
                                </li>
                                <li><a href="vertical.html"><i class="fa fa-circle"></i>Vertical Menu</a></li>
                                <li><a href="mega-menu.html"><i class="fa fa-circle"></i>Mega Menu</a></li>
                                <li><a href="fix-header.html"><i class="fa fa-circle"></i>Fix header</a></li>
                                <li><a href="fix-header-sidebar.html"><i class="fa fa-circle"></i>Fix Header &
                                        sidebar</a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-header" href="#"><i
                                    data-feather="cloud-lightning"></i><span>Footers</span><i
                                    class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li><a href="footer-light.html"><i class="fa fa-circle"></i>Footer Light</a></li>
                                <li><a href="footer-dark.html"><i class="fa fa-circle"></i>Footer Dark</a></li>
                                <li><a href="footer-fixed.html"><i class="fa fa-circle"></i>Footer Fixed</a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-header" href="pagebuild.html"><i data-feather="clipboard"></i><span>Page
                                    Builder</span></a></li>
                        <li><a class="sidebar-header" href="#"><i data-feather="edit-3"></i><span>Form Builders</span><i
                                    class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li><a href="form-builder-1.html"><i class="fa fa-circle"></i>Form Builder 1</a></li>
                                <li><a href="form-builder-2.html"><i class="fa fa-circle"></i>Form Builder 2</a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-header" href="button-builder.html"><i
                                    data-feather="bookmark"></i><span>Button
                                    Builder</span></a></li>
                        <li><a class="sidebar-header" href="#"><i data-feather="box"></i><span> Base</span><i
                                    class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li><a href="state-color.html"><i class="fa fa-circle"></i>State color</a></li>
                                <li><a href="typography.html"><i class="fa fa-circle"></i>Typography</a></li>
                                <li><a href="avatars.html"><i class="fa fa-circle"></i>Avatars</a></li>
                                <li><a href="helper-classes.html"><i class="fa fa-circle"></i>helper classes</a></li>
                                <li><a href="grid.html"><i class="fa fa-circle"></i>Grid</a></li>
                                <li><a href="tag-pills.html"><i class="fa fa-circle"></i>Tag & pills</a></li>
                                <li><a href="progress-bar.html"><i class="fa fa-circle"></i>Progress</a></li>
                                <li><a href="modal.html"><i class="fa fa-circle"></i>Modal</a></li>
                                <li><a href="alert.html"><i class="fa fa-circle"></i>Alert</a></li>
                                <li><a href="popover.html"><i class="fa fa-circle"></i>Popover</a></li>
                                <li><a href="tooltip.html"><i class="fa fa-circle"></i>Tooltip</a></li>
                                <li><a href="loader.html"><i class="fa fa-circle"></i>Spinners</a></li>
                                <li><a href="dropdown.html"><i class="fa fa-circle"></i>Dropdown</a></li>
                                <li><a href="#"><i class="fa fa-circle"></i>Tabs<i
                                            class="fa fa-angle-down pull-right"></i></a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="tab-bootstrap.html"><i class="fa fa-circle"></i>Bootstrap Tabs</a>
                                        </li>
                                        <li><a href="tab-material.html"><i class="fa fa-circle"></i>Line Tabs</a></li>
                                    </ul>
                                </li>
                                <li><a href="according.html"><i class="fa fa-circle"></i>Accordion</a></li>
                                <li><a href="navs.html"><i class="fa fa-circle"></i>Navs</a></li>
                                <li><a href="box-shadow.html"><i class="fa fa-circle"></i>Shadow</a></li>
                                <li><a href="list.html"><i class="fa fa-circle"></i>Lists</a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-header" href="#"><i data-feather="folder-plus"></i><span> Advance</span><i
                                    class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li><a href="scrollable.html"><i class="fa fa-circle"></i>Scrollable</a></li>
                                <li><a href="tree.html"><i class="fa fa-circle"></i>Tree view</a></li>
                                <li><a href="bootstrap-notify.html"><i class="fa fa-circle"></i>Bootstrap Notify</a>
                                </li>
                                <li><a href="rating.html"><i class="fa fa-circle"></i>Rating</a></li>
                                <li><a href="dropzone.html"><i class="fa fa-circle"></i>dropzone</a></li>
                                <li><a href="tour.html"><i class="fa fa-circle"></i>Tour</a></li>
                                <li><a href="sweet-alert2.html"><i class="fa fa-circle"></i>SweetAlert2</a></li>
                                <li><a href="modal-animated.html"><i class="fa fa-circle"></i>Animated Modal</a></li>
                                <li><a href="owl-carousel.html"><i class="fa fa-circle"></i>Owl Carousel</a></li>
                                <li><a href="ribbons.html"><i class="fa fa-circle"></i>Ribbons</a></li>
                                <li><a href="pagination.html"><i class="fa fa-circle"></i>Pagination</a></li>
                                <li><a href="steps.html"><i class="fa fa-circle"></i>Steps</a></li>
                                <li><a href="breadcrumb.html"><i class="fa fa-circle"></i>Breadcrumb</a></li>
                                <li><a href="range-slider.html"><i class="fa fa-circle"></i>Range Slider</a></li>
                                <li><a href="image-cropper.html"><i class="fa fa-circle"></i>Image cropper</a></li>
                                <li><a href="sticky.html"><i class="fa fa-circle"></i>Sticky</a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-header" href="#"><i data-feather="cloud-drizzle"></i><span>Animation<span
                                        class="badge badge-danger ml-3">Hot</span></span><i
                                    class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li><a href="animate.html"><i class="fa fa-circle"></i>Animate</a></li>
                                <li><a href="scroll-reval.html"><i class="fa fa-circle"></i>Scroll Reveal</a></li>
                                <li><a href="AOS.html"><i class="fa fa-circle"></i>AOS animation</a></li>
                                <li><a href="tilt.html"><i class="fa fa-circle"></i>Tilt Animation</a></li>
                                <li><a href="wow.html"><i class="fa fa-circle"></i>Wow Animation</a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-header" href="#"><i data-feather="command"></i><span>Icons</span><i
                                    class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li><a href="flag-icon.html"><i class="fa fa-circle"></i>Flag icon</a></li>
                                <li><a href="font-awesome.html"><i class="fa fa-circle"></i>Fontawesome Icon</a></li>
                                <li><a href="ico-icon.html"><i class="fa fa-circle"></i>Ico Icon</a></li>
                                <li><a href="themify-icon.html"><i class="fa fa-circle"></i>Thimify Icon</a></li>
                                <li><a href="feather-icon.html"><i class="fa fa-circle"></i>Feather icon</a></li>
                                <li><a href="whether-icon.html"><i class="fa fa-circle"></i>Whether Icon</a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-header" href="#"><i data-feather="cloud"></i><span>Buttons</span><i
                                    class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li><a href="buttons.html"><i class="fa fa-circle"></i>Default Style</a></li>
                                <li><a href="buttons-flat.html"><i class="fa fa-circle"></i>Flat Style</a></li>
                                <li><a href="buttons-edge.html"><i class="fa fa-circle"></i>Edge Style</a></li>
                                <li><a href="raised-button.html"><i class="fa fa-circle"></i>Raised Style</a></li>
                                <li><a href="button-group.html"><i class="fa fa-circle"></i>Button Group</a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-header" href="#"><i data-feather="file-text"></i><span>Forms</span><i
                                    class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li><a href="#"><i class="fa fa-circle"></i>Form Controls<i
                                            class="fa fa-angle-down pull-right"></i></a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="form-validation.html"><i class="fa fa-circle"></i>Form
                                                Validation</a></li>
                                        <li><a href="base-input.html"><i class="fa fa-circle"></i>Base Inputs</a></li>
                                        <li><a href="radio-checkbox-control.html"><i class="fa fa-circle"></i>Checkbox &
                                                Radio</a></li>
                                        <li><a href="input-group.html"><i class="fa fa-circle"></i>Input Groups</a></li>
                                        <li><a href="megaoptions.html"><i class="fa fa-circle"></i>Mega Options</a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="fa fa-circle"></i>Form Widgets<i
                                            class="fa fa-angle-down pull-right"></i></a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="datepicker.html"><i class="fa fa-circle"></i>Datepicker</a></li>
                                        <li><a href="time-picker.html"><i class="fa fa-circle"></i>Timepicker</a></li>
                                        <li><a href="datetimepicker.html"><i class="fa fa-circle"></i>Datetimepicker</a>
                                        </li>
                                        <li><a href="daterangepicker.html"><i
                                                    class="fa fa-circle"></i>Daterangepicker</a></li>
                                        <li><a href="touchspin.html"><i class="fa fa-circle"></i>Touchspin</a></li>
                                        <li><a href="select2.html"><i class="fa fa-circle"></i>Select2</a></li>
                                        <li><a href="switch.html"><i class="fa fa-circle"></i>Switch</a></li>
                                        <li><a href="typeahead.html"><i class="fa fa-circle"></i>Typeahead</a></li>
                                        <li><a href="clipboard.html"><i class="fa fa-circle"></i>Clipboard</a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="fa fa-circle"></i>Form Layout<i
                                            class="fa fa-angle-down pull-right"></i></a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="default-form.html"><i class="fa fa-circle"></i>Default Forms</a>
                                        </li>
                                        <li><a href="form-wizard.html"><i class="fa fa-circle"></i>Form Wizard 1</a>
                                        </li>
                                        <li><a href="form-wizard-two.html"><i class="fa fa-circle"></i>Form Wizard 2</a>
                                        </li>
                                        <li><a href="form-wizard-three.html"><i class="fa fa-circle"></i>Form Wizard
                                                3</a></li>
                                        <li><a href="form-wizard-four.html"><i class="fa fa-circle"></i>Form Wizard
                                                4</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a class="sidebar-header" href="#"><i data-feather="server"></i><span>Tables</span><i
                                    class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li><a href="#"><i class="fa fa-circle"></i>Bootstrap Tables<i
                                            class="fa fa-angle-down pull-right"></i></a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="bootstrap-basic-table.html"><i class="fa fa-circle"></i>Basic
                                                Tables</a></li>
                                        <li><a href="bootstrap-sizing-table.html"><i class="fa fa-circle"></i>Sizing
                                                Tables</a></li>
                                        <li><a href="bootstrap-border-table.html"><i class="fa fa-circle"></i>Border
                                                Tables</a></li>
                                        <li><a href="bootstrap-styling-table.html"><i class="fa fa-circle"></i>Styling
                                                Tables</a></li>
                                        <li><a href="table-components.html"><i class="fa fa-circle"></i>Table
                                                components</a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="fa fa-circle"></i>Data Tables<i
                                            class="fa fa-angle-down pull-right"></i></a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="datatable-basic-init.html"><i class="fa fa-circle"></i>Basic
                                                Init</a></li>
                                        <li><a href="datatable-advance.html"><i class="fa fa-circle"></i>Advance
                                                Init</a></li>
                                        <li><a href="datatable-styling.html"><i class="fa fa-circle"></i>Styling</a>
                                        </li>
                                        <li><a href="datatable-AJAX.html"><i class="fa fa-circle"></i>AJAX</a></li>
                                        <li><a href="datatable-server-side.html"><i class="fa fa-circle"></i>Server
                                                Side</a></li>
                                        <li><a href="datatable-plugin.html"><i class="fa fa-circle"></i>Plug-in</a></li>
                                        <li><a href="datatable-API.html"><i class="fa fa-circle"></i>API</a></li>
                                        <li><a href="datatable-data-source.html"><i class="fa fa-circle"></i>Data
                                                Sources</a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="fa fa-circle"></i>Extension Data Tables<i
                                            class="fa fa-angle-down pull-right"></i></a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="datatable-ext-autofill.html"><i class="fa fa-circle"></i>Auto
                                                Fill</a></li>
                                        <li><a href="datatable-ext-basic-button.html"><i class="fa fa-circle"></i>Basic
                                                Button</a></li>
                                        <li><a href="datatable-ext-col-reorder.html"><i class="fa fa-circle"></i>Column
                                                Reorder</a></li>
                                        <li><a href="datatable-ext-fixed-header.html"><i class="fa fa-circle"></i>Fixed
                                                Header</a></li>
                                        <li><a href="datatable-ext-html-5-data-export.html"><i
                                                    class="fa fa-circle"></i>HTML 5 Export</a>
                                        </li>
                                        <li><a href="datatable-ext-key-table.html"><i class="fa fa-circle"></i>Key
                                                Table</a></li>
                                        <li><a href="datatable-ext-responsive.html"><i
                                                    class="fa fa-circle"></i>Responsive</a></li>
                                        <li><a href="datatable-ext-row-reorder.html"><i class="fa fa-circle"></i>Row
                                                Reorder</a></li>
                                        <li><a href="datatable-ext-scroller.html"><i
                                                    class="fa fa-circle"></i>Scroller</a></li>
                                    </ul>
                                </li>
                                <li><a href="jsgrid-table.html"><i class="fa fa-circle"></i>Js Grid Table</a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-header" href="#"><i data-feather="book"></i><span>Cards</span><i
                                    class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li><a href="basic-card.html"><i class="fa fa-circle"></i>Basic Card</a></li>
                                <li><a href="creative-card.html"><i class="fa fa-circle"></i>Creative Card</a></li>
                                <li><a href="tabbed-card.html"><i class="fa fa-circle"></i>Tabbed Card</a></li>
                                <li><a href="dragable-card.html"><i class="fa fa-circle"></i>Draggable Card</a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-header" href="#"><i data-feather="sliders"></i><span>Timeline</span><i
                                    class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li><a href="timeline-v-1.html"><i class="fa fa-circle"></i>Timeline 1</a></li>
                                <li><a href="timeline-v-2.html"><i class="fa fa-circle"></i>Timeline 2</a></li>
                                <li><a href="timeline-small.html"><i class="fa fa-circle"></i>Timeline 3</a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-header" href="#"><i data-feather="bar-chart"></i><span>Charts</span><i
                                    class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li><a href="chart-google.html"><i class="fa fa-circle"></i>Google Chart</a></li>
                                <li><a href="chart-sparkline.html"><i class="fa fa-circle"></i>sparkline chart</a></li>
                                <li><a href="chart-flot.html"><i class="fa fa-circle"></i>Flot Chart</a></li>
                                <li><a href="chart-knob.html"><i class="fa fa-circle"></i>Knob Chart</a></li>
                                <li><a href="chart-morris.html"><i class="fa fa-circle"></i>Morris Chart</a></li>
                                <li><a href="chartjs.html"><i class="fa fa-circle"></i>chatjs Chart</a></li>
                                <li><a href="chartist.html"><i class="fa fa-circle"></i>chartist Chart</a></li>
                                <li><a href="chart-peity.html"><i class="fa fa-circle"></i>Peity Chart</a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-header" href="#"><i data-feather="map"></i><span>Maps</span><i
                                    class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li><a href="map-js.html"><i class="fa fa-circle"></i>Maps JS</a></li>
                                <li><a href="vector-map.html"><i class="fa fa-circle"></i>Vector Maps</a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-header" href="#"><i data-feather="printer"></i><span>Email
                                    Templates</span><i class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li><a href="#"><i class="fa fa-circle"></i>Basic<i
                                            class="fa fa-angle-down pull-right"></i></a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="basic-template.html" target="_blank"><i
                                                    class="fa fa-circle"></i>Basic Email</a></li>
                                        <li><a href="email-header.html" target="_blank"><i
                                                    class="fa fa-circle"></i>Basic With Header</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="sidebar-submenu">
                                <li><a href="#"><i class="fa fa-circle"></i>Ecommerce<i
                                            class="fa fa-angle-down pull-right"></i></a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="template-email.html" target="_blank"><i
                                                    class="fa fa-circle"></i>Email Template</a>
                                        </li>
                                        <li><a href="template-email-2.html" target="_blank"><i
                                                    class="fa fa-circle"></i>Email Template 2</a>
                                        </li>
                                        <li><a href="ecommerce-templates.html" target="_blank"><i
                                                    class="fa fa-circle"></i>Ecommerce
                                                Email</a></li>
                                        <li><a href="email-order-success.html" target="_blank"><i
                                                    class="fa fa-circle"></i>Order Success
                                            </a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a class="sidebar-header" href="#"><i
                                    data-feather="git-pull-request"></i><span>Editors</span><i
                                    class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li><a href="summernote.html"><i class="fa fa-circle"></i>Summer Note</a></li>
                                <li><a href="ckeditor.html"><i class="fa fa-circle"></i>CK editor</a></li>
                                <li><a href="simple-MDE.html"><i class="fa fa-circle"></i>MDE editor</a></li>
                                <li><a href="ace-code-editor.html"><i class="fa fa-circle"></i>ACE code editor</a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-header" href="#"><i data-feather="users"></i><span>Users</span><i
                                    class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li><a href="user-profile.html"><i class="fa fa-circle"></i>Users Profile</a></li>
                                <li><a href="edit-profile.html"><i class="fa fa-circle"></i>Users Edit</a></li>
                                <li><a href="user-cards.html"><i class="fa fa-circle"></i>Users Cards</a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-header" href="#"><i data-feather="calendar"></i><span>Calender</span><i
                                    class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li><a href="calendar.html"><i class="fa fa-circle"></i>Full Calender Basic</a></li>
                                <li><a href="calendar-event.html"><i class="fa fa-circle"></i>Full Calender Events</a>
                                </li>
                                <li><a href="calendar-advanced.html"><i class="fa fa-circle"></i>Full Calender
                                        Advance</a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-header" href="internationalization.html"><i
                                    data-feather="aperture"></i><span>Internationalization</span></a></li>
                        <li><a class="sidebar-header" href="#"><i data-feather="image"></i><span>Gallery</span><i
                                    class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li><a href="gallery.html"><i class="fa fa-circle"></i>Gallery Grid</a></li>
                                <li><a href="gallery-with-description.html"><i class="fa fa-circle"></i>Gallery Grid
                                        with Desc</a></li>
                                <li><a href="gallery-masonry.html"><i class="fa fa-circle"></i>Masonry Gallery</a></li>
                                <li><a href="masonry-gallery-with-disc.html"><i class="fa fa-circle"></i>Masonry Gallery
                                        Desc</a></li>
                                <li><a href="gallery-hover.html"><i class="fa fa-circle"></i>Hover Effects</a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-header" href="#"><i data-feather="mail"></i><span>Email</span><i
                                    class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li><a href="email-application.html"><i class="fa fa-circle"></i>Email App</a></li>
                                <li><a href="email-compose.html"><i class="fa fa-circle"></i>Email Compose</a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-header" href="#"><i data-feather="edit"></i><span> Blog</span><i
                                    class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li><a href="blog.html"><i class="fa fa-circle"></i>Blog Details</a></li>
                                <li><a href="blog-single.html"><i class="fa fa-circle"></i>Blog Single</a></li>
                                <li><a href="add-post.html"><i class="fa fa-circle"></i>Add Post</a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-header" href="#"><i data-feather="message-square"></i><span>Chat</span><i
                                    class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li><a href="chat.html"><i class="fa fa-circle"></i>Chat App</a></li>
                                <li><a href="chat-video.html"><i class="fa fa-circle"></i>Video chat</a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-header" href="social-app.html"><i data-feather="chrome"></i><span>Social
                                    App</span></a></li>
                        <li><a class="sidebar-header" href="#"><i data-feather="user-check"></i><span>Job
                                    Search</span><i class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li><a href="job-cards-view.html"><i class="fa fa-circle"></i>Cards view</a></li>
                                <li><a href="job-list-view.html"><i class="fa fa-circle"></i>List View</a></li>
                                <li><a href="job-details.html"><i class="fa fa-circle"></i>Job Details</a></li>
                                <li><a href="job-apply.html"><i class="fa fa-circle"></i>Apply</a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-header" href="#"><i data-feather="layers"></i><span>Learning</span><i
                                    class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li><a href="learning-list-view.html"><i class="fa fa-circle"></i>Learning List</a></li>
                                <li><a href="learning-detailed.html"><i class="fa fa-circle"></i>Detailed Course </a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="sidebar-header" href="faq.html"><i
                                    data-feather="help-circle"></i><span>FAQ</span></a></li>
                        <li><a class="sidebar-header" href="knowledgebase.html"><i
                                    data-feather="database"></i><span>Knowledgebase</span></a></li>
                        <li><a class="sidebar-header" href="support-ticket.html"><i
                                    data-feather="headphones"></i><span>Support
                                    Ticket</span></a></li>
                        <li><a class="sidebar-header" href="to-do.html"><i data-feather="mic"></i><span>To-Do</span></a>
                        </li>
                        <li><a class="sidebar-header" href="landing-page.html" target="_blank"><i
                                    data-feather="navigation-2"></i><span>Landing page</span></a></li>
                        <li><a class="sidebar-header" href="#"><i
                                    data-feather="shopping-bag"></i><span>Ecommerce</span><i
                                    class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li><a href="product.html"><i class="fa fa-circle"></i>Product</a></li>
                                <li><a href="product-page.html"><i class="fa fa-circle"></i>Product page</a></li>
                                <li><a href="list-products.html"><i class="fa fa-circle"></i>Product list</a></li>
                                <li><a href="payment-details.html"><i class="fa fa-circle"></i>Payment Details</a></li>
                                <li><a href="order-history.html"><i class="fa fa-circle"></i>Order History</a></li>
                                <li><a href="invoice-template.html"><i class="fa fa-circle"></i>Invoice</a></li>
                                <li><a href="cart.html"><i class="fa fa-circle"></i>Cart</a></li>
                                <li><a href="list-wish.html"><i class="fa fa-circle"></i>Wishlist</a></li>
                                <li><a href="checkout.html"><i class="fa fa-circle"></i>Checkout</a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-header" href="pricing.html"><i data-feather="dollar-sign"></i><span>
                                    Pricing</span></a></li>
                        <li><a class="sidebar-header" href="sample-page.html"><i data-feather="file"></i><span> Sample
                                    page</span></a></li>
                        <li><a class="sidebar-header" href="#"><i data-feather="search"></i><span>Search Pages</span><i
                                    class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li><a href="search.html"><i class="fa fa-circle"></i>Search Website</a></li>
                                <li><a href="search-images.html"><i class="fa fa-circle"></i>Search Images</a></li>
                                <li><a href="search-video.html"><i class="fa fa-circle"></i>Search Video</a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-header" href="#"><i data-feather="alert-octagon"></i><span> Error
                                    Page</span><i class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li><a href="error-400.html" target="_blank"><i class="fa fa-circle"></i>Error 400</a>
                                </li>
                                <li><a href="error-401.html" target="_blank"><i class="fa fa-circle"></i>Error 401</a>
                                </li>
                                <li><a href="error-403.html" target="_blank"><i class="fa fa-circle"></i>Error 403</a>
                                </li>
                                <li><a href="error-404.html" target="_blank"><i class="fa fa-circle"></i>Error 404</a>
                                </li>
                                <li><a href="error-500.html" target="_blank"><i class="fa fa-circle"></i>Error 500</a>
                                </li>
                                <li><a href="error-503.html" target="_blank"><i class="fa fa-circle"></i>Error 503</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="sidebar-header" href="#"><i data-feather="unlock"></i><span>
                                    Authentication</span><i class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li><a href="login.html" target="_blank"><i class="fa fa-circle"></i>Login Simple</a>
                                </li>
                                <li><a href="login-image.html" target="_blank"><i class="fa fa-circle"></i>Login with Bg
                                        Image</a></li>
                                <li><a href="login-video.html" target="_blank"><i class="fa fa-circle"></i>Login with Bg
                                        video</a></li>
                                <li><a href="signup.html" target="_blank"><i class="fa fa-circle"></i>Register
                                        Simple</a></li>
                                <li><a href="signup-image.html" target="_blank"><i class="fa fa-circle"></i>Register
                                        with Bg Image</a>
                                </li>
                                <li><a href="signup-video.html" target="_blank"><i class="fa fa-circle"></i>Register
                                        with Bg video</a>
                                </li>
                                <li><a href="unlock.html" target="_blank"><i class="fa fa-circle"></i>Unlock User</a>
                                </li>
                                <li><a href="forget-password.html" target="_blank"><i class="fa fa-circle"></i>Forget
                                        Password</a></li>
                                <li><a href="reset-password.html" target="_blank"><i class="fa fa-circle"></i>Reset
                                        Password</a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-header" href="#"><i data-feather="briefcase"></i><span>Coming
                                    Soon</span><i class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li><a href="comingsoon.html" target="_blank"><i class="fa fa-circle"></i>Coming
                                        Simple</a></li>
                                <li><a href="comingsoon-bg-video.html" target="_blank"><i
                                            class="fa fa-circle"></i>Coming with Bg
                                        video</a></li>
                                <li><a href="comingsoon-bg-img.html" target="_blank"><i class="fa fa-circle"></i>Coming
                                        with Bg
                                        Image</a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-header" href="maintenance.html" target="_blank"><i
                                    data-feather="settings"></i><span>
                                    Maintenance</span></a></li>
                    </ul>
                </div>
            </div>
            <!-- Page Sidebar Ends-->
            <!-- Right sidebar Start-->
            <div class="right-sidebar" id="right_side_bar">
                <div class="container p-0">
                    <div class="modal-header p-l-20 p-r-20">
                        <div class="col-sm-8 p-0">
                            <h6 class="modal-title fw-bold">FRIEND LIST</h6>
                        </div>
                        <div class="col-sm-4 text-end p-0"><i class="mr-2" data-feather="settings"></i></div>
                    </div>
                </div>
                <div class="friend-list-search mt-0">
                    <input type="text" placeholder="search friend"><i class="fa fa-search"></i>
                </div>
                <div class="chat-box">
                    <div class="people-list friend-list">
                        <ul class="list">
                            <li class="clearfix"><img class="rounded-circle user-image" src="./assets/images/user/1.jpg"
                                    alt="">
                                <div class="status-circle online"></div>
                                <div class="about">
                                    <div class="name">Vincent Porter</div>
                                    <div class="status"> Online</div>
                                </div>
                            </li>
                            <li class="clearfix"><img class="rounded-circle user-image" src="./assets/images/user/2.png"
                                    alt="">
                                <div class="status-circle away"></div>
                                <div class="about">
                                    <div class="name">Ain Chavez</div>
                                    <div class="status"> 28 minutes ago</div>
                                </div>
                            </li>
                            <li class="clearfix"><img class="rounded-circle user-image" src="./assets/images/user/8.jpg"
                                    alt="">
                                <div class="status-circle online"></div>
                                <div class="about">
                                    <div class="name">Kori Thomas</div>
                                    <div class="status"> Online</div>
                                </div>
                            </li>
                            <li class="clearfix"><img class="rounded-circle user-image" src="./assets/images/user/4.jpg"
                                    alt="">
                                <div class="status-circle online"></div>
                                <div class="about">
                                    <div class="name">Erica Hughes</div>
                                    <div class="status"> Online</div>
                                </div>
                            </li>
                            <li class="clearfix"><img class="rounded-circle user-image" src="./assets/images/user/5.jpg"
                                    alt="">
                                <div class="status-circle offline"></div>
                                <div class="about">
                                    <div class="name">Ginger Johnston</div>
                                    <div class="status"> 2 minutes ago</div>
                                </div>
                            </li>
                            <li class="clearfix"><img class="rounded-circle user-image" src="./assets/images/user/6.jpg"
                                    alt="">
                                <div class="status-circle away"></div>
                                <div class="about">
                                    <div class="name">Prasanth Anand</div>
                                    <div class="status"> 2 hour ago</div>
                                </div>
                            </li>
                            <li class="clearfix"><img class="rounded-circle user-image" src="./assets/images/user/7.jpg"
                                    alt="">
                                <div class="status-circle online"></div>
                                <div class="about">
                                    <div class="name">Hileri Jecno</div>
                                    <div class="status"> Online</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Right sidebar Ends-->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col">
                                <div class="page-header-left">
                                    <h3>Project</h3>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html" data-bs-original-title=""
                                                title=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-home">
                                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                                </svg></a></li>
                                        <li class="breadcrumb-item">Dashboard</li>
                                        <li class="breadcrumb-item active">Project</li>
                                    </ol>
                                </div>
                            </div>
                            <!-- Bookmark Start-->
                            <div class="col">
                                <div class="bookmark pull-right">
                                    <ul>
                                        <li><a href="#" data-bs-toggle="tooltip" title=""
                                                data-bs-original-title="Calender" aria-label="Calender"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-calendar">
                                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                                </svg></a></li>
                                        <li><a href="#" data-bs-toggle="tooltip" title="" data-bs-original-title="Mail"
                                                aria-label="Mail"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-mail">
                                                    <path
                                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                                    </path>
                                                    <polyline points="22,6 12,13 2,6"></polyline>
                                                </svg></a></li>
                                        <li><a href="#" data-bs-toggle="tooltip" title="" data-bs-original-title="Chat"
                                                aria-label="Chat"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-message-square">
                                                    <path
                                                        d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z">
                                                    </path>
                                                </svg></a></li>
                                        <li><a href="javascript:void(0)" data-bs-original-title="" title=""><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-star bookmark-search">
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                    </polygon>
                                                </svg></a>
                                            <form class="form-inline search-form">
                                                <div class="form-group form-control-search">
                                                    <input type="text" placeholder="Search.." data-bs-original-title=""
                                                        title="">
                                                </div>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Bookmark Ends-->
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 theme-tab">
                            <ul class="tabs tab-title">
                                <li class="current"><a href="tab-1" data-bs-original-title="" title=""><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                        </svg>Home</a></li>
                                <li><a href="tab-2" data-bs-original-title="" title=""><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-activity">
                                            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                        </svg>Budget Summary</a></li>
                                <li><a href="tab-3" data-bs-original-title="" title=""><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-users">
                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="9" cy="7" r="4"></circle>
                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                        </svg>Team Members</a></li>
                            </ul>
                            <div class="tab-content-cls">
                                <div class="tab-content active default visiable" id="tab-1">
                                    <div class="row">
                                        <div class="col-xl-3 col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="select2-drpdwn-project select-options">
                                                            <select class="form-select form-control-primary btn-square"
                                                                name="select">
                                                                <option value="opt1">Today</option>
                                                                <option value="opt2">Yesterday</option>
                                                                <option value="opt3">Tomorrow</option>
                                                                <option value="opt4">Monthly</option>
                                                                <option value="opt5">Weekly</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="project-widgets text-center">
                                                        <h1 class="font-primary counter">45</h1>
                                                        <h6 class="mb-0">Due Tasks</h6>
                                                    </div>
                                                </div>
                                                <div class="card-footer project-footer">
                                                    <h6 class="mb-0">Completed: <span class="counter">14</span></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <h5 class="mb-0">Features</h5>
                                                    </div>
                                                    <div class="project-widgets text-center">
                                                        <h1 class="font-primary counter">80</h1>
                                                        <h6 class="mb-0">Proposals</h6>
                                                    </div>
                                                </div>
                                                <div class="card-footer project-footer">
                                                    <h6 class="mb-0">Implemented: <span class="counter">14</span></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <h5 class="mb-0">Issues</h5>
                                                    </div>
                                                    <div class="project-widgets text-center">
                                                        <h1 class="font-primary counter">34</h1>
                                                        <h6 class="mb-0">Open</h6>
                                                    </div>
                                                </div>
                                                <div class="card-footer project-footer">
                                                    <h6 class="mb-0">Closed today: <span class="counter">10</span></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <h5 class="mb-0">Overdue</h5>
                                                    </div>
                                                    <div class="project-widgets text-center">
                                                        <h1 class="font-primary counter">7</h1>
                                                        <h6 class="mb-0">Tasks</h6>
                                                    </div>
                                                </div>
                                                <div class="card-footer project-footer">
                                                    <h6 class="mb-0">Task Solved: <span class="counter">4</span></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card">
                                                <div class="card-header project-header">
                                                    <div class="row">
                                                        <div class="col-sm-8">
                                                            <h5>Task Distribution</h5>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="select2-drpdwn-project select-options">
                                                                <select
                                                                    class="form-select form-control-primary btn-square"
                                                                    name="select">
                                                                    <option value="opt1">Today</option>
                                                                    <option value="opt2">Yesterday</option>
                                                                    <option value="opt3">Tomorrow</option>
                                                                    <option value="opt4">Monthly</option>
                                                                    <option value="opt5">Weekly</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body chart-block chart-vertical-center project-charts">
                                                    <canvas id="myDoughnutGraph" style="width: 530px; height: 265px;"
                                                        width="795" height="397"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card">
                                                <div class="card-header project-header">
                                                    <div class="row">
                                                        <div class="col-sm-8">
                                                            <h5>Schedule</h5>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="select2-drpdwn-project select-options">
                                                                <select
                                                                    class="form-select form-select-primary btn-square"
                                                                    name="select">
                                                                    <option value="opt1">Today</option>
                                                                    <option value="opt2">Yesterday</option>
                                                                    <option value="opt3">Tomorrow</option>
                                                                    <option value="opt4">Monthly</option>
                                                                    <option value="opt5">Weekly</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="schedule">
                                                        <div class="media">
                                                            <div class="media-body">
                                                                <h6>Group Meeting</h6>
                                                                <p>30 minutes</p>
                                                            </div>
                                                            <div class="dropdown schedule-dropdown">
                                                                <button class="btn dropdown-toggle"
                                                                    id="dropdownMenuButton" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false" data-bs-original-title=""
                                                                    title=""><svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24" viewBox="0 0 24 24"
                                                                        fill="none" stroke="currentColor"
                                                                        stroke-width="2" stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        class="feather feather-more-horizontal">
                                                                        <circle cx="12" cy="12" r="1"></circle>
                                                                        <circle cx="19" cy="12" r="1"></circle>
                                                                        <circle cx="5" cy="12" r="1"></circle>
                                                                    </svg></button>
                                                                <div class="dropdown-menu"
                                                                    aria-labelledby="dropdownMenuButton"><a
                                                                        class="dropdown-item" href="#"
                                                                        data-bs-original-title="" title="">Project</a><a
                                                                        class="dropdown-item" href="#"
                                                                        data-bs-original-title=""
                                                                        title="">Requirements</a><a
                                                                        class="dropdown-item" href="#"
                                                                        data-bs-original-title=""
                                                                        title="">Discussion</a><a class="dropdown-item"
                                                                        href="#" data-bs-original-title=""
                                                                        title="">Planning</a></div>
                                                            </div>
                                                        </div>
                                                        <div class="media">
                                                            <div class="media-body">
                                                                <h6>Public Beta Release</h6>
                                                                <p>10:00 PM</p>
                                                            </div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-more-horizontal">
                                                                <circle cx="12" cy="12" r="1"></circle>
                                                                <circle cx="19" cy="12" r="1"></circle>
                                                                <circle cx="5" cy="12" r="1"></circle>
                                                            </svg>
                                                        </div>
                                                        <div class="media">
                                                            <div class="media-body">
                                                                <h6>Lunch</h6>
                                                                <p>12:30 PM</p>
                                                            </div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-more-horizontal">
                                                                <circle cx="12" cy="12" r="1"></circle>
                                                                <circle cx="19" cy="12" r="1"></circle>
                                                                <circle cx="5" cy="12" r="1"></circle>
                                                            </svg>
                                                        </div>
                                                        <div class="media">
                                                            <div class="media-body">
                                                                <h6>Clients Timing</h6>
                                                                <p>2:00 PM to 6:00 PM</p>
                                                            </div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-more-horizontal">
                                                                <circle cx="12" cy="12" r="1"></circle>
                                                                <circle cx="19" cy="12" r="1"></circle>
                                                                <circle cx="5" cy="12" r="1"></circle>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Github Isuues</h5>
                                                    <div class="card-header-right">
                                                        <ul class="list-unstyled card-option">
                                                            <li><i class="icofont icofont-simple-left"></i></li>
                                                            <li><i class="view-html fa fa-code"></i></li>
                                                            <li><i class="icofont icofont-maximize full-card"></i></li>
                                                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                                                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                                                            <li><i class="icofont icofont-error close-card"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-xl-6 xl-100">
                                                            <div class="row more-projects">
                                                                <div class="col-sm-6 xl-4">
                                                                    <div class="projects-main">
                                                                        <div class="project-content">
                                                                            <h6>Created</h6>
                                                                            <h5 class="counter mb-0">27</h5>
                                                                        </div>
                                                                        <div
                                                                            class="project-small-chart-1 project-small">
                                                                            <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct"
                                                                                width="100%" height="100%"
                                                                                class="ct-chart-line"
                                                                                style="width: 100%; height: 100%;">
                                                                                <g class="ct-grids"></g>
                                                                                <g>
                                                                                    <g class="ct-series ct-series-a">
                                                                                        <path
                                                                                            d="M0,85L0,71C28.763,71,28.763,15,57.527,15C86.29,15,86.29,57,115.053,57C143.817,57,143.817,15,172.58,15C201.343,15,201.343,29,230.107,29C258.87,29,258.87,43,287.633,43L287.633,85Z"
                                                                                            class="ct-area"></path>
                                                                                        <path
                                                                                            d="M0,71C28.763,71,28.763,15,57.527,15C86.29,15,86.29,57,115.053,57C143.817,57,143.817,15,172.58,15C201.343,15,201.343,29,230.107,29C258.87,29,258.87,43,287.633,43"
                                                                                            class="ct-line"></path>
                                                                                        <line x1="0" y1="71" x2="0.01"
                                                                                            y2="71" class="ct-point"
                                                                                            ct:value="1"></line>
                                                                                        <line x1="57.526666259765626"
                                                                                            y1="15"
                                                                                            x2="57.536666259765624"
                                                                                            y2="15" class="ct-point"
                                                                                            ct:value="5"></line>
                                                                                        <line x1="115.05333251953125"
                                                                                            y1="57"
                                                                                            x2="115.06333251953126"
                                                                                            y2="57" class="ct-point"
                                                                                            ct:value="2"></line>
                                                                                        <line x1="172.5799987792969"
                                                                                            y1="15"
                                                                                            x2="172.58999877929688"
                                                                                            y2="15" class="ct-point"
                                                                                            ct:value="5"></line>
                                                                                        <line x1="230.1066650390625"
                                                                                            y1="29"
                                                                                            x2="230.1166650390625"
                                                                                            y2="29" class="ct-point"
                                                                                            ct:value="4"></line>
                                                                                        <line x1="287.6333312988281"
                                                                                            y1="43"
                                                                                            x2="287.6433312988281"
                                                                                            y2="43" class="ct-point"
                                                                                            ct:value="3"></line>
                                                                                    </g>
                                                                                </g>
                                                                                <g class="ct-labels"></g>
                                                                                <defs>
                                                                                    <linearGradient id="gradient5"
                                                                                        x1="1" y1="0" x2="0" y2="1">
                                                                                        <stop offset="0"
                                                                                            stop-color="#4466f2">
                                                                                        </stop>
                                                                                        <stop offset="1"
                                                                                            stop-color="#1ea6ec">
                                                                                        </stop>
                                                                                    </linearGradient>
                                                                                </defs>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6 xl-4">
                                                                    <div class="projects-main">
                                                                        <div class="project-content">
                                                                            <h6>Fixed</h6>
                                                                            <h5 class="counter mb-0">8</h5>
                                                                        </div>
                                                                        <div
                                                                            class="project-small-chart-2 project-small">
                                                                            <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct"
                                                                                width="100%" height="100%"
                                                                                class="ct-chart-line"
                                                                                style="width: 100%; height: 100%;">
                                                                                <g class="ct-grids"></g>
                                                                                <g>
                                                                                    <g class="ct-series ct-series-a">
                                                                                        <path
                                                                                            d="M5,85L5,15C22.842,29,40.684,57,58.527,57C76.369,57,94.211,43,112.053,43C129.896,43,147.738,71,165.58,71C183.422,71,201.264,43,219.107,43C236.949,43,254.791,52.333,272.633,57L272.633,85Z"
                                                                                            class="ct-area"></path>
                                                                                        <path
                                                                                            d="M5,15C22.842,29,40.684,57,58.527,57C76.369,57,94.211,43,112.053,43C129.896,43,147.738,71,165.58,71C183.422,71,201.264,43,219.107,43C236.949,43,254.791,52.333,272.633,57"
                                                                                            class="ct-line"></path>
                                                                                    </g>
                                                                                </g>
                                                                                <g class="ct-labels"></g>
                                                                                <defs>
                                                                                    <linearGradient id="gradient6"
                                                                                        x1="1" y1="0" x2="0" y2="1">
                                                                                        <stop offset="0"
                                                                                            stop-color="#4466f2">
                                                                                        </stop>
                                                                                        <stop offset="1"
                                                                                            stop-color="#1ea6ec">
                                                                                        </stop>
                                                                                    </linearGradient>
                                                                                </defs>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6 xl-4">
                                                                    <div class="projects-main">
                                                                        <div class="project-content">
                                                                            <h6>Re-opened</h6>
                                                                            <h5 class="counter mb-0">2</h5>
                                                                        </div>
                                                                        <div
                                                                            class="project-small-chart-3 project-small">
                                                                            <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct"
                                                                                width="100%" height="100%"
                                                                                class="ct-chart-line"
                                                                                style="width: 100%; height: 100%;">
                                                                                <g class="ct-grids"></g>
                                                                                <g>
                                                                                    <g class="ct-series ct-series-a">
                                                                                        <path
                                                                                            d="M5,85L5,71C22.842,66.333,40.684,64,58.527,57C76.369,50,94.211,15,112.053,15C129.896,15,147.738,71,165.58,71C183.422,71,201.264,29,219.107,29C236.949,29,254.791,38.333,272.633,43L272.633,85Z"
                                                                                            class="ct-area"></path>
                                                                                        <path
                                                                                            d="M5,71C22.842,66.333,40.684,64,58.527,57C76.369,50,94.211,15,112.053,15C129.896,15,147.738,71,165.58,71C183.422,71,201.264,29,219.107,29C236.949,29,254.791,38.333,272.633,43"
                                                                                            class="ct-line"></path>
                                                                                    </g>
                                                                                </g>
                                                                                <g class="ct-labels"></g>
                                                                                <defs>
                                                                                    <linearGradient id="gradient7"
                                                                                        x1="1" y1="0" x2="0" y2="1">
                                                                                        <stop offset="0"
                                                                                            stop-color="#4466f2">
                                                                                        </stop>
                                                                                        <stop offset="1"
                                                                                            stop-color="#1ea6ec">
                                                                                        </stop>
                                                                                    </linearGradient>
                                                                                </defs>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6 xl-4">
                                                                    <div class="projects-main">
                                                                        <div class="project-content">
                                                                            <h6>Closed</h6>
                                                                            <h5 class="counter mb-0">10</h5>
                                                                        </div>
                                                                        <div
                                                                            class="project-small-chart-4 project-small">
                                                                            <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct"
                                                                                width="100%" height="100%"
                                                                                class="ct-chart-line"
                                                                                style="width: 100%; height: 100%;">
                                                                                <g class="ct-grids"></g>
                                                                                <g>
                                                                                    <g class="ct-series ct-series-a">
                                                                                        <path
                                                                                            d="M5,85L5,67.5C22.842,61.667,40.684,57.778,58.527,50C76.369,42.222,94.211,15,112.053,15C129.896,15,147.738,26.667,165.58,32.5C183.422,38.333,201.264,50,219.107,50C236.949,50,254.791,38.333,272.633,32.5L272.633,85Z"
                                                                                            class="ct-area"></path>
                                                                                        <path
                                                                                            d="M5,67.5C22.842,61.667,40.684,57.778,58.527,50C76.369,42.222,94.211,15,112.053,15C129.896,15,147.738,26.667,165.58,32.5C183.422,38.333,201.264,50,219.107,50C236.949,50,254.791,38.333,272.633,32.5"
                                                                                            class="ct-line"></path>
                                                                                    </g>
                                                                                </g>
                                                                                <g class="ct-labels"></g>
                                                                                <defs>
                                                                                    <linearGradient id="gradient8"
                                                                                        x1="1" y1="0" x2="0" y2="1">
                                                                                        <stop offset="0"
                                                                                            stop-color="#4466f2">
                                                                                        </stop>
                                                                                        <stop offset="1"
                                                                                            stop-color="#1ea6ec">
                                                                                        </stop>
                                                                                    </linearGradient>
                                                                                </defs>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6 xl-4">
                                                                    <div class="projects-main">
                                                                        <div class="project-content">
                                                                            <h6>Wont'fix</h6>
                                                                            <h5 class="counter mb-0">25</h5>
                                                                        </div>
                                                                        <div
                                                                            class="project-small-chart-5 project-small">
                                                                            <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct"
                                                                                width="100%" height="100%"
                                                                                class="ct-chart-line"
                                                                                style="width: 100%; height: 100%;">
                                                                                <g class="ct-grids"></g>
                                                                                <g>
                                                                                    <g class="ct-series ct-series-a">
                                                                                        <path
                                                                                            d="M5,85L5,85C22.842,61.667,40.684,15,58.527,15C76.369,15,94.211,57,112.053,57C129.896,57,147.738,43,165.58,43C183.422,43,201.264,71,219.107,71C236.949,71,254.791,52.333,272.633,43L272.633,85Z"
                                                                                            class="ct-area"></path>
                                                                                        <path
                                                                                            d="M5,85C22.842,61.667,40.684,15,58.527,15C76.369,15,94.211,57,112.053,57C129.896,57,147.738,43,165.58,43C183.422,43,201.264,71,219.107,71C236.949,71,254.791,52.333,272.633,43"
                                                                                            class="ct-line"></path>
                                                                                    </g>
                                                                                </g>
                                                                                <g class="ct-labels"></g>
                                                                                <defs>
                                                                                    <linearGradient id="gradient9"
                                                                                        x1="1" y1="0" x2="0" y2="1">
                                                                                        <stop offset="0"
                                                                                            stop-color="#4466f2">
                                                                                        </stop>
                                                                                        <stop offset="1"
                                                                                            stop-color="#1ea6ec">
                                                                                        </stop>
                                                                                    </linearGradient>
                                                                                </defs>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6 xl-4">
                                                                    <div class="projects-main">
                                                                        <div class="project-content">
                                                                            <h6>Need's test</h6>
                                                                            <h5 class="counter mb-0">5</h5>
                                                                        </div>
                                                                        <div
                                                                            class="project-small-chart-6 project-small">
                                                                            <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct"
                                                                                width="100%" height="100%"
                                                                                class="ct-chart-line"
                                                                                style="width: 100%; height: 100%;">
                                                                                <g class="ct-grids"></g>
                                                                                <g>
                                                                                    <g class="ct-series ct-series-a">
                                                                                        <path
                                                                                            d="M5,85L5,61.667C22.842,53.889,40.684,46.111,58.527,38.333C76.369,30.556,94.211,15,112.053,15C129.896,15,147.738,61.667,165.58,61.667C183.422,61.667,201.264,46.111,219.107,38.333C236.949,30.556,254.791,22.778,272.633,15L272.633,85Z"
                                                                                            class="ct-area"></path>
                                                                                        <path
                                                                                            d="M5,61.667C22.842,53.889,40.684,46.111,58.527,38.333C76.369,30.556,94.211,15,112.053,15C129.896,15,147.738,61.667,165.58,61.667C183.422,61.667,201.264,46.111,219.107,38.333C236.949,30.556,254.791,22.778,272.633,15"
                                                                                            class="ct-line"></path>
                                                                                    </g>
                                                                                </g>
                                                                                <g class="ct-labels"></g>
                                                                                <defs>
                                                                                    <linearGradient id="gradient10"
                                                                                        x1="1" y1="0" x2="0" y2="1">
                                                                                        <stop offset="0"
                                                                                            stop-color="#4466f2">
                                                                                        </stop>
                                                                                        <stop offset="1"
                                                                                            stop-color="#1ea6ec">
                                                                                        </stop>
                                                                                    </linearGradient>
                                                                                </defs>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 xl-100 github-lg">
                                                            <div class="show-value-top d-flex">
                                                                <div class="value-left d-inline-block">
                                                                    <div class="square bg-primary d-inline-block"></div>
                                                                    <span>Closed
                                                                        Issues</span>
                                                                </div>
                                                                <div class="value-right d-inline-block">
                                                                    <div class="square d-inline-block bg-smooth-chart">
                                                                    </div>
                                                                    <span>Issues</span>
                                                                </div>
                                                            </div>
                                                            <div class="github-chart">
                                                                <div class="flot-chart-placeholder" id="github-issues"
                                                                    style="position: relative;"><svg height="448"
                                                                        version="1.1" width="911"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        style="overflow: hidden; position: relative; top: -0.266724px;">
                                                                        <desc>Created with Raphaël 2.2.0</desc>
                                                                        <defs></defs><text
                                                                            style="text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                                                            x="19.666666507720947" y="409.6666669845581"
                                                                            text-anchor="end" font-family="sans-serif"
                                                                            font-size="12px" stroke="none"
                                                                            fill="#888888" font-weight="normal">
                                                                            <tspan dy="4.000000476837158">0</tspan>
                                                                        </text>
                                                                        <path style="" fill="none" stroke="#aaaaaa"
                                                                            d="M32.16666650772095,409.5H886"
                                                                            stroke-width="0.5">
                                                                        </path><text
                                                                            style="text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                                                            x="19.666666507720947" y="313.5000002384186"
                                                                            text-anchor="end" font-family="sans-serif"
                                                                            font-size="12px" stroke="none"
                                                                            fill="#888888" font-weight="normal">
                                                                            <tspan dy="3.999990224838257">2</tspan>
                                                                        </text>
                                                                        <path style="" fill="none" stroke="#aaaaaa"
                                                                            d="M32.16666650772095,313.5H886"
                                                                            stroke-width="0.5">
                                                                        </path><text
                                                                            style="text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                                                            x="19.666666507720947"
                                                                            y="217.33333349227905" text-anchor="end"
                                                                            font-family="sans-serif" font-size="12px"
                                                                            stroke="none" fill="#888888"
                                                                            font-weight="normal">
                                                                            <tspan dy="4.0000104904174805">4</tspan>
                                                                        </text>
                                                                        <path style="" fill="none" stroke="#aaaaaa"
                                                                            d="M32.16666650772095,217.5H886"
                                                                            stroke-width="0.5">
                                                                        </path><text
                                                                            style="text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                                                            x="19.666666507720947"
                                                                            y="121.16666674613953" text-anchor="end"
                                                                            font-family="sans-serif" font-size="12px"
                                                                            stroke="none" fill="#888888"
                                                                            font-weight="normal">
                                                                            <tspan dy="4.000000238418579">6</tspan>
                                                                        </text>
                                                                        <path style="" fill="none" stroke="#aaaaaa"
                                                                            d="M32.16666650772095,121.5H886"
                                                                            stroke-width="0.5">
                                                                        </path><text
                                                                            style="text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                                                            x="19.666666507720947" y="25"
                                                                            text-anchor="end" font-family="sans-serif"
                                                                            font-size="12px" stroke="none"
                                                                            fill="#888888" font-weight="normal">
                                                                            <tspan dy="4.000000476837158">8</tspan>
                                                                        </text>
                                                                        <path style="" fill="none" stroke="#aaaaaa"
                                                                            d="M32.16666650772095,25.5H886"
                                                                            stroke-width="0.5">
                                                                        </path><text
                                                                            style="text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                                                            x="825.0119047505515" y="422.1666669845581"
                                                                            text-anchor="middle"
                                                                            font-family="sans-serif" font-size="12px"
                                                                            stroke="none" fill="#888888"
                                                                            font-weight="normal"
                                                                            transform="matrix(1,0,0,1,0,6.6667)">
                                                                            <tspan dy="4.000000476837158">Sun</tspan>
                                                                        </text><text
                                                                            style="text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                                                            x="703.0357142516544" y="422.1666669845581"
                                                                            text-anchor="middle"
                                                                            font-family="sans-serif" font-size="12px"
                                                                            stroke="none" fill="#888888"
                                                                            font-weight="normal"
                                                                            transform="matrix(1,0,0,1,0,6.6667)">
                                                                            <tspan dy="4.000000476837158">Sat</tspan>
                                                                        </text><text
                                                                            style="text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                                                            x="581.0595237527575" y="422.1666669845581"
                                                                            text-anchor="middle"
                                                                            font-family="sans-serif" font-size="12px"
                                                                            stroke="none" fill="#888888"
                                                                            font-weight="normal"
                                                                            transform="matrix(1,0,0,1,0,6.6667)">
                                                                            <tspan dy="4.000000476837158">Fri</tspan>
                                                                        </text><text
                                                                            style="text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                                                            x="459.0833332538605" y="422.1666669845581"
                                                                            text-anchor="middle"
                                                                            font-family="sans-serif" font-size="12px"
                                                                            stroke="none" fill="#888888"
                                                                            font-weight="normal"
                                                                            transform="matrix(1,0,0,1,0,6.6667)">
                                                                            <tspan dy="4.000000476837158">Thu</tspan>
                                                                        </text><text
                                                                            style="text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                                                            x="337.1071427549635" y="422.1666669845581"
                                                                            text-anchor="middle"
                                                                            font-family="sans-serif" font-size="12px"
                                                                            stroke="none" fill="#888888"
                                                                            font-weight="normal"
                                                                            transform="matrix(1,0,0,1,0,6.6667)">
                                                                            <tspan dy="4.000000476837158">Wed</tspan>
                                                                        </text><text
                                                                            style="text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                                                            x="215.13095225606645" y="422.1666669845581"
                                                                            text-anchor="middle"
                                                                            font-family="sans-serif" font-size="12px"
                                                                            stroke="none" fill="#888888"
                                                                            font-weight="normal"
                                                                            transform="matrix(1,0,0,1,0,6.6667)">
                                                                            <tspan dy="4.000000476837158">Tue</tspan>
                                                                        </text><text
                                                                            style="text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                                                            x="93.15476175716945" y="422.1666669845581"
                                                                            text-anchor="middle"
                                                                            font-family="sans-serif" font-size="12px"
                                                                            stroke="none" fill="#888888"
                                                                            font-weight="normal"
                                                                            transform="matrix(1,0,0,1,0,6.6667)">
                                                                            <tspan dy="4.000000476837158">Mon</tspan>
                                                                        </text>
                                                                        <rect x="47.41369032008308"
                                                                            y="265.4166668653488"
                                                                            width="91.48214287417275"
                                                                            height="144.2500001192093" rx="0" ry="0"
                                                                            fill="#4466f2" stroke="none"
                                                                            style="fill-opacity: 1;" fill-opacity="1">
                                                                        </rect>
                                                                        <rect x="47.41369032008308"
                                                                            y="169.2500001192093"
                                                                            width="91.48214287417275"
                                                                            height="96.16666674613953" rx="0" ry="0"
                                                                            fill="#1ea6ec" stroke="none"
                                                                            style="fill-opacity: 1;" fill-opacity="1">
                                                                        </rect>
                                                                        <rect x="169.3898808189801"
                                                                            y="265.4166668653488"
                                                                            width="91.48214287417275"
                                                                            height="144.2500001192093" rx="0" ry="0"
                                                                            fill="#4466f2" stroke="none"
                                                                            style="fill-opacity: 1;" fill-opacity="1">
                                                                        </rect>
                                                                        <rect x="291.3660713178771"
                                                                            y="409.6666669845581"
                                                                            width="91.48214287417275" height="0" rx="0"
                                                                            ry="0" fill="#4466f2" stroke="none"
                                                                            style="fill-opacity: 1;" fill-opacity="1">
                                                                        </rect>
                                                                        <rect x="291.3660713178771"
                                                                            y="337.54166692495346"
                                                                            width="91.48214287417275"
                                                                            height="72.12500005960464" rx="0" ry="0"
                                                                            fill="#1ea6ec" stroke="none"
                                                                            style="fill-opacity: 1;" fill-opacity="1">
                                                                        </rect>
                                                                        <rect x="413.3422618167741"
                                                                            y="313.5000002384186"
                                                                            width="91.48214287417275"
                                                                            height="96.16666674613953" rx="0" ry="0"
                                                                            fill="#4466f2" stroke="none"
                                                                            style="fill-opacity: 1;" fill-opacity="1">
                                                                        </rect>
                                                                        <rect x="535.3184523156712"
                                                                            y="409.6666669845581"
                                                                            width="91.48214287417275" height="0" rx="0"
                                                                            ry="0" fill="#4466f2" stroke="none"
                                                                            style="fill-opacity: 1;" fill-opacity="1">
                                                                        </rect>
                                                                        <rect x="535.3184523156712"
                                                                            y="241.37500017881393"
                                                                            width="91.48214287417275"
                                                                            height="168.29166680574417" rx="0" ry="0"
                                                                            fill="#1ea6ec" stroke="none"
                                                                            style="fill-opacity: 1;" fill-opacity="1">
                                                                        </rect>
                                                                        <rect x="657.2946428145682"
                                                                            y="265.4166668653488"
                                                                            width="91.48214287417275"
                                                                            height="144.2500001192093" rx="0" ry="0"
                                                                            fill="#4466f2" stroke="none"
                                                                            style="fill-opacity: 1;" fill-opacity="1">
                                                                        </rect>
                                                                        <rect x="657.2946428145682"
                                                                            y="169.2500001192093"
                                                                            width="91.48214287417275"
                                                                            height="96.16666674613953" rx="0" ry="0"
                                                                            fill="#1ea6ec" stroke="none"
                                                                            style="fill-opacity: 1;" fill-opacity="1">
                                                                        </rect>
                                                                        <rect x="779.2708333134651"
                                                                            y="409.6666669845581"
                                                                            width="91.48214287417275" height="0" rx="0"
                                                                            ry="0" fill="#4466f2" stroke="none"
                                                                            style="fill-opacity: 1;" fill-opacity="1">
                                                                        </rect>
                                                                        <rect x="779.2708333134651"
                                                                            y="313.5000002384186"
                                                                            width="91.48214287417275"
                                                                            height="96.16666674613953" rx="0" ry="0"
                                                                            fill="#1ea6ec" stroke="none"
                                                                            style="fill-opacity: 1;" fill-opacity="1">
                                                                        </rect>
                                                                    </svg>
                                                                    <div class="morris-hover morris-default-style"
                                                                        style="left: 806.262px; top: 187px;">
                                                                        <div class="morris-hover-row-label">Sun</div>
                                                                        <div class="morris-hover-point"
                                                                            style="color: #4466f2">
                                                                            Y:
                                                                            0
                                                                        </div>
                                                                        <div class="morris-hover-point"
                                                                            style="color: #1ea6ec">
                                                                            Z:
                                                                            2
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="code-box-copy">
                                                        <button class="code-box-copy__btn btn-clipboard"
                                                            data-clipboard-target="#example-head" title=""
                                                            data-bs-original-title="Copy" aria-label="Copy"><i
                                                                class="icofont icofont-copy-alt"></i></button>
                                                        <pre class=" language-html"><code class=" language-html" id="example-head"><span class="token comment" spellcheck="true">&lt;!-- Cod Box Copy begin --&gt;</span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>row<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>col-lg-6<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>row more-projects<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>col-sm-6<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>projects-main<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>project-content<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>h6</span><span class="token punctuation">&gt;</span></span>Created<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>h6</span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>h5</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>counter mb-0<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>27<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>h5</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>project-small-chart-1 project-small<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>col-sm-6<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>projects-main<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>project-content<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>h6</span><span class="token punctuation">&gt;</span></span>Fixed<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>h6</span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>h5</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>counter mb-0<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>8<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>h5</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>project-small-chart-2 project-small<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>col-sm-6<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>projects-main<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>project-content<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>h6</span><span class="token punctuation">&gt;</span></span>Re-opened<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>h6</span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>h5</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>counter mb-0<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>2<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>h5</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>project-small-chart-3 project-small<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>col-sm-6<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>projects-main<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>project-content<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>h6</span><span class="token punctuation">&gt;</span></span>Closed<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>h6</span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>h5</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>counter mb-0<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>10<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>h5</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>project-small-chart-4 project-small<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>col-sm-6<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>projects-main<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>project-content<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>h6</span><span class="token punctuation">&gt;</span></span>Wont'fix<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>h6</span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>h5</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>counter mb-0<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>25<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>h5</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>project-small-chart-5 project-small<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>col-sm-6<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>projects-main<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>project-content<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>h6</span><span class="token punctuation">&gt;</span></span>Need's test<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>h6</span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>h5</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>counter mb-0<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>5<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>h5</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>project-small-chart-6 project-small<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>col-lg-6<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>show-value-top d-flex<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>value-left d-inline-block<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>square bg-primary d-inline-block<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>span</span><span class="token punctuation">&gt;</span></span>Closed Issues<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>span</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>value-right d-inline-block<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>square d-inline-block bg-smooth-chart<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>span</span><span class="token punctuation">&gt;</span></span>Issues<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>span</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>github-chart<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>github-issues<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>flot-chart-placeholder<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
<span class="token comment" spellcheck="true">&lt;!-- Cod Box Copy end --&gt;</span></code></pre>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content" id="tab-2">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Current Progress</h5>
                                                    <div class="card-header-right">
                                                        <ul class="list-unstyled card-option">
                                                            <li><i class="icofont icofont-simple-left"></i></li>
                                                            <li><i class="view-html fa fa-code"></i></li>
                                                            <li><i class="icofont icofont-maximize full-card"></i></li>
                                                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                                                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                                                            <li><i class="icofont icofont-error close-card"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="table-responsive current-progress">
                                                        <table class="table table-bordernone">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-inline-block align-middle"><img
                                                                                class="img-radius img-50 align-top m-r-15 rounded-circle"
                                                                                src="assets/images/user/1.jpg" alt="">
                                                                            <div class="d-inline-block">
                                                                                <h6>Web application</h6>
                                                                                <p>Design &amp; development</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-inline-block align-middle">
                                                                            <span>Latest
                                                                                Updated Today at 1:30 PM</span><span
                                                                                class="ml-current"><i
                                                                                    class="fa fa-clock-o"></i>10:32</span><span
                                                                                class="ml-current"><i
                                                                                    class="fa fa-comment"></i>540</span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="progress sm-progress-bar">
                                                                            <div class="progress-bar bg-primary"
                                                                                role="progressbar" style="width: 60%"
                                                                                aria-valuenow="60" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-inline-block align-middle"><img
                                                                                class="img-radius img-50 align-top m-r-15 rounded-circle"
                                                                                src="assets/images/user/4.jpg" alt="">
                                                                            <div class="d-inline-block">
                                                                                <h6>Login module</h6>
                                                                                <p>Development</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-inline-block align-middle">
                                                                            <span>Latest
                                                                                Updated Today at 4:00 PM</span><span
                                                                                class="ml-current"><i
                                                                                    class="fa fa-clock-o"></i>1:32</span><span
                                                                                class="ml-current"><i
                                                                                    class="fa fa-comment"></i>700</span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="progress sm-progress-bar">
                                                                            <div class="progress-bar bg-primary"
                                                                                role="progressbar" style="width: 50%"
                                                                                aria-valuenow="50" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-inline-block align-middle"><img
                                                                                class="img-radius img-50 align-top m-r-15 rounded-circle"
                                                                                src="assets/images/user/7.jpg" alt="">
                                                                            <div class="d-inline-block">
                                                                                <h6>Module testing</h6>
                                                                                <p>Testing</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-inline-block align-middle">
                                                                            <span>Latest
                                                                                Updated Today at 5:45 PM</span><span
                                                                                class="ml-current"><i
                                                                                    class="fa fa-clock-o"></i>11:40</span><span
                                                                                class="ml-current"><i
                                                                                    class="fa fa-comment"></i>425</span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="progress sm-progress-bar">
                                                                            <div class="progress-bar bg-primary"
                                                                                role="progressbar" style="width: 90%"
                                                                                aria-valuenow="90" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="code-box-copy">
                                                        <button class="code-box-copy__btn btn-clipboard"
                                                            data-clipboard-target="#example-head1" title=""
                                                            data-bs-original-title="Copy" aria-label="Copy"><i
                                                                class="icofont icofont-copy-alt"></i></button>
                                                        <pre class=" language-html"><code class=" language-html" id="example-head1"><span class="token comment" spellcheck="true">&lt;!-- Cod Box Copy begin --&gt;</span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>table-responsive current-progress<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>table</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>table table-bordernone<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>tbody</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>tr</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>d-inline-block align-middle<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>img</span> <span class="token attr-name">src</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>assets/images/user/1.jpg<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>img-radius img-50 align-top m-r-15 rounded-circle<span class="token punctuation">"</span></span> <span class="token attr-name">alt</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span><span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>d-inline-block<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
              <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>h6</span><span class="token punctuation">&gt;</span></span>Web application<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>h6</span><span class="token punctuation">&gt;</span></span>
              <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>p</span><span class="token punctuation">&gt;</span></span>Design &amp; development<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>p</span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>d-inline-block align-middle<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>span</span><span class="token punctuation">&gt;</span></span>Latest Updated Today at 1:30 PM<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>span</span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>span</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>ml-current<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>fa fa-clock-o<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span>10:32<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>span</span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>span</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>ml-current<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>fa fa-comment<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span>540<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>span</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>progress sm-progress-bar<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>progress-bar bg-primary<span class="token punctuation">"</span></span> <span class="token attr-name">role</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>progressbar<span class="token punctuation">"</span></span><span class="token style-attr language-css"><span class="token attr-name"> <span class="token attr-name">style</span></span><span class="token punctuation">="</span><span class="token attr-value"><span class="token property">width</span><span class="token punctuation">:</span> 60%</span><span class="token punctuation">"</span></span> <span class="token attr-name">aria-valuenow</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>60<span class="token punctuation">"</span></span> <span class="token attr-name">aria-valuemin</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>0<span class="token punctuation">"</span></span> <span class="token attr-name">aria-valuemax</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>100<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>tr</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>tr</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>d-inline-block align-middle<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>img</span> <span class="token attr-name">src</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>assets/images/user/4.jpg<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>img-radius img-50 align-top m-r-15 rounded-circle<span class="token punctuation">"</span></span> <span class="token attr-name">alt</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span><span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>d-inline-block<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
              <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>h6</span><span class="token punctuation">&gt;</span></span>Login module<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>h6</span><span class="token punctuation">&gt;</span></span>
              <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>p</span><span class="token punctuation">&gt;</span></span>Development<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>p</span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>d-inline-block align-middle<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>span</span><span class="token punctuation">&gt;</span></span>Latest Updated Today at 4:00 PM<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>span</span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>span</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>ml-current<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>fa fa-clock-o<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span>1:32<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>span</span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>span</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>ml-current<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>fa fa-comment<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span>700<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>span</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>progress sm-progress-bar<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>progress-bar bg-primary<span class="token punctuation">"</span></span> <span class="token attr-name">role</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>progressbar<span class="token punctuation">"</span></span><span class="token style-attr language-css"><span class="token attr-name"> <span class="token attr-name">style</span></span><span class="token punctuation">="</span><span class="token attr-value"><span class="token property">width</span><span class="token punctuation">:</span> 50%</span><span class="token punctuation">"</span></span> <span class="token attr-name">aria-valuenow</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>50<span class="token punctuation">"</span></span> <span class="token attr-name">aria-valuemin</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>0<span class="token punctuation">"</span></span> <span class="token attr-name">aria-valuemax</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>100<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>tr</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>tr</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>d-inline-block align-middle<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>img</span> <span class="token attr-name">src</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>assets/images/user/7.jpg<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>img-radius img-50 align-top m-r-15 rounded-circle<span class="token punctuation">"</span></span> <span class="token attr-name">alt</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span><span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>d-inline-block<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
              <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>h6</span><span class="token punctuation">&gt;</span></span>Module testing<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>h6</span><span class="token punctuation">&gt;</span></span>
              <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>p</span><span class="token punctuation">&gt;</span></span>Testing<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>p</span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>d-inline-block align-middle<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>span</span><span class="token punctuation">&gt;</span></span>Latest Updated Today at 5:45 PM<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>span</span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>span</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>ml-current<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>fa fa-clock-o<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span>11:40<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>span</span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>span</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>ml-current<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>fa fa-comment<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span>425<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>span</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>progress sm-progress-bar<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>progress-bar bg-primary<span class="token punctuation">"</span></span> <span class="token attr-name">role</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>progressbar<span class="token punctuation">"</span></span><span class="token style-attr language-css"><span class="token attr-name"> <span class="token attr-name">style</span></span><span class="token punctuation">="</span><span class="token attr-value"><span class="token property">width</span><span class="token punctuation">:</span> 90%</span><span class="token punctuation">"</span></span> <span class="token attr-name">aria-valuenow</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>90<span class="token punctuation">"</span></span> <span class="token attr-name">aria-valuemin</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>0<span class="token punctuation">"</span></span> <span class="token attr-name">aria-valuemax</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>100<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>tr</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>tbody</span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>table</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
<span class="token comment" spellcheck="true">&lt;!-- Cod Box Copy end --&gt;</span></code></pre>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 xl-100">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Budget Distribution</h5>
                                                    <div class="card-header-right">
                                                        <ul class="list-unstyled card-option">
                                                            <li><i class="icofont icofont-simple-left"></i></li>
                                                            <li><i class="view-html fa fa-code"></i></li>
                                                            <li><i class="icofont icofont-maximize full-card"></i></li>
                                                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                                                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                                                            <li><i class="icofont icofont-error close-card"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card-body chart-block">
                                                    <div class="flot-chart-container budget-chart">
                                                        <div class="flot-chart-placeholder" id="default-pie-flot-chart"
                                                            style="padding: 0px; position: relative;"><canvas
                                                                class="flot-base"
                                                                style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 911px; height: 412px;"
                                                                width="1366" height="618"></canvas><canvas
                                                                class="flot-overlay"
                                                                style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 911px; height: 412px;"
                                                                width="1366" height="618"></canvas>
                                                            <div class="legend">
                                                                <div
                                                                    style="position: absolute; width: 59.7167px; height: 56.4px; top: 5px; right: 5px; background-color: rgb(255, 255, 255); opacity: 0.85;">
                                                                </div>
                                                                <table
                                                                    style="position:absolute;top:5px;right:5px;;font-size:smaller;color:#545454">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="legendColorBox">
                                                                                <div
                                                                                    style="border:1px solid #ccc;padding:1px">
                                                                                    <div
                                                                                        style="width:4px;height:0;border:5px solid rgb(68,102,242);overflow:hidden">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="legendLabel">Series1</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="legendColorBox">
                                                                                <div
                                                                                    style="border:1px solid #ccc;padding:1px">
                                                                                    <div
                                                                                        style="width:4px;height:0;border:5px solid rgb(30,166,236);overflow:hidden">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="legendLabel">Series2</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="legendColorBox">
                                                                                <div
                                                                                    style="border:1px solid #ccc;padding:1px">
                                                                                    <div
                                                                                        style="width:4px;height:0;border:5px solid rgb(34,175,71);overflow:hidden">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="legendLabel">Series3</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="code-box-copy">
                                                        <button class="code-box-copy__btn btn-clipboard"
                                                            data-clipboard-target="#example-head3" title=""
                                                            data-bs-original-title="Copy" aria-label="Copy"><i
                                                                class="icofont icofont-copy-alt"></i></button>
                                                        <pre class=" language-html"><code class=" language-html" id="example-head3"><span class="token comment" spellcheck="true">&lt;!-- Cod Box Copy begin --&gt;</span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card-body chart-block<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>flot-chart-container budget-chart<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>default-pie-flot-chart<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>flot-chart-placeholder<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
<span class="token comment" spellcheck="true">&lt;!-- Cod Box Copy end --&gt;</span></code></pre>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 xl-100">
                                            <div class="card">
                                                <div class="card-header project-header">
                                                    <div class="row">
                                                        <div class="col-sm-8">
                                                            <h5>Spent</h5>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="select2-drpdwn-project select-options">
                                                                <select
                                                                    class="form-select form-control-primary btn-square"
                                                                    name="select">
                                                                    <option value="opt1">Today</option>
                                                                    <option value="opt2">Yesterday</option>
                                                                    <option value="opt3">Tomorrow</option>
                                                                    <option value="opt4">Monthly</option>
                                                                    <option value="opt5">Weekly</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body spent">
                                                    <div class="spent-graph">
                                                        <div class="d-flex">
                                                            <div class="project-budget">
                                                                <h6>Weekly spent</h6>
                                                                <h2 class="mb-0"><span><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-dollar-sign">
                                                                            <line x1="12" y1="1" x2="12" y2="23"></line>
                                                                            <path
                                                                                d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6">
                                                                            </path>
                                                                        </svg>12,5000</span></h2>
                                                            </div>
                                                            <div class="projects-main mb-0">
                                                                <div class="xm-mb-peity"><span class="bar-colours-1"
                                                                        style="display: none;">5,3,9,6,5,9,7,3,5,2,5,3,9,6,5,9,7,3,5,2,5,3,9,6,5,9,7,3,5,2</span><svg
                                                                        class="peity" height="50" width="500">
                                                                        <rect fill="#4466f2" x="1.6666666666666667"
                                                                            y="22.22222222222222"
                                                                            width="13.333333333333334"
                                                                            height="27.77777777777778"></rect>
                                                                        <rect fill="#1ea6ec" x="18.333333333333332"
                                                                            y="33.333333333333336"
                                                                            width="13.333333333333336"
                                                                            height="16.666666666666664"></rect>
                                                                        <rect fill="#22af47" x="35" y="0"
                                                                            width="13.333333333333336" height="50">
                                                                        </rect>
                                                                        <rect fill="#4466f2" x="51.666666666666664"
                                                                            y="16.66666666666667"
                                                                            width="13.333333333333336"
                                                                            height="33.33333333333333"></rect>
                                                                        <rect fill="#1ea6ec" x="68.33333333333333"
                                                                            y="22.22222222222222"
                                                                            width="13.333333333333343"
                                                                            height="27.77777777777778"></rect>
                                                                        <rect fill="#22af47" x="85" y="0"
                                                                            width="13.333333333333329" height="50">
                                                                        </rect>
                                                                        <rect fill="#4466f2" x="101.66666666666667"
                                                                            y="11.111111111111107"
                                                                            width="13.333333333333329"
                                                                            height="38.88888888888889"></rect>
                                                                        <rect fill="#1ea6ec" x="118.33333333333333"
                                                                            y="33.333333333333336"
                                                                            width="13.333333333333329"
                                                                            height="16.666666666666664"></rect>
                                                                        <rect fill="#22af47" x="135"
                                                                            y="22.22222222222222"
                                                                            width="13.333333333333343"
                                                                            height="27.77777777777778">
                                                                        </rect>
                                                                        <rect fill="#4466f2" x="151.66666666666666"
                                                                            y="38.888888888888886"
                                                                            width="13.333333333333343"
                                                                            height="11.111111111111114"></rect>
                                                                        <rect fill="#1ea6ec" x="168.33333333333334"
                                                                            y="22.22222222222222"
                                                                            width="13.333333333333314"
                                                                            height="27.77777777777778"></rect>
                                                                        <rect fill="#22af47" x="185"
                                                                            y="33.333333333333336"
                                                                            width="13.333333333333343"
                                                                            height="16.666666666666664">
                                                                        </rect>
                                                                        <rect fill="#4466f2" x="201.66666666666666"
                                                                            y="0" width="13.333333333333343"
                                                                            height="50"></rect>
                                                                        <rect fill="#1ea6ec" x="218.33333333333334"
                                                                            y="16.66666666666667"
                                                                            width="13.333333333333314"
                                                                            height="33.33333333333333"></rect>
                                                                        <rect fill="#22af47" x="235"
                                                                            y="22.22222222222222"
                                                                            width="13.333333333333343"
                                                                            height="27.77777777777778">
                                                                        </rect>
                                                                        <rect fill="#4466f2" x="251.66666666666666"
                                                                            y="0" width="13.333333333333343"
                                                                            height="50"></rect>
                                                                        <rect fill="#1ea6ec" x="268.33333333333337"
                                                                            y="11.111111111111107"
                                                                            width="13.333333333333314"
                                                                            height="38.88888888888889"></rect>
                                                                        <rect fill="#22af47" x="285"
                                                                            y="33.333333333333336"
                                                                            width="13.333333333333314"
                                                                            height="16.666666666666664">
                                                                        </rect>
                                                                        <rect fill="#4466f2" x="301.6666666666667"
                                                                            y="22.22222222222222"
                                                                            width="13.333333333333314"
                                                                            height="27.77777777777778"></rect>
                                                                        <rect fill="#1ea6ec" x="318.3333333333333"
                                                                            y="38.888888888888886"
                                                                            width="13.333333333333371"
                                                                            height="11.111111111111114"></rect>
                                                                        <rect fill="#22af47" x="335"
                                                                            y="22.22222222222222"
                                                                            width="13.333333333333314"
                                                                            height="27.77777777777778">
                                                                        </rect>
                                                                        <rect fill="#4466f2" x="351.6666666666667"
                                                                            y="33.333333333333336"
                                                                            width="13.333333333333314"
                                                                            height="16.666666666666664"></rect>
                                                                        <rect fill="#1ea6ec" x="368.3333333333333" y="0"
                                                                            width="13.333333333333371" height="50">
                                                                        </rect>
                                                                        <rect fill="#22af47" x="385"
                                                                            y="16.66666666666667"
                                                                            width="13.333333333333314"
                                                                            height="33.33333333333333">
                                                                        </rect>
                                                                        <rect fill="#4466f2" x="401.6666666666667"
                                                                            y="22.22222222222222"
                                                                            width="13.333333333333314"
                                                                            height="27.77777777777778"></rect>
                                                                        <rect fill="#1ea6ec" x="418.3333333333333" y="0"
                                                                            width="13.333333333333371" height="50">
                                                                        </rect>
                                                                        <rect fill="#22af47" x="435"
                                                                            y="11.111111111111107"
                                                                            width="13.333333333333314"
                                                                            height="38.88888888888889">
                                                                        </rect>
                                                                        <rect fill="#4466f2" x="451.6666666666667"
                                                                            y="33.333333333333336"
                                                                            width="13.333333333333314"
                                                                            height="16.666666666666664"></rect>
                                                                        <rect fill="#1ea6ec" x="468.3333333333333"
                                                                            y="22.22222222222222"
                                                                            width="13.333333333333371"
                                                                            height="27.77777777777778"></rect>
                                                                        <rect fill="#22af47" x="485"
                                                                            y="38.888888888888886"
                                                                            width="13.333333333333314"
                                                                            height="11.111111111111114">
                                                                        </rect>
                                                                    </svg></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body spent">
                                                    <div class="spent-graph">
                                                        <div class="d-flex">
                                                            <div class="project-budget">
                                                                <h6>Total spent</h6>
                                                                <h2 class="mb-0"><span><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-dollar-sign">
                                                                            <line x1="12" y1="1" x2="12" y2="23"></line>
                                                                            <path
                                                                                d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6">
                                                                            </path>
                                                                        </svg>15,7452</span></h2>
                                                            </div>
                                                            <div class="projects-main mb-0">
                                                                <div class="xm-mb-peity"><span class="bar-colours-2"
                                                                        style="display: none;">5,7,3,5,2,3,9,6,5,9,5,3,5,2,5,3,3,9,6,5,9,7,9,6,5,9,7,3,5,2</span><svg
                                                                        class="peity" height="50" width="500">
                                                                        <rect fill="#4466f2" x="1.6666666666666667"
                                                                            y="22.22222222222222"
                                                                            width="13.333333333333334"
                                                                            height="27.77777777777778"></rect>
                                                                        <rect fill="#1ea6ec" x="18.333333333333332"
                                                                            y="11.111111111111107"
                                                                            width="13.333333333333336"
                                                                            height="38.88888888888889"></rect>
                                                                        <rect fill="#22af47" x="35"
                                                                            y="33.333333333333336"
                                                                            width="13.333333333333336"
                                                                            height="16.666666666666664">
                                                                        </rect>
                                                                        <rect fill="#4466f2" x="51.666666666666664"
                                                                            y="22.22222222222222"
                                                                            width="13.333333333333336"
                                                                            height="27.77777777777778"></rect>
                                                                        <rect fill="#1ea6ec" x="68.33333333333333"
                                                                            y="38.888888888888886"
                                                                            width="13.333333333333343"
                                                                            height="11.111111111111114"></rect>
                                                                        <rect fill="#22af47" x="85"
                                                                            y="33.333333333333336"
                                                                            width="13.333333333333329"
                                                                            height="16.666666666666664">
                                                                        </rect>
                                                                        <rect fill="#4466f2" x="101.66666666666667"
                                                                            y="0" width="13.333333333333329"
                                                                            height="50"></rect>
                                                                        <rect fill="#1ea6ec" x="118.33333333333333"
                                                                            y="16.66666666666667"
                                                                            width="13.333333333333329"
                                                                            height="33.33333333333333"></rect>
                                                                        <rect fill="#22af47" x="135"
                                                                            y="22.22222222222222"
                                                                            width="13.333333333333343"
                                                                            height="27.77777777777778">
                                                                        </rect>
                                                                        <rect fill="#4466f2" x="151.66666666666666"
                                                                            y="0" width="13.333333333333343"
                                                                            height="50"></rect>
                                                                        <rect fill="#1ea6ec" x="168.33333333333334"
                                                                            y="22.22222222222222"
                                                                            width="13.333333333333314"
                                                                            height="27.77777777777778"></rect>
                                                                        <rect fill="#22af47" x="185"
                                                                            y="33.333333333333336"
                                                                            width="13.333333333333343"
                                                                            height="16.666666666666664">
                                                                        </rect>
                                                                        <rect fill="#4466f2" x="201.66666666666666"
                                                                            y="22.22222222222222"
                                                                            width="13.333333333333343"
                                                                            height="27.77777777777778"></rect>
                                                                        <rect fill="#1ea6ec" x="218.33333333333334"
                                                                            y="38.888888888888886"
                                                                            width="13.333333333333314"
                                                                            height="11.111111111111114"></rect>
                                                                        <rect fill="#22af47" x="235"
                                                                            y="22.22222222222222"
                                                                            width="13.333333333333343"
                                                                            height="27.77777777777778">
                                                                        </rect>
                                                                        <rect fill="#4466f2" x="251.66666666666666"
                                                                            y="33.333333333333336"
                                                                            width="13.333333333333343"
                                                                            height="16.666666666666664"></rect>
                                                                        <rect fill="#1ea6ec" x="268.33333333333337"
                                                                            y="33.333333333333336"
                                                                            width="13.333333333333314"
                                                                            height="16.666666666666664"></rect>
                                                                        <rect fill="#22af47" x="285" y="0"
                                                                            width="13.333333333333314" height="50">
                                                                        </rect>
                                                                        <rect fill="#4466f2" x="301.6666666666667"
                                                                            y="16.66666666666667"
                                                                            width="13.333333333333314"
                                                                            height="33.33333333333333"></rect>
                                                                        <rect fill="#1ea6ec" x="318.3333333333333"
                                                                            y="22.22222222222222"
                                                                            width="13.333333333333371"
                                                                            height="27.77777777777778"></rect>
                                                                        <rect fill="#22af47" x="335" y="0"
                                                                            width="13.333333333333314" height="50">
                                                                        </rect>
                                                                        <rect fill="#4466f2" x="351.6666666666667"
                                                                            y="11.111111111111107"
                                                                            width="13.333333333333314"
                                                                            height="38.88888888888889"></rect>
                                                                        <rect fill="#1ea6ec" x="368.3333333333333" y="0"
                                                                            width="13.333333333333371" height="50">
                                                                        </rect>
                                                                        <rect fill="#22af47" x="385"
                                                                            y="16.66666666666667"
                                                                            width="13.333333333333314"
                                                                            height="33.33333333333333">
                                                                        </rect>
                                                                        <rect fill="#4466f2" x="401.6666666666667"
                                                                            y="22.22222222222222"
                                                                            width="13.333333333333314"
                                                                            height="27.77777777777778"></rect>
                                                                        <rect fill="#1ea6ec" x="418.3333333333333" y="0"
                                                                            width="13.333333333333371" height="50">
                                                                        </rect>
                                                                        <rect fill="#22af47" x="435"
                                                                            y="11.111111111111107"
                                                                            width="13.333333333333314"
                                                                            height="38.88888888888889">
                                                                        </rect>
                                                                        <rect fill="#4466f2" x="451.6666666666667"
                                                                            y="33.333333333333336"
                                                                            width="13.333333333333314"
                                                                            height="16.666666666666664"></rect>
                                                                        <rect fill="#1ea6ec" x="468.3333333333333"
                                                                            y="22.22222222222222"
                                                                            width="13.333333333333371"
                                                                            height="27.77777777777778"></rect>
                                                                        <rect fill="#22af47" x="485"
                                                                            y="38.888888888888886"
                                                                            width="13.333333333333314"
                                                                            height="11.111111111111114">
                                                                        </rect>
                                                                    </svg></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body spent">
                                                    <div class="spent-graph">
                                                        <div class="d-flex">
                                                            <div class="project-budget">
                                                                <h6>Remaining</h6>
                                                                <h2 class="mb-0"><span><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-dollar-sign">
                                                                            <line x1="12" y1="1" x2="12" y2="23"></line>
                                                                            <path
                                                                                d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6">
                                                                            </path>
                                                                        </svg>18,5438</span></h2>
                                                            </div>
                                                            <div class="projects-main mb-0">
                                                                <div class="xm-mb-peity"><span class="bar-colours-3"
                                                                        style="display: none;">9,7,3,5,2,5,3,5,3,9,6,5,9,3,5,2,5,3,6,5,9,7,9,2,5,3,7,9,5,6</span><svg
                                                                        class="peity" height="50" width="500">
                                                                        <rect fill="#4466f2" x="1.6666666666666667"
                                                                            y="0" width="13.333333333333334"
                                                                            height="50"></rect>
                                                                        <rect fill="#1ea6ec" x="18.333333333333332"
                                                                            y="11.111111111111107"
                                                                            width="13.333333333333336"
                                                                            height="38.88888888888889"></rect>
                                                                        <rect fill="#22af47" x="35"
                                                                            y="33.333333333333336"
                                                                            width="13.333333333333336"
                                                                            height="16.666666666666664">
                                                                        </rect>
                                                                        <rect fill="#4466f2" x="51.666666666666664"
                                                                            y="22.22222222222222"
                                                                            width="13.333333333333336"
                                                                            height="27.77777777777778"></rect>
                                                                        <rect fill="#1ea6ec" x="68.33333333333333"
                                                                            y="38.888888888888886"
                                                                            width="13.333333333333343"
                                                                            height="11.111111111111114"></rect>
                                                                        <rect fill="#22af47" x="85"
                                                                            y="22.22222222222222"
                                                                            width="13.333333333333329"
                                                                            height="27.77777777777778">
                                                                        </rect>
                                                                        <rect fill="#4466f2" x="101.66666666666667"
                                                                            y="33.333333333333336"
                                                                            width="13.333333333333329"
                                                                            height="16.666666666666664"></rect>
                                                                        <rect fill="#1ea6ec" x="118.33333333333333"
                                                                            y="22.22222222222222"
                                                                            width="13.333333333333329"
                                                                            height="27.77777777777778"></rect>
                                                                        <rect fill="#22af47" x="135"
                                                                            y="33.333333333333336"
                                                                            width="13.333333333333343"
                                                                            height="16.666666666666664">
                                                                        </rect>
                                                                        <rect fill="#4466f2" x="151.66666666666666"
                                                                            y="0" width="13.333333333333343"
                                                                            height="50"></rect>
                                                                        <rect fill="#1ea6ec" x="168.33333333333334"
                                                                            y="16.66666666666667"
                                                                            width="13.333333333333314"
                                                                            height="33.33333333333333"></rect>
                                                                        <rect fill="#22af47" x="185"
                                                                            y="22.22222222222222"
                                                                            width="13.333333333333343"
                                                                            height="27.77777777777778">
                                                                        </rect>
                                                                        <rect fill="#4466f2" x="201.66666666666666"
                                                                            y="0" width="13.333333333333343"
                                                                            height="50"></rect>
                                                                        <rect fill="#1ea6ec" x="218.33333333333334"
                                                                            y="33.333333333333336"
                                                                            width="13.333333333333314"
                                                                            height="16.666666666666664"></rect>
                                                                        <rect fill="#22af47" x="235"
                                                                            y="22.22222222222222"
                                                                            width="13.333333333333343"
                                                                            height="27.77777777777778">
                                                                        </rect>
                                                                        <rect fill="#4466f2" x="251.66666666666666"
                                                                            y="38.888888888888886"
                                                                            width="13.333333333333343"
                                                                            height="11.111111111111114"></rect>
                                                                        <rect fill="#1ea6ec" x="268.33333333333337"
                                                                            y="22.22222222222222"
                                                                            width="13.333333333333314"
                                                                            height="27.77777777777778"></rect>
                                                                        <rect fill="#22af47" x="285"
                                                                            y="33.333333333333336"
                                                                            width="13.333333333333314"
                                                                            height="16.666666666666664">
                                                                        </rect>
                                                                        <rect fill="#4466f2" x="301.6666666666667"
                                                                            y="16.66666666666667"
                                                                            width="13.333333333333314"
                                                                            height="33.33333333333333"></rect>
                                                                        <rect fill="#1ea6ec" x="318.3333333333333"
                                                                            y="22.22222222222222"
                                                                            width="13.333333333333371"
                                                                            height="27.77777777777778"></rect>
                                                                        <rect fill="#22af47" x="335" y="0"
                                                                            width="13.333333333333314" height="50">
                                                                        </rect>
                                                                        <rect fill="#4466f2" x="351.6666666666667"
                                                                            y="11.111111111111107"
                                                                            width="13.333333333333314"
                                                                            height="38.88888888888889"></rect>
                                                                        <rect fill="#1ea6ec" x="368.3333333333333" y="0"
                                                                            width="13.333333333333371" height="50">
                                                                        </rect>
                                                                        <rect fill="#22af47" x="385"
                                                                            y="38.888888888888886"
                                                                            width="13.333333333333314"
                                                                            height="11.111111111111114">
                                                                        </rect>
                                                                        <rect fill="#4466f2" x="401.6666666666667"
                                                                            y="22.22222222222222"
                                                                            width="13.333333333333314"
                                                                            height="27.77777777777778"></rect>
                                                                        <rect fill="#1ea6ec" x="418.3333333333333"
                                                                            y="33.333333333333336"
                                                                            width="13.333333333333371"
                                                                            height="16.666666666666664"></rect>
                                                                        <rect fill="#22af47" x="435"
                                                                            y="11.111111111111107"
                                                                            width="13.333333333333314"
                                                                            height="38.88888888888889">
                                                                        </rect>
                                                                        <rect fill="#4466f2" x="451.6666666666667" y="0"
                                                                            width="13.333333333333314" height="50">
                                                                        </rect>
                                                                        <rect fill="#1ea6ec" x="468.3333333333333"
                                                                            y="22.22222222222222"
                                                                            width="13.333333333333371"
                                                                            height="27.77777777777778"></rect>
                                                                        <rect fill="#22af47" x="485"
                                                                            y="16.66666666666667"
                                                                            width="13.333333333333314"
                                                                            height="33.33333333333333">
                                                                        </rect>
                                                                    </svg></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer spent">
                                                    <div class="spent-graph">
                                                        <div class="d-flex">
                                                            <div class="project-budget m-0">
                                                                <h6>Total Budget</h6>
                                                                <h2 class="mb-0"><span><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-dollar-sign">
                                                                            <line x1="12" y1="1" x2="12" y2="23"></line>
                                                                            <path
                                                                                d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6">
                                                                            </path>
                                                                        </svg>34,5812</span></h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content" id="tab-3">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Team Members</h5>
                                                    <div class="card-header-right">
                                                        <ul class="list-unstyled card-option">
                                                            <li><i class="icofont icofont-simple-left"></i></li>
                                                            <li><i class="view-html fa fa-code"></i></li>
                                                            <li><i class="icofont icofont-maximize full-card"></i></li>
                                                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                                                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                                                            <li><i class="icofont icofont-error close-card"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="table-responsive sellers team-members">
                                                        <table class="table table-bordernone">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Name</th>
                                                                    <th scope="col">Position</th>
                                                                    <th scope="col">Office</th>
                                                                    <th scope="col">E-Mail</th>
                                                                    <th scope="col">Phone</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-inline-block align-middle"><img
                                                                                class="img-radius img-50 align-top m-r-15 rounded-circle"
                                                                                src="assets/images/user/6.jpg" alt="">
                                                                            <div class="d-inline-block">
                                                                                <p>Jerry Patterson</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <p>Design Manager</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>Integer</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>jerry13@gmail.com</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>+91 264 570 4611</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-inline-block align-middle"><img
                                                                                class="img-radius img-50 align-top m-r-15 rounded-circle"
                                                                                src="assets/images/user/2.png" alt="">
                                                                            <div class="d-inline-block">
                                                                                <p>Rosa Matthews</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <p>Director of Sales</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>Ipsum</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>ros456@gmail.com</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>+01 967 487 1873</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-inline-block align-middle"><img
                                                                                class="img-radius img-50 align-top m-r-15 rounded-circle"
                                                                                src="assets/images/user/3.jpg" alt="">
                                                                            <div class="d-inline-block">
                                                                                <p>Alvaro Aguirre</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <p>Office Assistant</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>Praesent</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>alvar76@gmail.com</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>+48 724 585 0012</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-inline-block align-middle"><img
                                                                                class="img-radius img-50 align-top m-r-15 rounded-circle"
                                                                                src="assets/images/user/15.png" alt="">
                                                                            <div class="d-inline-block">
                                                                                <p>Jerry Patterson</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <p>Programmer Analyst</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>Ipsum</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>jerry13@gmail.com</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>+91 264 570 4611</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-inline-block align-middle"><img
                                                                                class="img-radius img-50 align-top m-r-15 rounded-circle"
                                                                                src="assets/images/user/4.jpg" alt="">
                                                                            <div class="d-inline-block">
                                                                                <p>Anne Snyder</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <p>Social Worker</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>Donec</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>annsny@gmail.com</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>+61 480 087 1175</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-inline-block align-middle"><img
                                                                                class="img-radius img-50 align-top m-r-15 rounded-circle"
                                                                                src="assets/images/user/5.jpg" alt="">
                                                                            <div class="d-inline-block">
                                                                                <p>Alana Slacker</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <p>Systems Engineer</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>Etiam</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>alana82@gmail.com</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>+75 483 761 4680</p>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="code-box-copy">
                                                        <button class="code-box-copy__btn btn-clipboard"
                                                            data-clipboard-target="#example-head2" title=""
                                                            data-bs-original-title="Copy" aria-label="Copy"><i
                                                                class="icofont icofont-copy-alt"></i></button>
                                                        <pre class=" language-html"><code class=" language-html" id="example-head2"><span class="token comment" spellcheck="true">&lt;!-- Cod Box Copy begin --&gt;</span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>table-responsive sellers team-members<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>table</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>table table-bordernone<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>thead</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>tr</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>th</span> <span class="token attr-name">scope</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>col<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Name<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>th</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>th</span> <span class="token attr-name">scope</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>col<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Position<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>th</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>th</span> <span class="token attr-name">scope</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>col<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Office<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>th</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>th</span> <span class="token attr-name">scope</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>col<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>E-Mail<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>th</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>th</span> <span class="token attr-name">scope</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>col<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Phone<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>th</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>tr</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>thead</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>tbody</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>tr</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>d-inline-block align-middle<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>img</span> <span class="token attr-name">src</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>assets/images/user/6.jpg<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>img-radius img-50 align-top m-r-15 rounded-circle<span class="token punctuation">"</span></span> <span class="token attr-name">alt</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span><span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>d-inline-block<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
              <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>p</span><span class="token punctuation">&gt;</span></span>Jerry Patterson<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>p</span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>p</span><span class="token punctuation">&gt;</span></span>Design Manager<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>p</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>p</span><span class="token punctuation">&gt;</span></span>Integer<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>p</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>p</span><span class="token punctuation">&gt;</span></span>jerry13@gmail.com<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>p</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>p</span><span class="token punctuation">&gt;</span></span>+91 264 570 4611<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>p</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>tr</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>tr</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>d-inline-block align-middle<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>img</span> <span class="token attr-name">src</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>assets/images/user/2.png<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>img-radius img-50 align-top m-r-15 rounded-circle<span class="token punctuation">"</span></span> <span class="token attr-name">alt</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span><span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>d-inline-block<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
              <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>p</span><span class="token punctuation">&gt;</span></span>Rosa Matthews<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>p</span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>p</span><span class="token punctuation">&gt;</span></span>Director of Sales<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>p</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>p</span><span class="token punctuation">&gt;</span></span>Ipsum<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>p</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>p</span><span class="token punctuation">&gt;</span></span>ros456@gmail.com<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>p</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>p</span><span class="token punctuation">&gt;</span></span>+01 967 487 1873<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>p</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>tr</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>tr</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>d-inline-block align-middle<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>img</span> <span class="token attr-name">src</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>assets/images/user/3.jpg<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>img-radius img-50 align-top m-r-15 rounded-circle<span class="token punctuation">"</span></span> <span class="token attr-name">alt</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span><span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>d-inline-block<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
              <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>p</span><span class="token punctuation">&gt;</span></span>Alvaro Aguirre<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>p</span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>p</span><span class="token punctuation">&gt;</span></span>Office Assistant<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>p</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>p</span><span class="token punctuation">&gt;</span></span>Praesent<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>p</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>p</span><span class="token punctuation">&gt;</span></span>alvar76@gmail.com<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>p</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>p</span><span class="token punctuation">&gt;</span></span>+48 724 585 0012<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>p</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>tr</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>tr</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>d-inline-block align-middle<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>img</span> <span class="token attr-name">src</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>assets/images/user/15.png<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>img-radius img-50 align-top m-r-15 rounded-circle<span class="token punctuation">"</span></span> <span class="token attr-name">alt</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span><span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>d-inline-block<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
              <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>p</span><span class="token punctuation">&gt;</span></span>Jerry Patterson<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>p</span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>p</span><span class="token punctuation">&gt;</span></span>Programmer Analyst<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>p</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>p</span><span class="token punctuation">&gt;</span></span>Ipsum<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>p</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>p</span><span class="token punctuation">&gt;</span></span>jerry13@gmail.com<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>p</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>p</span><span class="token punctuation">&gt;</span></span>+91 264 570 4611<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>p</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>tr</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>tr</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>d-inline-block align-middle<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>img</span> <span class="token attr-name">src</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>assets/images/user/4.jpg<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>img-radius img-50 align-top m-r-15 rounded-circle<span class="token punctuation">"</span></span> <span class="token attr-name">alt</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span><span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>d-inline-block<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
              <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>p</span><span class="token punctuation">&gt;</span></span>Anne Snyder<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>p</span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>p</span><span class="token punctuation">&gt;</span></span>Social Worker<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>p</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>p</span><span class="token punctuation">&gt;</span></span>Donec<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>p</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>p</span><span class="token punctuation">&gt;</span></span>annsny@gmail.com<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>p</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>p</span><span class="token punctuation">&gt;</span></span>+61 480 087 1175<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>p</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>tr</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>tr</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>d-inline-block align-middle<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>img</span> <span class="token attr-name">src</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>assets/images/user/5.jpg<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>img-radius img-50 align-top m-r-15 rounded-circle<span class="token punctuation">"</span></span> <span class="token attr-name">alt</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span><span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>d-inline-block<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
              <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>p</span><span class="token punctuation">&gt;</span></span>Alana Slacker<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>p</span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>p</span><span class="token punctuation">&gt;</span></span>Systems Engineer<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>p</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>p</span><span class="token punctuation">&gt;</span></span>Etiam<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>p</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>p</span><span class="token punctuation">&gt;</span></span>alana82@gmail.com<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>p</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>p</span><span class="token punctuation">&gt;</span></span>+75 483 761 4680<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>p</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>tr</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>tbody</span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>table</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
<span class="token comment" spellcheck="true">&lt;!-- Cod Box Copy end --&gt;</span></code></pre>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 footer-copyright">
                            <p class="mb-0">Copyright 2018 © Endless All rights reserved.</p>
                        </div>
                        <div class="col-md-6">
                            <p class="pull-right mb-0">Hand crafted & made with<i class="fa fa-heart"></i></p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- latest jquery-->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="assets/js/feather.min.js"></script>
    <script src="assets/js/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="assets/js/sidebar-menu.js"></script>
    <script src="assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="assets/js/chartist.js"></script>
    <script src="assets/js/knob.min.js"></script>
    <script src="assets/js/knob-chart.js"></script>
    <script src="assets/js/prism.min.js"></script>
    <script src="assets/jsclipboard.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/counter-custom.js"></script>
    <script src="assets/js/custom-card.js"></script>
    <script src="assets/js/bootstrap-notify.min.js"></script>
    <script src="assets/js/default.js"></script>
    <script src="assets/js/index.js"></script>
    <script src="assets/js/handlebars.js"></script>
    <script src="assets/js/typeahead.bundle.js"></script>
    <script src="assets/js/typeahead.custom.js"></script>
    <script src="assets/js/chat-menu.js"></script>
    <script src="assets/js/height-equal.js"></script>
    <script src="assets/js/tooltip-init.js"></script>
    <script src="assets/js/handlebars.js"></script>
    <script src="assets/js/typeahead-custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/customizer.js"></script>
    <!-- Plugin used-->
</body>

</html>