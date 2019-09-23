<?php session_start();
if (isset( $_SESSION['contador'] ) ) {
	$_SESSION['contador']++;
	echo "es la visita". $_SESSION['contador'];
	}
else 
	{
    echo "es la visita 1";	
	$_SESSION['contador']=1;	}
?> 
