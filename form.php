<?php

print "<link rel='stylesheet' href='form.css'>";
echo "<link rel='stylesheet' href='form.css'>";

if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['password'])&& isset($_POST['username'])) 
{
	
	if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['password'])&& !empty($_POST['username'])) 
	{
		
		if (strlen($_POST['username'])!="") && strlen($_POST['password'])===8)
		{
		
			// gets data from form
			
			$Firstname=$_POST['firstname'];
			$Lastname=$_POST['lastname'];
			$Password=$_POST['password'];
			$Username=$_POST['username'];
			

			$db = new PDO("mysql:dbname=chepomail; host=127.3.165.1","jeremydane");
    
    
            $res= $db->query("INSERT INTO Courses (first_name,last_name, password, username) VALUES ('$Firstname', $Lastname, '$Password, '$Username')");
			// inserts data from form
		}			
	}
	else
	{
		// if a field is empty this is outputted
		echo("Empty field; no entry added");
	}
}

?>
