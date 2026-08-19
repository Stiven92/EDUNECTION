<?php 

session_start();

if (isset($_SESSION['id_rol']) && $_SESSION['id_rol'] == 5) {
   
} else {

    echo "<script>alert('Usted no esta autorizado!!!')</script>";
    echo "<script>location.href='../../views/login.php'</script>";
    exit();

}

?>