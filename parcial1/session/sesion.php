<?php
	if($_POST['user']=="Nocts" && $_POST['pass']=="1234"){
		session_start();
		$_SESSION["usuario"] = "Nocts";
		$_SESSION["nombre"] = "Hernan Sesai Lopez Aragon";
		$_SESSION["grupo"] = "712";
		header("Location: index.php");
	}else{

		header("Location: error.php");
	}
?>

