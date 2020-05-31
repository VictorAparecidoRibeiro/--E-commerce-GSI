<?php 
    session_start();
    $user="";
	if (isset($_SESSION['logou']))
	{
         $user = $_SESSION['login'];
	}
	else{
		session_unset();
        session_destroy();
	}	
	
	
?>