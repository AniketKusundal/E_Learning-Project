<!DOCTYPE html><html lang="en"><head>
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">    
    <!-- Student Testimonial Owl Slider CSS -->
    <link rel="stylesheet" type="text/css" href="css/owl.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/testyslider.css">
    <!-- Custom Style CSS -->
    <link rel="stylesheet" type="text/css" href="./css/newfile.css" />
    <title>iSchool</title></head><body>
     <!-- Start Nagigation -->
     <nav class="navbar navbar-expand-lg bg-dark navbar-dark bg-body-tertiary custom-nav m-0 p-0 shift fixed-top">
    <div class="container-fluid navbar-color bg-dark">
    <img src="./image/logo1.png" alt="Logo" width="100" height="80" class="d-inline-block align-text-top">
        <a href="index.php" class="navbar-brand ml-4">SkillShare</a><br>
        <span class="navbar-text ">Learn Anytime And Anywhere</span>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
            <span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="myMenu">
            <ul class="navbar-nav ml-auto pr-5 custom-nav justify-content-end">
                <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link active m-2">Home</a></li>
                <li class="nav-item custom-nav-item"><a href="courses.php" class="nav-link active m-2">Courses</a></li>
                <li class="nav-item custom-nav-item"><a href="AboutUs.php" class="nav-link active m-2">About US</a></li>
                <li class="nav-item custom-nav-item"><a href="#Feedback" class="nav-link active m-2">Feedback</a></li>
                <li class="nav-item custom-nav-item"><a href="#Contact" class="nav-link active m-2">Contact Us</a></li>
                <li class="nav-item custom-nav-item"><a href="paymentstatus.php" class="nav-link active m-2">Payment Status</a></li>
                <?php 
                    session_start();   
                    if (isset($_SESSION['is_login'])){
                      echo '<li class="nav-item custom-nav-item"><a href="student/studentProfile.php" class="nav-link active m-2">My Profile</a></li> <li class="nav-item custom-nav-item"><a href="logout.php" class="nav-link active m-2">Logout</a></li>';}
                       else {
                      echo '<li class="nav-item custom-nav-item"><a href="#login" class="nav-link active m-2" data-toggle="modal" data-target="#stuLoginModalCenter">Login</a></li> <li class="nav-item custom-nav-item"><a href="#signup" class="nav-link active m-2" data-toggle="modal" data-target="#stuRegModalCenter">Signup</a></li>';}?></ul></div></div></nav>
 <!-- End Navigation -->