<?php
//initializing my variable(s) with default value(s):
$delivery = "";
$book_name = "";
$book_price = "";
$region = "";
$email = "";
$truepassword= "";
$inputpassword = "";


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
if(isset($_POST['bookname']) && $_POST['bookname'] != '' && $_POST['bookname'] != null) {


//'$book_name' variable = the value sent by post method under the name 'bookname'. This is the name of the book the user clicked on.
$book_name = $_POST['bookname'];
}

if(isset($_POST['email']) && $_POST['email'] != '' && $_POST['email'] != null) {


//'$email' variable = the value sent by post method under the name 'email'. This is the email of the the user from their login.
$email = $_POST['email'];
}

if(isset($_POST['password']) && $_POST['password'] != '' && $_POST['password'] != null) {


//'$password' variable = the value sent by post method under the name 'password'. This is the password of the the user from their login.
$inputpassword = $_POST['password'];
}


//defining the SQL request as the variable, '$sql'
//(sql request for Password where the 'email' column is equalent to the email entry variable from the post method form)
$sql = "SELECT Password FROM customers WHERE Email = '" . $email . "'";


//defining the result of the SQL request ('$result') as: 
$result = $link->query($sql);
//calling the query() method (with $sql as an argument) to the $link object. This executes the SQL command. The result is defined as '$result'.


if ($result->num_rows > 0) {
//calling 'num_rows' method to check the number of rows obtained from query($sql); if there are more than no rows (there are results from) then...



while($row = $result->fetch_assoc()) {
//for every row (every individual result from $sql), fetch_assoc() is called to fetch that specific row as (part of) an associative array



$truepassword = $row['Password'];
//the valid password is fetched from the bookstock table by referring to the row obtained from the 'Password' column. This is set as '$truepassword'.(This is the password stored in the db, this is the correct one).
}
}	


//sql request for Region where the 'email' column is equalent to the email entry variable from the post method form
$sql = "SELECT Region FROM customers WHERE Email = '" . $email . "'";


//defining the result of the SQL request ('$result') as: 
$result = $link->query($sql);


//calling the query() method (with $sql as an argument) to the $link object. This executes the SQL command. The result is set as '$result'.
if ($result->num_rows > 0) {
//calling 'num_rows' method to check the number of rows obtained from query($sql); if there are more than no rows (there are results from) then...


while($row = $result->fetch_assoc()) {
//for every row (every individual result from $sql), fetch_assoc() is called to fetch that specific row as (part of) an associative array

$region = $row['Region'];
//the region is fetched from the bookstock table by referring to the row obtained from the 'Region' column. This is set as '$region'. 

//conditions for every potential delivery fee:
if ($region == "Europe") {
	//if region of the user is stored as Europe, the delivery fee will be 1.
	$delivery= 1;
} else if ($region == "North America") {
	//if region of the user is stored as North America, the delivery fee will be 1.5.	
	$delivery = 1.5;
} else if ($region == "UK") {
	//if region of the user is stored as UK, the delivery fee will be 0.00.	
	$delivery = 0.00;
} else if ($region == "South America") {
	//if region of the user is stored as South America, the delivery fee will be 3.
	$delivery = 3;
} else if ($region == "Asia") {
	//if region of the user is stored as Asia, the delivery fee will be 2.
	$delivery = 2;
} else if ($region == "Africa") {
	//if region of the user is stored as Africa, the delivery fee will be 4.
	$delivery = 4;
}
}
}

//sql request for 'thumbnail' and 'price' where the 'bookname' column (in the bookstock table) is equivalent to the 'bookname' entry variable from the post method form, saved as $book_name
$sql = "SELECT thumbnail, price FROM bookstock WHERE bookname = '" . $book_name . "'";
//defining the result of the SQL request ('$result') as: 


$result = $link->query($sql);
//calling the query() method (with $sql as an argument) to the $link object. This executes the SQL command. The result is set as '$result'.


