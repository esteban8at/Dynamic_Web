<?php 

	$opcion = $_POST['opcion_capturada'];
	$ciudad = $_POST['ciudad_capturada'];
	
	$arreglo_mensajes=array("Buenos Dias","Buenas Tardes","Buenas Noches","Good Morning","Good Afterenoon","Good Evening");

    echo $arreglo_mensajes[ ($opcion)-1  ] . " en "  . $ciudad;
	
	//comantario 1
	
	/*
	  comentario largo
	*/

?>