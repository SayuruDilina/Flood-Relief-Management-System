<?php
    $db_server="localhost";
    $db_user="root";
    $db_pass="";
    $db_name="flood_relief_system";
    $port="4306";
    try{
        $conn=mysqli_connect($db_server,$db_user,$db_pass,$db_name,$port);
        
    }catch(myqli_sql_exception ){
      
    }
  
    
?>