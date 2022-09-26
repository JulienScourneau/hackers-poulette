<?php

namespace App\Core;


class Controller
{

    public function view($view, $data = [])
    {
        new Render($view, $data);
    }

}