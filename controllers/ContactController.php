<?php
namespace app\controllers;

use app\core\Application;

class ContactController {
    public  function index()
    {
        return  Application::$app->router->renderView('contact');
    }
}