<?php
namespace App\Controllers;

use Core\Controller;

class Home extends Controller
{
    public function indexAction()
    {
        echo "Hello from index action home controller";
    }

    public function before()
    {
       echo 'before ';
    }

    public function after()
    {
       echo ' after';
    }
}
