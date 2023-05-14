<?php include('connection.php');?>
<?PHP 
if(! isset($_session)){
  session_start();
}
if(isset($_POST['submit'])){
    $n=mysqli_real_escape_string($conn,$_POST['company']);
    $e=mysqli_real_escape_string($conn,$_POST['email']);
    $phone= mysqli_real_escape_string($conn,$_POST['mobile']);
    $industry=mysqli_real_escape_string($conn,$_POST['industry']);
    $numofemp=mysqli_real_escape_string($conn,$_POST['employees']);
    $numofsession=mysqli_real_escape_string($conn,$_POST['sessions']);
  
    $sql="INSERT INTO company(name,email,phone,industry) Values('$n','$e','$phone','$industry')";
     $d="INSERT INTO demo(numofemp,numofses,status,cid) Values('$numofemp','$numofsession','NULL',1)";
    mysqli_query($conn,$sql);
    mysqli_query($conn,$d);
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
        
        <form method='post'>
            
          <div class="container">
            <h2>  Request A Demo</h2>
            <form action="/action_page.php" class="form-control w-50 mx-auto my-4">
             
              <div class="form-group">
                <label for="company">company:</label>
                <input type="text" class="form-control" id="company" placeholder="Enter company" name="company">
              </div>
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
              </div>
              <div class="form-group">
                <label for="Mobile">Mobile:</label>
                <input type="number" class="form-control" id="Mobile" placeholder="Enter Mobile" name="mobile">
              </div>
              
              <div class="form-group">
                <label for="Industry">Industry:</label>
                <input type="Industry" class="form-control" id="Industry" placeholder="Enter Industry" name="industry">
              </div>
              <div class="form-group">
                <label for="employees">No. of employees:</label>
                <input type="employees" class="form-control" id="employees" placeholder="Enter employees" name="employees">
              </div>
              <div class="form-group">
                <label for="Website">N0 of sessions</label>
                <input type="Website" class="form-control" id="Website" placeholder="Enter Website" name="sessions">
              </div>
              <div class="checkbox">
                <label><input type="checkbox" name="remember"> Remember me</label>
              </div>
              <button type="submit" name="submit"  class="btn btn-primary">Submit</button>
            </form>
          </div>
    </body>
</html>