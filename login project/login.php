<?php include("connection.php"); ?>
<?php
if (isset(($_POST)['login'])) {
    // Retrieve the email and password from the POST data
    $company =mysqli_real_escape_string($conn,$_POST['company']);
    $email =mysqli_real_escape_string($conn,$_POST['email']);
    $password =mysqli_real_escape_string($conn,$_POST['password']); 

    // Build the SQL query to check if the email and password match a row in the users table
    $sql = "SELECT * FROM emp WHERE company='$company' AND email = '$email' AND password = '$password'";

    // Execute the query and get the result
    $result = mysqli_query($conn, $sql);

    // Check if there is a row in the result (i.e., if the email and password matched a row in the table)
    if (mysqli_num_rows($result) > 0) {
        // Redirect the user to the home page
        header('Location:requestdemo.php');
        exit();
    } else {
        // Display an error message
        echo "Invalid email or password";
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

        <form >

        <form method='post' action="requestdemo.php">

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