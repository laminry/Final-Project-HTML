<!-- <?php

$bookingsid = $_POST['inputcode'];
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = 'enter';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   $bookingid = $_POST['inputcode'];

   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }

   $sql = 'SELECT name, email, 
               FROM guest
               WHERE id = "$bookingid"';

   mysql_select_db('final');
   $retval = mysql_query( $sql, $conn );

   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }

   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo "ID :{$row['final']}  <br> ".
      "Name: {$row['name']} <br> ".
      "Email: {$row['email']} <br> ".
      "Passport : {$row['passid']} <br> ".
      "--------------------------------<br>";
   } 

   echo "Fetched data successfully\n";
   mysql_close($conn);
?>