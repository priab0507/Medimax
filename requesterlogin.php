<?php
include('dbconnection.php');
session_start();
if(!isset($_REQUEST['is_login'])){
if(isset($_REQUEST['rEmail'])){
$rEmail=mysqli_real_escape_string($conn,trim($_REQUEST['rEmail']));
$rPassword=mysqli_real_escape_string($conn,trim($_REQUEST['rPassword']));
$sql="SELECT r_email, r_password FROM requesterlogin_tb WHERE r_email='".$rEmail."' AND r_password='".$rPassword."' limit 1";
$result=$conn->query($sql);
if($result->num_rows==1){
    $_SESSION['is_login']= true;
    $_SESSION['rEmail']= $rEmail;
    echo "<script> location.href='requesterprofile.php';</script>";
    exit;
}else{
    $msg='<div class="alert alert-warning mt-2">Invalid Email or Password</div>';
}
}
}else{
    echo "<script> location.href='requesterprofile.php';</script>";
}
?>
<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--Bootstrap CSS-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!--Font awesome CSS-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Login</title>
</head>
<body>
<div class="mt-5 text-center" style="font-size:30px;">
<i class="fa fa-Stethoscope"></i>
<span>MEDIMAX</span>
</div>
<p class="text-center" style="font-size:20px;"><i class=
"fa fa-user-secret text-danger"></i>Requester Area(Demo)</p>
<div class="container-fluid">
<div class="row justify-content-center">
<div class="col-sm-6 col-md-4">
<form action="" class="shadow-lg p-4" method="POST">
<div class="form-group">
<i class="fa fa-user"></i><label for="email"
class="font-weight-bold pl-2">Email</label><input type="email" class="form-control" placeholder="Email" name="rEmail">
<small class="form-text">We'll  never share your email with anyone else.</small>
</div>
<div class="form-group">
<i class="fa fa-key"></i><label for="rPassword"
class="font-weight-bold pl-2">Password</label><input type="Password" class="form-control" placeholder="Password" name="rPassword">
</div>
<button type="submit" class="btn btn-outline-danger mt-3 font-weight-bold btn-block shadow-sm">Login</button>
<?php if(isset($msg)){echo $msg;}?>
</form>
<div class="text-center"><a href="index.php" class="btn btn-info mt-3 font-weight-bold shadow-sm">Back to Home</a></div>
</div>
</div>
</div>
<!--javascript files-->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
</body>
</html>