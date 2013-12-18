<?php
    //echo "<a href=https://info2180_project_4-c9-jeremydane.c9.io/HomeScreen.html></a>";
?>

    <!DOCTYPE html>
    <html>

	<head>
		<title>Chepo Mail Home Screen</title>
		
		<link href="chepomail.css" type="text/css" rel="stylesheet" />
		<script src="HomeScreen.js" type="text/javascript"></script>
		<script src="//ajax.googleapis.com/ajax/libs/prototype/1.7.1.0/prototype.js"></script>
	</head>
	
	<body>
		<h1>Chepo Mail</h1>
		
		<h2>H O M E    S C R E E N</h2>
		<div id="compose">
		    Compose 
		</div>
		<div id="otherUsers">
		    Other Users
		</div>
		<div class="ten">
		    Display 10 most recent messages.
		</div>
		<div class="ten">
		    Display 10 most recent messages.
		</div>
		<div class="ten">
		    Display 10 most recent messages.
		</div>
		<div class="ten">
		    Display 10 most recent messages.
		</div>
		<div class="ten">
		    Display 10 most recent messages.
		</div>
		<div class="ten">
		    Display 10 most recent messages.
		</div>
		<div class="ten">
		    Display 10 most recent messages.
		</div>
		<div class="ten">
		    Display 10 most recent messages.
		</div>
		<div class="ten">
		    Display 10 most recent messages.
		</div>
		<div class="ten">
		    Display 10 most recent messages.
		</div>
		
		<button id=logout>L O G O U T</button>
		<div id="cookie">
<?php
        require("session.php");
        echo ('COOKIE ID: '.$_COOKIE['PHPSESSID']);
        //echo ('COOKIE user: '.$_COOKIE['username']);
?>
        </div>
	</body>
    </html>
