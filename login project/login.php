<?php include("connection.php"); ?>
<?php
if(! isset($_session)){
    session_start();
}
if(isset($_POST['login'])){
    $n=mysqli_real_escape_string($conn,$_POST['company']);
    $e=mysqli_real_escape_string($conn,$_POST['email']);
    $p=mysqli_real_escape_string($conn,$_POST['password']);
    $t="SELECT * FROM emp WHERE 'company'='$n' AND 'email'='$e' AND 'password'='$p'";
    $r=mysqli_query($conn,$t); 
if(mysqli_num_rows($r)==1){
    header('location:requestdemo.php');
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
<div class="parent">
    <h4>
        Login to CURE4SOUL
    </h4>
    <div class="frame">
        <form method='post'>
            <br><br>
            <label for="company">Enter your company</label><br>
            <input class="for" type="text" id="company" name="company" required><br>
            <br>
            <label for="email">Enter your email</label><br>
            <input class="for" type="text" id="email" name="email" required><br>
            <br>
            <label for="password">Enter your password</label><br>
            <input class="for"  type="password" id="password" name="password" required><br><br>
            <button type="submit" name="login" class="submit1">Login</button><br><br>
            <a href="forgot.html">forgot your password?</a>
            
    </div>
 
</div>







</body>
</html>