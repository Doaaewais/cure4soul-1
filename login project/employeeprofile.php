<?php include('connection.php');?>
<?php include('logformemp.php');?>
<!DOCTYPE html>
<html>
<head>
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
        echo "<td>" . $row['Time1'] . "</td>";
        echo "<td>" . $row['Time2'] . "</td>"; 
        echo "<td>" . $row['Time3'] . "</td>";
        echo "<td><button value=><span class='session-status " . ($row['status'] == 'booked' ? 'booked' : 'unbooked') . "'></span></button></td>";

        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No schedule found.";
}

?>