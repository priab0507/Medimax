<?php
include('dbconnection.php');
if(isset($_REQUEST['rSignin'])){
    if(($_REQUEST['rName']=="")||($_REQUEST['rEmail']=="")||($_REQUEST['rPassword']==""))
    {
        $regmsg= '<div class ="alert alert-warning mt-2" role="alert">All fields are Required</div>';
    }
    else{
$sql= "SELECT r_email FROM requesterlogin_tb WHERE r_email='".$_REQUEST['rEmail']."'";
$result=$conn->query($sql);
if($result->num_rows==1){
    $regmsg='<div class="alert alert-warning mt-2" role="alert">Email ID already registered</div>';
}else{

$rName=$_REQUEST['rName'];
$rEmail=$_REQUEST['rEmail'];
$rPassword=$_REQUEST['rPassword'];
$sql="INSERT INTO requesterlogin_tb(r_name,r_email,r_password) VALUES('$rName','$rEmail','$rPassword')";
if($conn->query($sql)== TRUE){
    $regmsg= '<div class ="alert alert-success mt-2" role="alert">Account Successfully Created</div>';
}
else{
    $regmsg= '<div class ="alert alert-warning mt-2" role="alert">Unable to create account</div>';
}

    }
}
}

?>

<!--start Registration form-->
<div class="container pt-5" id="registration">
<h2 class="text-center">Create An Account</h2>
<div class="row mt-4 mb-4">
<div class="col-md-6 offset-md-3">
<form action=""class="shadow-lg p-4" method="POST">
<div class="form group">
<i class="fa fa-user"></i><label for="Name" class="font-weight-bold pl-2">Name</label>
<input type="text" class="form-control" placeholder="Name" name="rName">
</div>
<div class="form group">
<i class="fa fa-user"></i><label for="Email" class="font-weight-bold pl-2">Email</label>
<input type="Email" class="form-control" placeholder="Email" name="rEmail">
<div class="form group">
<i class="fa fa-key"></i><label for="Pass" class="font-weight-bold pl-2">Password</label>
<input type="Password" class="form-control" placeholder="Password" name="rPassword">
</div>
</div>
<button type="submit" class="btn btn-primary mt-5 btn-block shadow-sm font-weight-bold" name="rSignin">Sign in
</button>
<em style="font-size:10px;">Note:- By clicking sign in, you have to agree the terms, Data Policy and Cookie Policy</em>
<?php if(isset($regmsg)) {echo $regmsg;}?>
</form>
</div>
</div>
</div>
<!--end Registration form-->