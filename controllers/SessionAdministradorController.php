<?php 
	include("../models/mdb.php");

	if (isset($_SESSION['rol']) && $_SESSION['rol']==2) {
		
	}else{
		echo "<script>alert('Usted no esta autorizado!!!')</script>";
		echo "<script>location.href='../views/login.php'</script>";
	}
?>