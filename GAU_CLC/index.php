<?php
	session_start();
	if(isset($_SESSION['name']) && $_SESSION['level'] == 2)
		{				
			echo '<meta http-equiv="refresh" content="0; url=Code_user.php">';
		}
	else if(isset($_SESSION['name']) && $_SESSION['level'] == 1)
		{			
			echo '<meta http-equiv="refresh" content="0; url=Code_admin.php">';
		}
	else 
		{
			echo '<meta http-equiv="refresh" content="0; url=Code.php">';
		}
?>