<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--bootstrap CSS-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!--Font awesome CSS-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!--Custom CSS-->
<link rel="stylesheet" href="custom.css">
<title>Profile</title>
</head>
<body>
<!--top navbar-->
<nav class="navbar navbar-dark fixed-top bg-primary flex-md-nowrap p-0 shadow"><a class="navbar-brand col-sm-3 col-md-2 mr-0"
 href= "requesterprofile.php">MEDIMAX</a></nav>

 <div class="container-fluid" style="margin-top:40px;"><!--start container-->
 <div class="row"><!--start row-->
 <nav class="col-sm-2 bg-light sidebar py-5">
<!--start side bar-->
 <div class="sidebar-sticky">
 <ul class="nav flex-column"><li class="nav-item"><a class="nav-link text-dark active<?php if(PAGE =='RequesterProfile'){echo'active';}?>" href= "requesterprofile.php"><i class="fa fa-user"></i>Profile</a></li>
 <li class="nav-item"><a class="nav-link text-dark<?php if(PAGE =='Submitrequest'){echo'active';}?>" href= "submitrequest.php"><i class="fa fa-circle"></i>Submit Request</a></li>
 <li class="nav-item"><a class="nav-link text-dark<?php if(PAGE =='CheckStatus'){echo'active';}?>" href= "#"><i class="fa fa-clone"></i>Service Status</a></li>
 <li class="nav-item"><a class="nav-link text-dark<?php if(PAGE =='reqChangePassword'){echo'active';}?>" href= "#"><i class="fa fa-key"></i>Change Password</a></li>
 <li class="nav-item"><a class="nav-link text-dark<?php if(PAGE =='Logout'){echo'active';}?>" href= "#">Logout</a></li>
 </ul>
 </div>
 </nav><!--End side Bar-->
 
