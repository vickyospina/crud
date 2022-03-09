<?php

if(!empty($_POST)){
	if(isset($_POST["name"]) &&isset($_POST["lastname"])){
		if($_POST["name"]!=""&& $_POST["lastname"]!=""){
			include "conexion.php";
			
			$sql = "update user set name=\"$_POST[name]\",lastname=\"$_POST[lastname]\" where id=".$_POST["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				print "<script>alert(\"Error! Verifica los datos.\");window.location='../ver.php';</script>";

			}
		}
	}
}



?>