 <?php
  // Open connection
 define('DB_SERVER', 'localhost');
 define('DB_USERNAME', 'admin');
 define('DB_PASSWORD', 'admin');
 define('DB_DATABASE', 'interview');
 $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
 if ($db -> connect_error) {
   die("Connection failed:". $db -> connect_error);
 }
 //Selecting entries from sql database
   $sql = "SELECT id, firstName, lastName, email FROM users";
   $result = mysqli_query($db,$sql);
   if ($result -> num_rows > 0) {
     $file = "newfile.txt";
     $txt_file = fopen("newfile.txt", "r");
     while ($row = $result -> fetch_assoc()) {
       $index=strval($row['id']);
       $entry = $row["id"]. "," .$row["firstName"]. "," .$row["lastName"]."," .$row["email"]. "\n";
       file_put_contents($file, $entry, FILE_APPEND);
        if ($entry == fgets($txt_file)) {
          $sqlDel = "DELETE FROM users WHERE id ='".$index."'";
          if ($db->query($sqlDel) === TRUE) {
            // What happens when it does not find one
          } else {
            echo "Error deleting record: " . $db->error. "<br>";
          }
        }
      }
     fclose($txt_file);
     echo "Database moved to file";
   }
   else {
     echo "No entries in database";
   }
 mysqli_close($db);
 ?>
