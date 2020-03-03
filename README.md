# Cego sudent programmer job interview assignment
The solution is made in PHP with Xammp using Apache and MySQL modules.

With Xammp the file can be placed in C:\\xampp\\htdocs, when the file is placed and Apache and MySQL is running, go to: http://localhost/dataBaseTpFile.php
For setting up the MySQL database go to: http://localhost/phpmyadmin/ , and setup a database and make sure to setup and account with access to the database. Then create the table with the data from sqldump.sql.

When the file is then run it takes the data from the database and writes it to a file. Next it checks if the entry from the database is what is written to the file is the same and of that is true it deletes the entry from the database.
