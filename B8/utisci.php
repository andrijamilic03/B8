<?php
		session_start();
		//Unos u bazu
		$servername = 'localhost';
		$username = 'root';
		$password = '';
		$dbname = 'utisak';
		
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		//Unos podataka
        
		$date = date("Y-m-d h:i:sa");
		//echo $date;
        $name=$_POST["ime"];
        $email=$_POST["email"];
        $komentar=$_POST["comment"];
              $sqlquery = "INSERT INTO utisak(Ime,Email,Komentar,datum) VALUES ('$name','$email','$komentar','$date')";
     
		
		if ($conn->query($sqlquery) === TRUE) {
			echo "Uspesno uneseni podaci u bazu";
			$_SESSION["poruka"] = "<script>alert('Uspesno!!')</script>";
			header('location: ./index.php');
		} 
		else {
			echo "Error: " . $sqlquery . "<br>" . $conn->error;
		}
		
		
		

		// Closing the connection.
		$conn->close();
		//header('location: ./index.html');
?>