<?php
namespace app;
class Router {
    static public function init(){
	$path = $_SERVER['REQUEST_URI'];
	$url__components = explode('/', $path);
	array_shift($url__components);
	$controller_name = strtolower($url__components[0]);
	$action = strtolower($url__components[1]);
	$controller_class = "\controllers\\".ucfirst($controller_name);
	if(!class_exists($controller_class)){
	    self::pageNotFound();
	}
	$controller = new $controller_class();
	if(!method_exists($controller, $action)){
	    self::pageNotFound();
	}
	$controller->$action();
    }
    
    static public function pageNotFound(){
	exit('lol 404');//TODO 404 header
    }
}
