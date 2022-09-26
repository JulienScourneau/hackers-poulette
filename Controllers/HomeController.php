<?php

namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller
{
    /*
    * return view
    */
    public function index()
    {
        $data = [
            "name" => "Hackers"
        ];
        return $this->view('home', $data);
    }

}