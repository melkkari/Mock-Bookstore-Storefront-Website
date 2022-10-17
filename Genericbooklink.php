
<?php
//initializing my variable(s) with default value(s):
$book_name = "";

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
$book_name = $_POST['bookname'];
//'$book_name' variable = the value sent by post method under the name 'bookname'. This is the name of the book the user clicked on.

}


//defining the SQL request to obtain the values under the columns: 'thumbnail, price and author' whereever the value under the 'bookname' column is equal to $book_name. 
//The SQL request is set as the variable, '$sql'
$sql = "SELECT thumbnail, price, author FROM bookstock WHERE bookname = '" . $book_name . "'";



//defining the result of the SQL request ('$result') as:
$result = $link->query($sql);



//calling the query() method (with $sql as an argument) to the $link object. This executes the SQL command. The result is set as '$result'.
if ($result->num_rows > 0) {
//calling 'num_rows' method to check the number of rows obtained from query($sql); if there are more than no rows (there are results from) then...




//for every row (every individual result from $sql), fetch_assoc is called to fetch that specific row as (part of) an associative array
while($row = $result->fetch_assoc()) {


echo "<head>"; 
echo "<link href = 'sweetshelf.css' rel = 'stylesheet' type = 'text/css'>";
echo "</head>";
echo "<header>"; 	
echo "<a href = 'landing page.html'><img src = 'logo.jpg' ALT= 'Oops! This image is missing from your browser.' width = '135' height = '40' class = 'logo'> </a>";
echo "<nav>";
echo "<ul>";
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
echo "<body>";	
echo "<br>";	
echo "<h4>" . $book_name . " </h4>";
//displays the name of the book from the variable, '$book_name' obtained from '$book_name = $_POST['bookname'];'


echo "<br>";	
echo "<div class = 'book_profile'><p class = 'book_page'> <img src = '" . $row['thumbnail'] . "' ALT = 'Oops! This image is missing from your browser.' width = '286' height = '436'> </p> <div class = 'book_page_image'>  <div class = 'book_body'> <div class = 'book_author'> <p class = 'book_page'><br> <br> <h4> By: " . $row['author'] . " </h4> </p> </div>  <br>  <div class = 'book_price'>  <p class = 'book_page'> <h4> £" . $row['price'] . ".00 </h4> </p> </div> </div> </div></p>";
																	//the path for the relevant image (stored in the bookstock table) is fetched by referring to the resulting row obtained from the 'thumbnail' column																						            //the author name is fetched from the bookstock table by referring to the row obtained from the 'author' column   //the price is fetched from the bookstock table by referring to the row obtained from the 'price' column
echo "<p class = 'book_page'> <br> <br>";
echo "<h3 class = 'h3two'> Log in & continue </h3> <br> <br> <br>";
echo "<p><form action='Purchase.php' method='post' class = 'center'>";
echo "<p><label for='Email'>Please enter your email:</label></p><br>";
echo "<p><input type='text' name = 'email' required></p> <br>";
echo "<p><label for='Password'>Please enter your password: </label></p><br>";
echo "<p><input type='text' name = 'password' required></p>";
echo "<p><input type='hidden' name= 'bookname' value='", $book_name, "'</p><br> <br> <br>";
//displays the name of the book from the variable, '$book_name' obtained from '$book_name = $_POST['bookname'];'


echo "<p><input type='submit' value='Log In'></p>";
echo "</form>";
echo "</p>";
echo "<div class = 'bottombookpage'>";
echo "<ul>";
echo "<li> <a href = 'FAQ.html' > FAQ </a> </li>";
echo "<li> <a href = 'Terms of Use.html'> Terms & Conditions </a> </li>";
echo "<li> <a href = 'Privacy Policy.html'> Privacy Policy </a> </li>";
echo "<li> <a href = 'About Us.html'> About Us </a> </li>";
echo "</ul>";
echo "</div>";
echo "</body>";


}
}
	else {
		echo file_get_contents("nosearchresults.html");
	}	
unset($_POST['bookname']);
mysqli_close($link); 
//unsetting the data obtained from the post method
//closing the connection to the 'sweetshelf' database.

?>
								
