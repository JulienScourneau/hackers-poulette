<?php

namespace App\Core;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class render
{
    public function __construct($page, $data = [])
    {
        $templatesFile = $page. '.html.twig';
        $loader = new FilesystemLoader(__ROOT__.'/Resources/views');

        $twig = new Environment($loader);

        echo $twig->render($templatesFile, $data);
    }
}