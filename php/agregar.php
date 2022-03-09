<?php

if(!empty($_POST)){
	if(isset($_POST["name"]) &&isset($_POST["lastname"])){
		if($_POST["name"]!=""&& $_POST["lastname"]!=""){
			include "conexion.php";
			
			$sql = "insert into user(name,lastname,created_at) value (\"$_POST[name]\",\"$_POST[lastname]\",NOW())";
			$query = $con->query($sql);
			if($query!=null){
			}else{

			}
		}
	}
}



?>