README:- Book Search Application

1. Extract the zip folder in the root directory of your localhost.

2. Then open the ghissu/book folder and open the search.php file.

3. Change the 80, 81 and 82 line,i.e, $username, $password, $db to your own phpmyadmin username,password and the database name where you have the table crossword_data.

4. Go to the 170th line change the <button onclick to your localhost. Remove or replace the port number depending on what you use.My is on port 8080, you might have to remove that to just 127.0.0.1

5. Then open error.php  .. The 90th line <input id="submit" there change the onclick to your localhost. My is on port 8080, you might have to remove that to just 127.0.0.1

6. Now you are set to view the application on your localhost. open localhost/ghissu/book on your browser and use the application.





Description:-

1) Taken care of sql injection by using php data objects.
2) Used my own xss_encode() function given in the xss_encode.php file. Did not use the built in htmlspecialchars() function since it does not support all of OWASP security rules.
3) Designing done manually and twitter bootstrap has been used for designing the tables.