<?php 
session_start();

if (isset($_SESSION['rol']) && $_SESSION['rol'] == 1) {
    
} else {
    echo "<script>alert('Usted no esta autorizado!!!')</script>";
    echo "<script>location.href='../views/login.php'</script>";
    exit();
}
?>