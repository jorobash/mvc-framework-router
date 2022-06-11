<?php

namespace App\Controllers\Admin;

use Core\Controller;

class User extends Controller
{
    public function indexAction()
    {
        echo "Hello from class" .__CLASS__. " method ". __METHOD__;
    }
}
