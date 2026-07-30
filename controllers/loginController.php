<?php 

	include("../models/mdb.php");
	include("../models/mconsultas.php");

	if ($_POST) {
		$school = $_POST['school']
		$email = $_POST['email'];
		$password = $_POST['password'];
		$rol = $_POST['rol'];

		$getUser = new Consultas();

		$colegioExiste = $getUser->verificarColegioExistente($school);



		//-------editar dependiendo el html---------------- 
		// 1. Primero validas si el valor de la variable $school es un colegio del sistema
		if ($school == 10 || $school == 20 || $school == 30) {
		    
		    // Si el colegio es válido, aquí adentro pones TODO tu código actual:
		    // El switch de roles, el password_verify, las sesiones, etc.
		    $buscarUsuario = $getUser->getUserCliente($email); 
		    
		} else {
		    // Si la variable $school trae un número que no corresponde a ningún colegio
		    echo "<script>alert('Error: Este colegio no existe en nuestro sistema.');</script>";
		    echo "<script>location.href='../views/login.php';</script>";
		}












		//-------editar dependiendo el html---------------- 

		switch ($rol) {
		    case 1:
		        $buscarUsuario = $getUser->getUserUsuario($email);
		        break;

		    case 2:
		        $buscarUsuario = $getUser->getUserUsuario($email);
		        break;
		    case 3:
		       
		        $buscarUsuario = $getUser->getUserUsuario($email);
		        break;
		    case 4 :
		   		$buscarUsuario = $getUser->getUserUsuario($email);
		        break;
		    case 5:
		    	$buscarUsuario = $getUser->getUserUsuario($email);
		        break;
		    	
		    	break;

		    default:
		        // Opcional: Código que se ejecuta si el rol no es ni 1, ni 2, ni 3
		        $buscarUsuario = null; 
		        break;
		}//end of swith



		if ($buscarUsuario) {

		    // Cambiado a $passwordValida para no destruir tu variable $password original
		    $passwordValida = password_verify($password, $buscarUsuario['password']);

		    if ($passwordValida) {
		        $_SESSION['rol'] = $rol;
		        $_SESSION['id'] = $buscarUsuario['id'];

		        //-----Switch aplicado a la redirección según el rol--------
		        switch ($rol) {
		        	case 1:
		        		 echo "<script>location.href='../views/ConDashboard.php'</script>";
		                break;

		            case 2:
		                echo "<script>location.href='../views/ConDashboard.php'</script>";
		                break;

		            case 3:
		                echo "<script>location.href='../views/ConDashboard.php'</script>";
		                break;

		            case 4:
		                echo "<script>location.href='../views/ConDashboard.php'</script>";
		                break;

		            case 5:
		                echo "<script>location.href='../views/ConDashboard.php'</script>";
		                break;

		            default:
		                // El rol 1 (o cualquier otro no especificado) va al Dashboard de Cliente
		                echo "<script>location.href='../views/ClientDashboard.php'</script>";
		                break;
		        }

		    } else {
		        echo "<script>alert('Error al validar credenciales')</script>";
		        echo "<script>location.href='../views/login.php'</script>";
		    }

		} else {
		    echo "<script>alert('El usuario no existe!! ')</script>";
		    echo "<script>location.href='../views/login.php'</script>";
		}//end of if ($_buscarusuario)








		
	} // end of if($post)


 ?>