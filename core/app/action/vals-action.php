<?php

if(isset($_GET["opt"]) && $_GET["opt"]=="add"){
	$p =  new ValData();
	$p->v = $_POST["v"];
	$p->k = $_POST["k"];
	$p->o = $_POST["o"];
	$p->add();
	header("Location: ./");
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="upd"){
	$p =  new ValData();
	$p->id = $_POST["id"];
	$p->v = $_POST["v"];
	$p->k = $_POST["k"];
	$p->o = $_POST["o"];
	$p->update();
	header("Location: ./");
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="del"){
	$person = ValData::getById($_GET["id"]);
	$person->del();
	header("Location: ./");
}

?>