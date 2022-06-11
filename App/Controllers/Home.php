<?php
namespace App\Controllers;

use Core\Controller;
use Core\View;

class Home extends Controller
{
    public function indexAction()
    {
        View::render('Home/index.php');
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
