<?php include('connection.php');?>
<!DOCTYPE html>
<html>
<head>
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
</section>

<!--testimonial-->
<section class="test" style="margin-top: 120px;">
	<div class="container">
		<div class="test-details" style="display: flex;justify-content:center;">
			<div class="test-left">
				<img src="images/docc.jpg">
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
	<div class="container">
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
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
            </body>
			</html>
