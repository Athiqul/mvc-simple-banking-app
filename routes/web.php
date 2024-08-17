<?php 
use App\core\Route;

$route=new Route();

// Define your routes here
$route->get('/',\App\Controllers\Home::class,'index');
$route->route();

?>