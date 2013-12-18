<?php    
    session_start();
    if (isset($_SESSION["loggedin"])) 
    {  
        $loggedin = $_SESSION["loggedin"];
        print("This is:  $loggedin.\n");
    } 
    else 
    {
        $_SESSION["loggedin"] = "LOGIN";  # default
    }
   
?>    