if ($result->num_rows > 0) {
//calling 'num_rows' method to check the number of rows obtained from query($sql); if there are more than no rows (there are results from) then...


while($row = $result->fetch_assoc()) {
//for every row (every individual result from $sql), fetch_assoc() is called to fetch that specific row as (part of) an associative array


$book_price = $row['price'];
//the book's price is fetched from the bookstock table by referring to the row obtained from the 'price' column. This is set as '$book_price'. 



//if condition: the rest of the webpage only loads if the password that the user entered into the form was equivalent to the password stored corresponding to their email.
//otherwise, "echo file_get_contents("incorrectdetails.html");" occurs, and the user finds a page allowing them to return to the previous URL and re-enter their details using a javascript back-button.
if ($inputpassword == $truepassword)
{
echo "<head>"; 
echo "<link href = 'sweetshelf.css' rel = 'stylesheet' type = 'text/css'>";
echo "</head>";
echo "<header>";	
echo "<a href = 'landing page.html'><img src = 'logo.jpg' ALT= 'Oops! This image is missing from your browser.'width = '135' height = '40' class = 'logo'> </a>";
echo "<nav>";
echo "<ul> ";
echo "<li> <a href = 'Fiction page.html'> Fiction </a> </li>";
echo "<li> <a href = 'Non-fiction books.html'> Non-fiction </a> </li>";
echo "<li> <a href = 'Educational.html'> Educational </a> </li>";
echo "<li> <a href = 'kidsbooks.html'> Children's </a> </li>";
echo "<li> <a href = 'Customer Support.html'> Customer Support </a> </li>";
echo "<li> <form action = 'Genericbooklink.php' method = 'post'>  <input type='text' placeholder='Search for a book...' name = 'bookname'> <input type = 'submit' value = 'Search' name = 'display'> </form> </li>";
echo "</ul>";
echo "</nav>";
echo "</header>";
echo "<div class = 'logout'>";
echo "<form action = 'index.html' method = 'post'> <input type = 'submit' value = 'Log Out'> </form> </div>";
echo "<div class = 'wrapper'>";	
echo "<body>";
//Purchase summary view
echo "<h3 class = 'h3two'> Your Purchase: </h3>";
echo "<div class = 'wrapper'>";


echo " <p class = 'center'> <img src = '" . $row['thumbnail'] . "' ALT = 'Oops! This image is missing from your browser.' width = '286' height = '436'></p>";
									//enters the path to the image of the book, obtained fetching the row's data in the 'thumbnail' column of the bookstock table. (identified as '$row['thumbnail']' in this line).
echo "<br>";
echo " <p class = 'center'> ", $book_name, "</p>";
								//enters the name of the book from the variable, '$book_name' obtained from '$book_name = $_POST['bookname'];'

echo "<br>";
echo "<p class = 'center'> Price: £", $book_price, "</p>";
								//enters the price of the book from the variable, '$book_price' obtained from fetching the data in the row under the column, 'price.' 
								//the row is fetched under this column in the earlier statement: '$book_price = $row['price'];'
echo "<br>";
echo "<p class = 'center'> Delivery Fee: £", $delivery, "</p>";
								//enters the delivery fee of the book, stored as '$delivery'. 
								//this delivery fee is set based off the conditions (the validity of which, is determined by the region stored for the user in the customers table) 
								//the region is originally obtained in the statement, '$region = $row['Region'];
								//the region is fetched from the bookstock table by referring to the row obtained from the 'Region' column. This is set as '$region'. 
								//(conditions between lines 74-88).

echo "<br>";
echo "<p class = 'center'> <form action='Thankyou.html' method='get'> </p>";
echo "<p class = 'center'> <input type='submit' value='Buy now!'> </p>";
//when the user submits this small form (by pushing the submit input button labelled as 'Buy now!'), the browser loads the 'thank you page' (path: thankyou.html), 
//concluding the logic of this website's transactions by confirming the purchase with a statement of gratitude.
echo "<p class = 'center'> </form> </p>";
echo "</div>";
echo "<br>";
echo "<p class = 'center'> (Please be aware that the delivery fee may vary based on your region) </p>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "</body>";
echo "</div>";
echo "<div class = 'bottomincorrect'>";
echo "<ul>"; 
echo "<li> <a href = 'FAQ.html' > FAQ </a> </li>";
echo "<li> <a href = 'Terms of Use.html'> Terms & Conditions </a> </li>";
echo "<li> <a href = 'Privacy Policy.html'> Privacy Policy </a> </li>";
echo "<li> <a href = 'About Us.html'> About Us </a> </li>";
echo "</ul>";
echo "</div>";
} else {
	//if the password entered in the form was not equal to the stored password associated with the user's email, the incorrectdetails.html page is loaded, where the user can push a javascript back-button and re-enter their details.
	echo file_get_contents("incorrectdetails.html");
} 
}	
}


 
unset($_POST['bookname']);

unset($_POST['email']);

unset($_POST['password']);

mysqli_close($link);

//unsetting the data obtained from the post method
//closing the connection to the 'sweetshelf' database.

?>