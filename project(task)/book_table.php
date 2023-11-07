<?php

		$conn = mysqli_connect("localhost", "root", "", "Reservation");
		
		if($conn === false)
    {
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		$name = $_REQUEST['name'];
		$number = $_REQUEST['number'];
		$date = $_REQUEST['date'];
		$time = $_REQUEST['time'];
		$guests = $_REQUEST['guests'];

		$sql = "INSERT INTO reservation VALUES ('$name','$number','$date','$time','$guests')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Your Reservation is successfully done</h3>"; 
		} else{
			echo "ERROR: $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
?>

    