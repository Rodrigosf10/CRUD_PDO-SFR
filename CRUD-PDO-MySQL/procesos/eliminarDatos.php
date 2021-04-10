<?php  
	require_once "../crud/crud.php";
	$id=$_POST['id'];
	$objeto = new Crud();
	echo $objeto->eliminarDatos($id);
	//echo Crud::eliminarDatos($id);
?>