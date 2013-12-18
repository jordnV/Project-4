<?php

   $db = new PDO("mysql:dbname=chepomail; host=127.3.11.1","jeremydane");
    
    $searches= $db->query("SELECT * FROM users WHERE username LIKE '%$user%';");
    $results=$searches->fetchAll(PDO::FETCH_ASSOC);
    //echo($results);
    
    
?>
