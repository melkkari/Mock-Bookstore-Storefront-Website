<?php
//initializing my variable(s) with default value(s):
$Email = "";
$Name = "";
$Password = "";
$Date_of_Birth = "";
$Region = "";

//setting the sent data (associated with specific names) to specific variables.
$Email = $_POST['Email']; //The user's input email is set to the variable, '$Email'.
$Name = $_POST['Name']; //The user's input Name is set to the variable, '$Name'.
$Password =$_POST['Password']; //The user's input Password is set to the variable, '$Password'.
$Date_of_Birth =$_POST['Date_of_Birth']; //The user's input Date_of_Birth is set to the variable, '$Date_of_Birth'.
$Region =$_POST['Region']; //The user's input Region is set to the variable, '$Region'.


//the mySQL connection variables.
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sweetshelf";


//establishing the connection to the database and defining that connection as a variable, '$conn'
$conn = new mysqli($servername, $username, $password, $dbname);


//if the connection cannot be made, the rest of the program does not continue and "Connection failed: " is printed, followed by the specific error message.
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




//defining the SQL request to insert the variables '$Email', '$Name', '$Password', '$Date_of_Birth', '$Region' into one row of the support_tickets table
//under the columns: 'Email', 'Name', 'Password', 'Date of Birth', 'Region' respectively. This SQL request is set as the variable, '$sql'. 
$sql = "INSERT INTO customers (`Email`, `Name`, `Password`, `Date of Birth`, `Region`) 
VALUES 	('$Email', '$Name', '$Password','$Date_of_Birth', '$Region')";




if ($conn->query($sql) === TRUE) {
	//calling the query() method (with $sql as an argument) to the $conn object. This executes the SQL request.
	//if this produces, 'TRUE', the landing page is loaded (if the SQL request is executed successfully). Otherwise, emailredundant.html is loaded.

  


  echo file_get_contents("landing page.html"); //if the sql command went through, and their entry was inserted, they would just proceed to the landing page.
} else {
  echo file_get_contents("emailredundant.html"); //otherwise they are sent to emailredundant.html, where they're prompted to register with a different, unique email.
}

$conn->close();?>