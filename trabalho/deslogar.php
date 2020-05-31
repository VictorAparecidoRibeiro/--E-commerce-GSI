<?php
        session_start();
        session_unset();
		session_destroy();
		
    
	echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=logar.php'>";
?>