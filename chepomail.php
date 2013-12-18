<?php
    echo "<link rel='stylesheet' href='form.css'>";
    
    $user = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    //$firstname = $_REQUEST['firstname'];
    //$lastname = $_REQUEST['lasttname'];
    
#using cookies    
    require("session.php");
    $variable = $_COOKIE["name"];
    echo ('COOKIE ID: '.$_COOKIE['PHPSESSID']);
    $_COOKIE['username']=$user;
    //print("All cookies received:\n");
    //print_r($_COOKIE);
    
# connect to course list on local server
    require("query.php");
    if ($results==="" || $results=="null")
    {
        echo("User not in database");
    }
    
#admin can add users
    else 
    {
        echo '<table>
                    <tr>
    					<th>id</th><th>firstname</th><th>password</th><th>username</th>
    				</tr>';
                foreach ($results as $result)
                {
                    //if ($result['password']==$password)
                    //{
             # do something with $row; 		
                	echo' <tr>
                	      <td>'.$result['id'].'</td>
        				  <td>'.$result['firstname'].'</td>
        				  <td>'.$result['lastname'].'</td>
        				  <td>'.$result['password'].'</td>
        				  <td>'.$result['username'].'</td>
        				  </tr>';
                    //}
        		} 
                echo '</table>';
        foreach ($results as $result) 
        {
             
            if ($result=="admin")
            {
            
?>		<h2> New user Form</h2>
        <form method="post" action="form.php"> 
		    <fieldset> 
		    firstname:<input type="text" name="firstname" id="firstname"/><br/>
		    lastname: <input type="text" name="lastname" id="lastname"/><br/>
		    password: <input type="text" name="password" id="password"/><br/>
		    username: <input type="text" name="username" id="username"/><br/>
	    	<!-- <button  name:"data" type:"button" onclick:"return validate()">SUBMIT</button>  -->
		    <input type="submit" value="Submit"/>
	    	</fieldset>
	    </form>
		    
<?php
            
            }
           
        }
        
    }
    echo "<a href=https://info2180_project_4-c9-jeremydane.c9.io/HomeScreen.html></a>";
?>



