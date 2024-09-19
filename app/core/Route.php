<?php 
namespace App\core;

class Route{

    //Store All routes
    private $route=[];

    //Add a route
    public function add($uri, $controller,$action, $method){
        $this->route[] = ['controller' => $controller,'action'=>$action,'method' => $method,'uri'=>$uri];
    }

    //Store get method  routes
    public function get($uri, $controller, $action):void
    {
          $this->add($uri, $controller, $action, 'GET');
    }


    //Store post method routes

    public function post($uri, $controller, $action):void
    {
        $this->add($uri, $controller, $action, 'POST');
    }

    public function delete($uri, $controller, $action):void
    {
        $this->add($uri, $controller, $action, 'DELETE');
    }

    public function put($uri, $controller, $action):void
    {
        $this->add($uri, $controller, $action, 'PUT');
    }

    public function patch($uri,$controller,$action):void
    {
       $this->add($uri,$controller,$action,'PATCH');    
    }

    public function route()
    {
        //get the requested uri
        $uri = explode('?',$_SERVER['REQUEST_URI']);
        $method=$_SERVER['REQUEST_METHOD'];

        if($method == 'POST' || isset($_POST['_method']))
        {
            $method = $_POST['_method']??'POST';
        }

       //  dd($method);
        //check uri and method is valid or not

        foreach($this->route as $route){
            if($route['uri']==$uri[0] && $route['method']==strtoupper($method)){
                $controller=new $route['controller'];
                $controller->{$route['action']}();
                return;
            }
        }
        
        //if no route found
        $this->abort('No route found');
       

    }

    public function abort(string $message, int $code=404)
    {
        http_response_code($code);
        //require_once __DIR__.'/../../views/errors/__404.php';
        return view('errors/__404',['message'=>$message]);
        exit;
    }
}

?>