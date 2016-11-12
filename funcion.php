<?php
session_start();
function verificar_session(){
	if(!isset($_SESSION['username'])){
		unset($_SESSION);
		header("location: index.php");
	}
}
?>
