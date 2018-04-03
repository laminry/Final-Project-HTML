<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = 'enter';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);

   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }

   $sql = 'SELECT name, email, passid, roomtype, checkin, checkout, noadults, nokids, additional FROM guest WHERE id = " "';

   mysql_select_db('TUTORIALS');
   $retval = mysql_query( $sql, $conn );

   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }

   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo "Tutorial ID :{$row['tutorial_id']}  <br> ".
      "Title: {$row['tutorial_title']} <br> ".
      "Author: {$row['tutorial_author']} <br> ".
      "Submission Date : {$row['submission_date']} <br> ".
      "--------------------------------<br>";
   } 

   echo "Fetched data successfully\n";
   mysql_close($conn);
?>