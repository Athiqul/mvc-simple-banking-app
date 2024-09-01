<?php 
use App\core\Route;
use App\Controllers\Auth;
$route=new Route();

// Define your routes here
$route->get('/',\App\Controllers\Home::class,'index');

$route->get('/login', Auth::class,'login');
$route->post('/login', Auth::class,'checkLogin');
$route->route();

?>