<?php
class Router {
    protected $routes = [];
    public function get($uri,$controller){
       $this->routes[] = [
        'uri'=>$uri,
        'controller'=>$controller,
        'method' => 'GET'
       ];
    }
    public function post(){

    }
    public function delete(){

    }
    public function patch(){

    }

    public function put(){

    }
}
// function routeToController($uri, $routes)
// {
//     if (array_key_exists($uri, $routes)) {
//         require $routes[$uri];
//     } else {
//         abort();
//     }
// }

// function abort($code = 404)
// {

//     http_response_code($code);

//     require "views/{$code}.php";

//     die();
// }

// $routes = require('routes.php');
// $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// routeToController($uri, $routes);
