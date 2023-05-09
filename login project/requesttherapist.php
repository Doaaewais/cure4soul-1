<?php include("connection.php"); 
if(!isset($_session)){
  session_start();
}
if(isset($_post['submit'])){
  $fname=mysqli_real_escape_string($conn,$_post['fname']);
  $mname= mysqli_real_escape_string($conn,$_post['mname']);
  $lname=mysqli_real_escape_string($conn,$_post['lname']);
  $dayy=mysqli_real_escape_string($conn,$_post['day']);
  $monthh=mysqli_real_escape_string($conn,$_post['month']);
  $yearr=mysqli_real_escape_string($conn,$_post['year']);
  $addresss=mysqli_real_escape_string($conn,$_post['address']);
  $email=mysqli_real_escape_string($conn,$_post['email']);
  $spec=mysqli_real_escape_string($conn,$_post['spec']);
  $phone=mysqli_real_escape_string($conn,$_post['phone']);
  $nid=mysqli_real_escape_string($conn,$_post['nid']);
  $cv=mysqli_real_escape_string($conn,$_post['cv']);

  $sql="INSERT INTO reqther(fname,mname,lname,dayy,monthh,yearr,addresss,email,spec,phone,nid,cv) Values('$fname','$mname','$lname','$dayy','$monthh','$yearr','$addresss','$email','$spec','$phone','$nid','$cv')";
  mysqli_query($conn,$sql);
  
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
            <form class="row reqform" method='post'>
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
                    <input class="form-control" type="number" aria-label="default input example" name="day" required>
                </div>
                <div class="col-md-4">
                    <label>month</label>
                    <input class="form-control" type="number" aria-label="default input example" name="month" required>
                </div>
                <div class="col-md-4">
                    <label>year</label>
                    <input class="form-control" type="number" aria-label="default input example" name="year" required>
                </div>
                <h4 >personal information</h4>
                <div class="col-md-12">
                    <label>Current address</label>
                    <input class="form-control" type="text" aria-label="default input example" name="address" required>
                </div>
                <div class="col-md-4">
                    <label>email</label>
                    <input class="form-control" type="email" aria-label="default input example" name="email" required>
                </div>
                <div class="col-md-6">
                    <label>specialization</label>
                    <input class="form-control" type="text" aria-label="default input example" name="spec" required>
                </div>
                <div class="col-md-6">
                    <label>phone</label>
                    <input class="form-control" type="text" aria-label="default input example" name="phone" required>
                </div>
                <div class="col-md-6">
                    <label>national id</label>
                    <input class="form-control" type="text" aria-label="default input example" name="nid" required>
                </div>
                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">your CV</label>
                    <input class="form-control" type="file" id="formFileMultiple" name="cv" multiple required>
                  </div>

                  <button class="btn btn-primary " name="submit" type="submit">Button</button>
            </form>
        </div>
    </body>
</html>