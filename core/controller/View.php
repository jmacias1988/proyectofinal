<?php

class View {
	
	public static function load($view){
		if(!isset($_GET['view'])){
			include "core/app/view/".$view."-view.php";
		}else{


			if(View::isValid()){
				include "core/app/view/".$_GET['view']."-view.php";				
			}else{
				View::Error("<b>404 NOT FOUND</b> View <b>".$_GET['view']."</b> folder !! - <a></a>");
			}

		}
	}
	public static function isValid(){
		$valid=false;
		if(isset($_GET["view"])){
			if(file_exists($file = "core/app/view/".$_GET['view']."-view.php")){
				$valid = true;
			}
		}
		return $valid;
	}
	public static function Error($message){
		print $message;
	}
}

?>