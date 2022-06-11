<?php

namespace Core;

class View
{
    public static function render($view,$params = [])
    {

        extract($params,EXTR_SKIP);

        $file = "../App/Views/$view";

        if(is_readable($file)){
            require $file;
        }else{
            echo "$file not found";
        }
    }
}
