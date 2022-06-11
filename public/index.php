<?php


/**
 * Routing
 */
use Core\Router;

spl_autoload_register(function($className){
   $root = dirname(__DIR__); //get the parent directory
   $file = $root .'/'.str_replace('\\', '/',$className).'.php';
   if(is_readable($file)){
       require $file;
   }
});

$router = new Router();

// Add the routes
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('posts', ['controller' => 'Posts', 'action' => 'index']);
$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');
$router->add('{controller}/{action}/{id:\d+}');
$router->add('{controller}/{action}/{name:\w+}');
$router->add('admin/{controller}/{action}', ['namespace' => 'Admin']);

// Match the requested route
$url = $_SERVER['QUERY_STRING'];

try{
    $router->dispatch($url);
}catch(Exception $e){
    echo $e->getMessage();
}

