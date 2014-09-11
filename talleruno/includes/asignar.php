<?php
 	$titulo=$_POST["nombre"];
    $descripcion=$_POST["descripcion"];
    $fechaini=$_POST["fechainicio"];
    $fechafin=$_POST["fechafin"];
 	$user=$_POST["usuario"];
    $prioridad=$_POST["prioridad"];
    include_once("connect.php");
    $asignar="INSERT INTO talleruno.tareas(`nombre`, `descripcion`, `fechainicio`, `fechafin`, `usuario`, `id`, `prioridad`) VALUES ('$titulo','$descripcion','$fechaini','$fechafin','$user','','$prioridad')";
        $comunicacion= mysqli_query($con,$asignar);
        echo "Tarea Asignada";
?>