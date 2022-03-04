<?php
include('conection.php');

	$conexion = conectame();
	
			$valor_1= $_POST['nombre_name'];
			$valor_2= $_POST['apellido_name'];
			$valor_3= $_POST['edad_name'];
			$valor_4= $_POST['posicion_name'];
			$valor_5= $_POST['dni_name'];
			$valor_6= $_POST['cod_post_name'];
			$valor_7= $_POST['provincia_name'];
			$valor_8= $_POST['localidad_name'];
			$valor_9= $_POST['telefono_name'];
			$valor_10= $_POST['email_name'];
			$valor_11= $_POST['club_asoc_name'];
			$valor_12= $_POST['nacionalidad_name'];
			$valor_13= $_POST['fecha_nacimiento_name'];
			
			
			

			mysqli_query($conexion, "INSERT INTO `postulantes`(`nombre`, `apellido`, `edad`, `posicion`, `dni`, `cod_post`, `provincia`, `localidad`, `telefono`, `mail`, `club_post`, `nacionalidad`, `fecha_nacimiento`) VALUES ('".$valor_1."','".$valor_2."','".$valor_3."','".$valor_4."','".$valor_5."','".$valor_6."','".$valor_7."','".$valor_8."','".$valor_9."','".$valor_10."','".$valor_11."','".$valor_12."','".$valor_13."')");
			
		
		
	