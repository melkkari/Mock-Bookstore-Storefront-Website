<?php
//initializing my variable(s) with default value(s):
$ticket_category = "";
$ticket_content = "";
$email = "";

//'if(isset($_POST['_____']) && $_POST['____'] != '' && $_POST['____'] != null)'; 
//a condition that confirms the data being sent by a form (by the POST method) is not set and is not empty or null, 
//before setting the sent data (associated with a specific name) to a specific variable.
if(isset($_POST['email']) && $_POST['email'] != '' && $_POST['email'] != null) {
$email = $_POST['email'];
}


//'$email' variable = the value sent by post method under the name 'email'. This is the email input by the user.
if(isset($_POST['ticket_content']) && $_POST['ticket_content'] != '' && $_POST['ticket_content'] != null) {
$ticket_content = $_POST['ticket_content'];
}


//'$ticket_content' variable = the value sent by post method under the name 'ticket_content'. This is the actual content of the ticket submitted by the user.
if(isset($_POST['ticket_category']) && $_POST['ticket_category'] != '' && $_POST['ticket_category'] != null) {
$ticket_category = $_POST['ticket_category'];
}
//'$ticket_category' variable = the value sent by post method under the name 'ticket_category'. This is the category of the ticket submitted by the user.

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

//defining the SQL request to insert the variables '$email', '$ticket_content' and '$ticket_category' into one row of the support_tickets table
//under the columns: 'email', 'ticket_content', 'ticket_category' respectively. This SQL request is set as the variable, '$sql'. 

$sql = "INSERT INTO support_tickets	(email, ticket_content, ticket_category) VALUES ('". $email . "', '". $ticket_content ."', '". $ticket_category ."')";
if ($link->query($sql) === TRUE) {
 //calling the query() method (with $sql as an argument) to the $link object. This executes the SQL request.
 //if this produces, 'TRUE' (I.E. if the SQL request is successful), the rest of the page loads and informs the user that their ticket has been submitted.  
 //otherwise, 




echo "<head>"; 
echo "<link href = 'sweetshelf.css' rel = 'stylesheet' type = 'text/css'>";
echo "</head>";
echo "<header>";	
echo "<a href = 'landing page.html'><img src = 'logo.jpg' ALT= 'Oops! This image is missing from your browser.' width = '135' height = '40' class = 'logo'> </a>";
echo "<nav>";
echo "<ul>";
echo "<li> <a href = 'Fiction page.html'> Fiction </a> </li>";
echo "<li> <a href = 'Non-fiction.html'> Non-fiction </a> </li>";
echo "<li> <a href = 'Educational.html'> Educational </a> </li>";
echo "<li> <a href = 'kidsbooks.html'> Children's </a> </li>";
echo "<li> <a href = 'Customer Support.html'> Customer Support </a> </li>";
echo "<li> <form action = 'Genericbooklink.php' method = 'post'>  <input type='text' placeholder='Search for a book...' name = 'bookname'> <input type = 'submit' value = 'Search' name = 'display'> </form> </li>";
echo "</ul>";
echo "</nav>";
echo "</header>";
echo "<div class = 'logout'>";
echo "<form action = 'index.html' method = 'post'> <input type = 'submit' value = 'Log Out'> </form> </div>";
echo "<body>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<p class = 'stretchup'> <h3 class = 'h3two'> Your ticket has been submitted; </h3> </p>";
echo "<br>";
echo "<br>";
//the below form submits three hidden inputs (I.E. 'email', 'ticket_category' and 'ticket_content' respectively)
// to ticketdetails.py should the user decide to view the details of their submitted ticket 
// by clicking the visible submit input button - labelled as 'See your ticket details'.
echo "<FORM action='ticketdetails.py' method='POST'>";
echo "<input type = 'hidden' value = ", $email, " name='email'>  <br>";
									//enters the variable '$email' into the hidden input, 'email'. 
									//'$email' comes from the 'email' value the user sends through the customer support form.
									//Set via '$email = $_POST['email'];'
echo "<input type = 'hidden' value = ", $ticket_category, " name='ticket_category'>";
									//enters the variable '$ticket_category' into the hidden input, 'ticket_category'. 
									//'$ticket_category' comes from the 'ticket_category' value the user sends through the customer support form.
									//Set via '$ticket_category = $_POST['ticket_category']
echo "<input type = 'hidden' value = ", $ticket_content, " name='ticket_content'>";
									//enters the variable '$ticket_content' into the hidden input, 'ticket_content'. 
									//'$ticket_content' comes from the 'ticket_content' value the user sends through the customer support form.
									//Set via '$ticket_content = $_POST['ticket_content']
echo "<p  class = 'center'> <input type='submit' value='See your ticket details'> </p>";
									//by clicking the 'See your ticket details' submit input, the user initiates the action of the form and ticketdetails.py is loaded with their submitted information. 
echo "</FORM>";
echo "</body>";
echo "<div class = 'bottomincorrect'>";
echo "<ul>";
echo "<li> <a href = 'FAQ.html' > FAQ </a> </li>";
echo "<li> <a href = 'Terms of Use.html'> Terms & Conditions </a> </li>";
echo "<li> <a href = 'Privacy Policy.html'> Privacy Policy </a> </li>";
echo "<li> <a href = 'About Us.html'> About Us </a> </li>";
echo "</ul>";
echo "</div>";
echo "</body>";
} else {
    echo file_get_contents("ticketredundant.html");
							//if condition of successful SQL insert is not met, 
							//the user is sent to the 'ticket redundant page', 
							//where they have the option to return to the customer support form and resubmit their information.

}
unset($_POST['ticket_content']);

unset($_POST['email']);

unset($_POST['ticket_category']);

mysqli_close($link);

//unsetting the data obtained from the post method
//closing the connection to the 'sweetshelf' database.
?>
