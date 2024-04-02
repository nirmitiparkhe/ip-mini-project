<?php
 // Connect to MySQL database
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "ipdb";
 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
 }
 $email = $_POST['email'];
 $password = $_POST['password'];
 $cpswd = $_POST['cpswd'];
 // Check if email already exists
 $sql_check_email = "SELECT * FROM registration WHERE email='$email'";
 $result_check_email = $conn->query($sql_check_email);
 if ($result_check_email->num_rows > 0) {
 die("Email already exists.");
 }
 // Check if passwords match
 if ($password !== $cpswd) {
 die("Passwords do not match.");
 }
 // Insert data into database
 $sql = "INSERT INTO registration (email, password)
 VALUES( '$email', '$password')";
if ($conn->query($sql) === TRUE) {
 echo "Registration successful!";
 echo "Thank you for registering, " . $email . "!<br>";
 echo "You'll be redirected to login page in 3 seconds";
 header("refresh:3;url=login.php");
 } else {
 echo "Error: " . $sql . "<br>" . $conn->error;
 }
 $conn->close();
 ?>