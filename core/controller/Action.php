<?php
class Action {
	public static function load($action){		
		if(!isset($_GET['action'])){
			include "core/app/action/".$action."-action.php";
		}else{
			if(Action::isValid()){
				include "core/app/action/".$_GET['action']."-action.php";				
			}else{
				Action::Error("<b>404 NOT FOUND</b> Action <b>".$_GET['action']."</b> folder  !! - <a>Help</a>");
			}



		}
	}

	public static function isValid(){
		$valid=false;
		if(file_exists($file = "core/app/action/".$_GET['action']."-action.php")){
			$valid = true;
		}
		return $valid;
	}

	public static function Error($message){
		print $message;
	}

	public function execute($action,$params){
		$fullpath =  "core/app/action/".$action."-action.php";
		if(file_exists($fullpath)){
			include $fullpath;
		}else{
			assert("wtf");
		}
	}

}

?>