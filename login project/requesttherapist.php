<?php include('connection.php');?>
<?PHP 
if(! isset($_session)){
  session_start();
}
if(isset($_POST['sub'])){
                 $fnam=mysqli_real_escape_string($conn,$_POST['fname']);
                 $mnam= mysqli_real_escape_string($conn,$_POST['mname']);
                 $lnam=mysqli_real_escape_string($conn,$_POST['lname']);
                 $dayy=mysqli_real_escape_string($conn,$_POST['dayy']);
                 $monthh=mysqli_real_escape_string($conn,$_POST['monthh']);
                 $yearr=mysqli_real_escape_string($conn,$_POST['yearr']);
                 $addresss=mysqli_real_escape_string($conn,$_POST['addresss']);
                 $emai=mysqli_real_escape_string($conn,$_POST['email']);
                 $passwordd=mysqli_real_escape_string($conn,$_POST['pass']);
                 $conpassword=mysqli_real_escape_string($conn,$_POST['conpass']);
                 $spe=mysqli_real_escape_string($conn,$_POST['spec']);
                 $phon=mysqli_real_escape_string($conn,$_POST['phonee']);
                 $ni=mysqli_real_escape_string($conn,$_POST['nid']);
                 $cvv=mysqli_real_escape_string($conn,$_POST['cv']);
                    if($passwordd != $conpassword){
                           echo "password doesnot match"; }
                    else{
                          $sq="INSERT INTO reqther(fname,mname,lname,dayy,monthh,yearr,addresss,email,passwordd,spec,phone,nid,cv) Values('$fnam','$mnam','$lnam','$dayy','$monthh','$yearr','$addresss','$emai','$passwordd','$spe','$phon','$ni','$cvv')";
                          mysqli_query($conn,$sq); 
                     }
                } 

?>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/all.min.css">
      
        <link rel="stylesheet" href="css/style.css">
        <script src="js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div class="req container">
            <h3>Therapist's application</h3>
            <form method='post' class="row reqform">
                <h4 >Full Name</h4>
                <div class="col-md-4">
                    <label> firstname</label>
                    <input class="form-control" type="text" aria-label="default input example" name="fname" required>
                </div>
                <div class="col-md-4">
                    <label> middlename</label>
                    <input class="form-control" type="text" aria-label="default input example" name="mname" required>
                </div>
                <div class="col-md-4">
                    <label> lastname</label>
                    <input class="form-control" type="text" aria-label="default input example" name="lname" required>
                </div>
                <h4>Birth Date</h4>
                <div class="col-md-4">
                    <label>day</label>
                    <input class="form-control" type="number" aria-label="default input example" name="dayy" required>
                </div>
                <div class="col-md-4">
                    <label>month</label>
                    <input class="form-control" type="number" aria-label="default input example" name="monthh" required>
                </div>
                <div class="col-md-4">
                    <label>year</label>
                    <input class="form-control" type="number" aria-label="default input example" name="yearr" required>
                </div>
                <h4 >personal information</h4>
                <div class="col-md-12">
                    <label>Current address</label>
                    <input class="form-control" type="text" aria-label="default input example" name="addresss" required>
                </div>
                <div class="col-md-4">
                    <label>email</label>
                    <input class="form-control" type="email" aria-label="default input example" name="email" required>
                    </div>
                <div class="col-md-6">
                    <label>password</label>
                    <input class="form-control" type="password" aria-label="default input example" name="pass" required>
                </div>
                </div>
                <div class="col-md-6">
                    <label>confirm password</label>
                    <input class="form-control" type="password" aria-label="default input example" name="conpass" required>
                </div>
                </div>
                <div class="col-md-6">
                    <label>specialization</label>
                    <input class="form-control" type="text" aria-label="default input example" name="spec" required>
                </div>
                <div class="col-md-6">
                    <label>phone</label>
                    <input class="form-control" type="text" aria-label="default input example" name="phonee" required>
                </div>
                <div class="col-md-6">
                    <label>national id</label>
                    <input class="form-control" type="text" aria-label="default input example" name="nid" required>
                </div>
                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">your CV</label>
                    <input class="form-control" type="file" id="formFileMultiple" name="cv" >
                  </div>

                  <button class="btn btn-primary " name="sub" type="submit">submit</button>
            </form>
        </div>
    </body>
</html>