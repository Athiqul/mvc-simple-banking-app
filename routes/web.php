<?php 
use App\core\Route;
use App\Controllers\Auth;
use App\Controllers\admin\Dashboard;
use App\Controllers\customers\Dashboard as CustomersDash;
$route=new Route();

// Define your routes here
$route->get('/',\App\Controllers\Home::class,'index');

$route->get('/login', Auth::class,'login');
$route->post('/login-user', Auth::class,'checkLogin');
$route->get('/register',Auth::class,'register');
$route->post('/register', Auth::class,'storeUser');
//Logout 
$route->get('/logout',Auth::class,'logout');
    $route->get('/customers-dashboard',CustomersDash::class,'index');


    $route->get('/admin-dashboard',Dashboard::class,'index');



$route->route();

?>