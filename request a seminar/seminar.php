
<?php include('connection.php'); 
if(!isset($_session)){
  session_start();
}
if(isset($_post['submit'])){
  $company=mysqli_real_escape_string($conn,$_post['company']);
  $email= mysqli_real_escape_string($conn,$_post['email']);
  $phone=mysqli_real_escape_string($conn,$_post['phone']);
  $duration=mysqli_real_escape_string($conn,$_post['duration']);
  $dt=mysqli_real_escape_string($conn,$_post['dt']);
  $topic=mysqli_real_escape_string($conn,$_post['topic']);
  $numofpart=mysqli_real_escape_string($conn,$_post['numofpart']);
  $sql="INSERT INTO reqseminar(compname,email,phone,duration,dt,topic,numofpart) values ('$company','$email','$phone','$duration','$dt','$topic',$numofpart')";
  mysqli_query($conn,$sql);
  
}

?>
<html>
    <head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="css/seminar.css">
    </head>
    <body>
        <div class="parent">
            <div class="container">
                <div class=" row py-5 g-3 "></div>
                <div class="col-md-6 child py-4">
                    <div class="inner">
                <img src="images/WhatsApp Image 2023-05-06 at 4.42.54 PM (1).jpeg" alt="profile">
           </div>
                <div class="layer"></div>
        
               </div> 
                
            
            
                <div class="col-md-6 py-4 child">
                    <form action="/action_page.php">
                        <div class="form-group">
                            <label for="company">Company name :</label>
                            <input type="text" class="form-control" id="company" name="company" required>
                          </div>
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="form-group">
                          <label for="phone">Phone</label>
                          <input type="number" class="form-control" id="phone" name="phone" required>
                        </div>
                        <div class="form-group">
                          <label for="duration">Duration</label>
                          <input type="number" class="form-control" id="duration" name="duration" required>
                        </div>
                        <div class="form-group">
                            <label for="datetime">Date time:</label>
                            <input type="time" class="form-control" id="datetimne" name="dt" required>
                          </div>
                          <div class="form-group">
                            <label for="topic">Topic:</label>
                            <input type="text" class="form-control" id="topic" name="topic" required>
                              
                          </div>
                          <div class="form-group">
                            <label for="numparticipant">Number of Participant:</label>
                            <input type="text" class="form-control" id="numofpart" name="numofpart" required>
                          </div>

                        
                        <div class="checkbox">
                          <label><input type="checkbox"> Remember me</label>
                        </div>
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                      </form>
        
            </div> 
        </div>
            <div class="crl"></div>
        
        </div>
        <div class="footer">
          <h2>Copyright © 2023 cure4soul, Inc.</h2>
        </div>
    </body>
</html>