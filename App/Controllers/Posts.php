<?php

namespace App\Controllers;

use Core\Controller;

/**
 * Posts controller
 *
 * PHP version 5.4
 */
class Posts extends Controller
{

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        echo 'Hello from the index action in the Posts controller!';
        echo '<p>Query string parameters: <pre>' .
            htmlspecialchars(print_r($_GET, true)) . '</pre></p>';    }

    /**
     * Show the add new page
     *
     * @return void
     */
    public function addNewAction()
    {
        echo 'Hello from the addNew action in the Posts controller!';
    }

    public function editAction()
    {
//        var_dump($this->route_params);die;
        echo "Hello from the edit method from Post controller";
        echo "<p>Router parameters: <pre>".
        htmlspecialchars(print_r($this->route_params,true))."</pre></p>";
    }
}
