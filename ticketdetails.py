#! C:\Users\Moham\AppData\Local\Programs\Python\Python38\python

import cgi 

#creating an instance of fieldstorage to handle the data from the form within 'ticketsubmit.php'
form = cgi.FieldStorage()

       
#recieving the three hidden input values from ticketsubmit.php
#each of these inputs are set as variables
email = form.getvalue('email') #the value obtained from the form that's named, 'email' is set to a variable named, 'email'.       
ticket_category  = form.getvalue('ticket_category')  #the value obtained from the form that's named, 'ticket_category' is set to a variable named, 'ticket_category'.   
ticket_content  = form.getvalue('ticket_content') #the value obtained from the form that's named, 'ticket_content' is set to a variable named, 'ticket_content'.        



print ("Content-type:text/html\n")
print ("<html>")
print ("<HEAD>")
print ("<link href = 'sweetshelf.css' rel = 'stylesheet' type = 'text/css'>")
print ("</HEAD>")
print ("<header>")	
print ("<a href = 'landing page.html'><img src = 'logo.jpg' ALT= 'Oops! This image is missing from your browser.' width = '135' height = '40' class = 'logo'> </a>")
print ("<nav>")
print ("<ul>")
print ("<li> <a href = 'Fiction page.html'> Fiction </a> </li>")
print ("<li> <a href = 'Non-fiction.html'> Non-fiction </a> </li>")
print ("<li> <a href = 'Educational.html'> Educational </a> </li>")
print ("<li> <a href = 'kidsbooks.html'> Children's </a> </li>")
print ("<li> <a href = 'Customer Support.html'> Customer Support </a> </li>")
print ("<li> <form action = 'Genericbooklink.php' method = 'post'>  <input type='text' placeholder='Search for a book...' name = 'bookname'> <input type = 'submit' value = 'Search' name = 'display'> </form> </li>")

print ("</ul>")
print ("</nav>")
print ("</header>")
print ("<div class = 'logout'>")
print ("<form action = 'index.html' method = 'post'> <input type = 'submit' value = 'Log Out'> </form> </div>")

print ("<body>")
print ("<br>")
print ("<br>")
print ("<br>")
print ("<br>")
print ("<br>")  
print ("<p class = 'stretchup'> <h3 class = 'h3two'> Your support ticket details: </h3> </p>")
print ("<br>")
print ("<br>")
print ("<div class = 'center'>")    #below, this paragraph tag displays the details of the user's submitted ticket, 
                                    #based on the stored data obtained from the inputs of the form on ticketsubmit.php;
print ("<p class = 'FAQp'> Your email: ", email, "<br> <br><br> <br>")  #the 'email' variable is displayed. This variable is equivalent to the email of the user sending the ticket, 
                                                                        #this variable was set from the statement, 'email = form.getvalue('email')'
print ("Category of ticket: ", ticket_category, "<br><br> <br><br>")    #the 'ticket_category' variable is displayed. This variable is equivalent to the category of the ticket, 
                                                                        #this variable was set from the statement, 'ticket_category  = form.getvalue('ticket_category')''
print ("Description of ticket:<br><br> '", ticket_content, "'</p>")     #the 'ticket_content' variable is displayed. This variable is equivalent to the content of the ticket, 
                                                                        #this variable was set from the statement, 'ticket_content  = form.getvalue('ticket_content')'
print ("</div>")
print ("</body>")
print ("<div class = 'bottomincorrect'>")
print ("<ul>")
print ("<li> <a href = 'FAQ.html' > FAQ </a> </li>")
print ("<li> <a href = 'Terms of Use.html'> Terms & Conditions</a> </li>")
print ("<li> <a href = 'Privacy Policy.html'> Privacy Policy </a> </li>")
print ("<li> <a href = 'About Us.html'> About Us </a> </li>")
print ("</ul>")
print ("</div>")
print ("</body>")
print ("</html>")

