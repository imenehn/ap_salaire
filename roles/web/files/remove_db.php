<?php
   require 'bddconf.php';
   
   $sql = 'DROP Database test_db';
   $retval = mysql_query( $sql, $conn );
   
   echo  "Database test removed successfully";

   if(! $retval ) {
      die('Could not create database: ' . mysql_error());
   

   }
   mysql_close($conn);
?>
