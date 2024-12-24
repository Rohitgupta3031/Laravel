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
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
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
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/fontawesome.css')}}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/icofont.css')}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/themify.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/feather-icon.css')}}">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">
    <link id="bootstrap-file" rel="stylesheet" type="text/css" href="#">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{asset('assets/css/color-1.css')}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
</head>

<body>
    <!-- Loader starts-->

    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper">
        <div class="container-fluid">
            <!-- sign up page start-->
            <div class="auth-bg-video">
                <video id="bgvid" poster="assets/images/other-images/coming-soon-bg.jpg" playsinline="" autoplay=""
                    muted="" loop="">
                    <source src="assets/video/auth-bg.mp4" type="video/mp4">
                </video>
                <div class="authentication-box">
                    <div class="text-center"><img src="assets/images/endless-logo.png" alt=""></div>
                    <div class="card mt-4 p-4">
                        <h4 class="text-center">NEW USER</h4>
                        <h6 class="text-center">Enter your Username and Password For Signup</h6>
                        <form class="theme-form" action="{{url('reg')}}" method="post">
                            @if(Session::has('success'))
                            <div class="alert alert-success">
                            <p>Register Successfully</p>
                            </div>
                            @endif
                            @if(Session::has('fail'))
                            <div class="alert alert-danger">
                                <p>Register Fail or Something went wrong</p>
                            </div>
                            @endif
                        @csrf    
                        
                        <div class="row g-2">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="col-form-label">First Name</label>
                                        <input class="form-control" type="text" name="first_name" value="{{old('first_name')}}"  placeholder="John">
                                    <span class="text-danger">@error('first_name'){{$message}}@enderror</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="col-form-label">Last Name</label>
                                        <input class="form-control" type="text" name="last_name" value="{{old('last_name')}}" placeholder="Deo">
                                    <span class="text-danger">@error ('last_name'){{$message}}@enderror</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Email</label>
                                <input class="form-control" type="email" name="email" value="{{old('email')}}" placeholder="John Deo">
                                <span class="text-danger">@error ('email'){{$message}}@enderror</span>
                                
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Password</label>
                                <input class="form-control" type="password" name="pass" value="{{old('pass')}}" placeholder="****">
                                <span class="text-danger">@error ('pass'){{$message}}@enderror</span>
                                
                            </div>
                            
                            <div class="row g-2">
                                <div class="col-sm-4">
                                    <button class="btn btn-primary" type="submit">Sign Up</button>
                                </div>
                                <div class="col-sm-8">
                                    <div class="text-start mt-2 m-l-20">Are you already user?&nbsp;&nbsp;<a
                                            class="btn-link text-capitalize" href="login.html">Login</a></div>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
            <!-- sign up page ends-->
        </div>
    </div>
    <!-- page-wrapper Ends-->
    <!-- latest jquery-->
    <script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap js-->
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <!-- feather icon js-->
    <script src="{{asset('assets/js/feather.min.js')}}"></script>
    <script src="{{asset('assets/js/feather-icon.js')}}"></script>
    <!-- Sidebar jquery-->
    <script src="{{asset('assets/js/sidebar-menu.js')}}"></script>
    <script src="{{asset('assets/js/config.js')}}"></script>
    <!-- Plugins JS start-->
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{asset('assets/js/script.js')}}"></script>

</body>

</html>