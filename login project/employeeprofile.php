<?php include('connection.php');?>
<?php include('logformemp.php');?>
<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/employeeprofile.css">
        <link rel="styleshteet" href="css/all.min.css">
        <link rel="stylesheet" href="css/fontawesome.min.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="js/popper.min.js"></script>
        <title>Employee Schedule</title>
        <style>  .navbar{
            display: flex;
            justify-content: space-between;

            align-items: center;
            position: fixed;
            left:0px;
            right: 0px;
            }
        .navbar ul{display: flex;
            list-style: none;
        justify-content: flex-end;
        }
        .navbar ul li{padding: 20px;
        }
        .navbar ul li a{text-decoration:none;
        font-weight: 600;
        margin:5px;
        color: white;

    }
    .navbar ul li a:hover{color: gray;}
    .nav-buttons{margin-right: 40px; padding-bottom: 10px;}
    .btn1 button {
        background-color: orange;
        width: 150px;
        height: 40px;
        border-radius: 8px;
        border-style: none;


    }
    .btn1 button:hover{background-color: #fad263;}
    .btn1 button a{text-decoration: none;
    color: white;}

    /*testimonial*/

.test-left{background-color:  rgb(226, 225, 225);
    width:15%;

  }
    .test-left img{width:80%;
    margin-top:30px ; border-radius: 5%;margin-bottom: 20px;margin-left: 20px;}
    .test-right{width:70%;background-color:  rgb(226, 225, 225);

    }
    .test-right h3{margin:50px 0px 10px 20px;
        color:darkgoldenrod;
    }
    .test-right p{margin:0px 0px 10px 20px;
    }
    </style>
	<title>Doctor Schedule</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- Custom CSS -->
	<style type="text/css">
		.schedule-table {
			margin-top: 30px;
			margin-bottom: 30px;
		}
		.schedule-table th {
			text-align: center;
			background-color: #f5f5f5;
			border: 1px solid #ddd;
			padding: 10px;
		}
		.schedule-table td {
			text-align: center;
			border: 1px solid #ddd;
			padding: 10px;
		}
		.book-btn {
			margin-top: 10px;
		}
	</style>
</head>
<body>
	<!--navbar--> 
    <section class="nav" >
        <div class="navbar"style="background-color:#1e6091;">
            <h2 style="color: white; font-weight: bold; padding-left: 40px;">cure4soul<span class="dot" style="color: #00c3da;">.</span></h2>
    
            <ul>
                <li><a href="#home" style="color:white ">HOME</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#service">Service</a></li>
                <li><a href="#client">Works</a></li>
                <li><a href="#prices">Pricing</a></li>
                <li><a href="#contact">Contact</a></li>
                
            </ul>
    
            <div class="nav-buttons" style="display: flex; justify-content: flex-end;">
                <div class="btn1" style="padding-right: 10px;"><button><a href="">Member Login</a></button></div>
                <div class="btn1"><button><a href="">Request a Seminar</a></button></div>
            <div>
    
              
    
            
        </div>
    </section>
	<!--testimonial-->
<section class="test" style="margin-top: 120px;">
    <div class="container">
        <div class="test-details" style="display: flex;justify-content:center;">
            <div class="test-left">
                <img src="docc.jpg">
            </div>
            <div class="test-right">
                <h3>Alex Du</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.<br>
                    Ut quod temporibus ad repudiandae
                    veniam optio<br>
                    eos asperiores! Sapiente, natus dicta?</p>
            </div>

        </div>
    </div>
</section>
	<!--div class="container">
		<h1 class="text-center">Doctor Schedule</h1>
		<p class="text-center">Select a date and session time to book an appointment:</p>
		<table class="table schedule-table">
			<thead>
				<tr>
					<th>Date</th>
					<th>Session 1</th>
					<th>Session 2</th>
					<th>Session 3</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Monday, May 16</td>
					<td><button class="btn btn-primary book-btn">Book Session 1</button></td>
					<td><button class="btn btn-primary book-btn">Book Session 2</button></td>
					<td><button class="btn btn-primary book-btn">Book Session 3</button></td>
				</tr>
				<tr>
					<td>Tuesday, May 17</td>
					<td><button class="btn btn-primary book-btn">Book Session 1</button></td>
					<td><button class="btn btn-primary book-btn">Book Session 2</button></td>
					<td><button class="btn btn-primary book-btn">Book Session 3</button></td>
				</tr>
				<tr>
					<td>Wednesday, May 18</td>
					<td><button class="btn btn-primary book-btn">Book Session 1</button></td>
					<td><button class="btn btn-primary book-btn">Book Session 2</button></td>
					<td><button class="btn btn-primary book-btn">Book Session 3</button></td>
				</tr>
				<tr>
					<td>Thursday, May 19</td>
					<td><button class="btn btn-primary book-btn">Book Session 1</button></td>
					<td><button class="btn btn-primary book-btn">Book Session 2</button></td>
					<td><button class="btn btn-primary book-btn">Book Session 3</button></td>
				</tr>
				<tr>
					<td>Friday, May 20</td>
					<td><button class="btn btn-primary book-btn">Book Session 1</button></td>
					<td><button class="btn btn-primary book-btn">Book Session 2</button></td>
					<td><button class="btn btn-primary book-btn">Book Session 3</button></td>
				</tr>
                <tr>
                    <td>Saturday, May 21</td>
                    <td><button class="btn btn-primary book-btn">Book Session 1</button></td>
                    <td><button class="btn btn-primary book-btn">Book Session 2</button></td>
                    <td><button class="btn btn-primary book-btn">Book Session 3</button></td>
                </tr>
                <tr>
                    <td>Sunday, May 22</td>
                    <td><button class="btn btn-primary book-btn">Book Session 1</button></td>
                    <td><button class="btn btn-primary book-btn">Book Session 2</button></td>
                    <td><button class="btn btn-primary book-btn">Book Session 3</button></td>
                </tr>
            </tbody>
        </table>
    </div-->
    
    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
            </body>
			</html>
			<?php
// Assuming you have a MySQL database connection established

// Start the session and retrieve the logged-in therapist's email from the session

$n = $_SESSION['name']; // Modify this according to your authentication system

// Retrieve the therapist's ID based on their email
$query = "SELECT eid FROM employee WHERE email = '$n'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$n = $row['eid'];

// Retrieve the therapist's schedule from the sessions table
$query = "SELECT dayy, Time1,Time2,Time3 , status, eid, employee.tid,sessions.tid FROM sessions inner join employee on sessions.tid = employee.tid WHERE eid='$n' and employee.tid=sessions.tid;";
$result = mysqli_query($conn, $query);

// Display the schedule in a table format
if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr><th>Day</th><th>session 1</th><th>session 2</th><th>session 3</th><th></th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<td>" . $row['dayy'] . "</td>";
        echo "<td><button value=>" . $row['Time1'] . "</button></td>";
        echo "<td><button value=>" . $row['Time2'] . "</button></td>"; 
        echo "<td><button value=>" . $row['Time3'] . "</button></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No schedule found.";
}

?>