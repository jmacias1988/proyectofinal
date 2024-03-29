<?php

class Form 
{
	
	public static function input($type="text",$name="",$value="",$place="",$extra="")
	{
		return "<input type=\"$type\" name=\"$name\" value=\"$value\" placeholder=\"$place\" class=\"form-control\" $extra>";
	}
	public static function input2($type="hidden",$name="",$value="",$extra="")
	{
		return "<input type=\"$type\" name=\"$name\" value=\"$value\" $extra>";
	}

	public static function submit($value="Submit",$c="default",$extra="")
	{
		return "<input type=\"submit\" value=\"$value\" class=\"btn btn-$c\" $extra>";
	}

	public static function select($name="",$data=array(),$value="",$extra="")
	{
		$select = "<select name=\"$name\" $extra class=\"form-control\">";
		$selected = "";
		foreach($data as $d){
			if($d["value"]==$value){ $selected="selected"; }else{ $selected=""; }
			$select .= "<option value=\"".$d["value"]."\" $selected>".$d["name"]."</option>";
		}
		$select.="</select>";
		return $select;
	}

}


?>