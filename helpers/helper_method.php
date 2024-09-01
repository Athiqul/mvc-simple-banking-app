<?php 

//For display data and die 

use App\core\RedirectHelper;

function dd($data):void
{
    echo '<pre>';
    die(print_r($data, true));
    echo '</pre>';
}

function view(string $view,array $data=[]):void
{
    $viewPath =__DIR__. "/../views/{$view}.php";
    //dd($viewPath);
    if (file_exists($viewPath)) {
        extract($data);
       require_once $viewPath;
       return;
    } else {
        dd("View not found: {$viewPath}");
    }
}

//redirect 

function redirect(){
    return new RedirectHelper();
}



?>