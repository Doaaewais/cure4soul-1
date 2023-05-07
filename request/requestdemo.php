<?php include('connection.php'); ?>
<?PHP 
if(!isset($_session)){
  session_start();
}
if(isset($_POST['submit'])){
    $fnn=mysqli_real_escape_string($conn,$_POST['fn']);
    $lnn=mysqli_real_escape_string($conn,$_POST['ln']);
    $wemaill= mysqli_real_escape_string($conn,$_POST['email']);
    $mobilee=mysqli_real_escape_string($conn,$_POST['mobile']);
    $counn=mysqli_real_escape_string($conn,$_POST['country']);
    $jobb=mysqli_real_escape_string($conn,$_POST['title']);
    $companyy=mysqli_real_escape_string($conn,$_POST['company']);
    $industryy=mysqli_real_escape_string($conn,$_POST['industry']);
    $numofempp=mysqli_real_escape_string($conn,$_POST['employees']);
    $websitee=mysqli_real_escape_string($conn,$_POST['website']);
    $sql="INSERT INTO reqdemo(fname,lname,wemail,mobile,country,jobtitle,company,industry,numofemp,website)VALUES('$fnn','$lnn','$wemaill','$mobilee','$counn','$jobb','$companyy','$industryy','$numofempp','$websitee')";
    mysqli_query($conn,$sql);
    }

?>

<html>
    <head>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="request.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        
        <form>
            
          <div class="container">
            <h2>  Request A Demo</h2>
            <form action="/action_page.php" class="form-control w-50 mx-auto my-4">
              <div class="form-group" >
                <label for="Firstname">First name:</label>
                <input type="text" class="form-control" id="Firstname" required placeholder="Enter  First name" name="fn">
              </div>
              <div class="form-group">
                <label for="Lastname">Last name</label>
                <input type="text" class="form-control" id="Lastname" placeholder="Enter Lastname" name="ln">
              </div>
              <div class="form-group">
                <label for="email">Work Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
              </div>
              <div class="form-group">
                <label for="Mobile">Mobile:</label>
                <input type="number" class="form-control" id="Mobile" placeholder="Enter Mobile" name="Mobile">
              </div>
              <div class="form-group">
                <label for="country">country:</label>
                <input type="text" class="form-control" id="country" placeholder="Enter country" name="country">
              </div>
              <div class="form-group">
                <label for="title">Job title:</label>
                <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
              </div>
              <div class="form-group">
                <label for="company">company:</label>
                <input type="text" class="form-control" id="company" placeholder="Enter company" name="company">
              </div>
              <div class="form-group">
                <label for="Industry">Industry:</label>
                <input type="Industry" class="form-control" id="Industry" placeholder="Enter Industry" name="Industry">
              </div>
              <div class="form-group">
                <label for="employees">No. of employees:</label>
                <input type="employees" class="form-control" id="employees" placeholder="Enter employees" name="employees">
              </div>
              <div class="form-group">
                <label for="Website">Website:</label>
                <input type="Website" class="form-control" id="Website" placeholder="Enter Website" name="Website">
              </div>
              <div class="checkbox">
                <label><input type="checkbox" name="remember"> Remember me</label>
              </div>
              <button type="submit" name="submit"  class="btn btn-primary">Submit</button>
            </form>
          </div>
    </body>
</html>