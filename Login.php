<?php
//initializing my variable(s) with default value(s):
$email = "";
$truepassword = "";
$inputpassword = "";
$validemail = "";
//the mySQL connection variables.
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sweetshelf";

//establishing the connection to the database and defining that connection as a variable, '$link'
$link = mysqli_connect("localhost", "root", "", "sweetshelf"); 

//if the connection cannot be made, the rest of the program does not continue and "Error: Could not connect." is printed, followed by the specific error message.
if($link === false){ 
die("ERROR: Could not connect. " 
. mysqli_connect_error()); 
}

//'if(isset($_POST['_____']) && $_POST['____'] != '' && $_POST['____'] != null)'; 
//a condition that confirms the data being sent by a form (by the POST method) is not set and is not empty or null, 
//before setting the sent data (associated with a specific name) to a specific variable.
if(isset($_POST['Email']) && $_POST['Email'] != '' && $_POST['Email'] != null) {
$email = $_POST['Email'];
}
//'$Email' variable = the value sent by the post method under the name 'Email'. This is the email the user input in their login.


if(isset($_POST['Password']) && $_POST['Password'] != '' && $_POST['Password'] != null) {
$inputpassword = $_POST['Password'];
}
//'$Password' variable = the value sent by the post method under the name 'Password'. This is the password the user input during their login.


//defining the SQL request to obtain the value under the column: 'Password' whereever the value under the 'Email' column in the customers table is equal to $Email. 
//The SQL request is set as the variable, '$sql'
$sql = "SELECT Password FROM customers WHERE Email = '" . $email . "'";


//defining the result of the SQL request ('$result') as:
$result = $link->query($sql);
//calling the query() method (with $sql as an argument) to the $link object. This executes the SQL command. The result is set as '$result'.


if ($result->num_rows > 0) {
//calling 'num_rows' method to check the number of rows obtained from query($sql); if there are more than no rows (there are results from) then...


//for every row (every individual result from $sql), fetch_assoc() is called to fetch that specific row as (part of) an associative array
while($row = $result->fetch_assoc()) {

$truepassword = $row['Password'];
//sets the valid password of the user as '$truepassword', 
//the value of which is fetched by referring to the resulting row obtained from the 'Password' column after executing the SQL command.
}
}

//sql request for password using email
$sql = "SELECT Email FROM customers WHERE Password = '" . $truepassword  . "'";
$result = $link->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {

$validemail = $row['Email'];

//the same process is executed in reverse, using the valid password to obtain the valid email. This is a double-measure to ensure the email that has been input is definitely valid.

}
}

if ($inputpassword == $truepassword && $validemail == $email) //if condition whereby the home page is only opened if the input email **AND the input password correspond to a single record in the customers table
{	
 echo file_get_contents("landing page.html");
} else {
  echo file_get_contents("incorrectdetails.html");
}

	

unset($_POST['Email']);

unset($_POST['Password']);

$link->close();
//unsetting the data obtained from the post method
//closing the connection to the 'sweetshelf' database.
?>