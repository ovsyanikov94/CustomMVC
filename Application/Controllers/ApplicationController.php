<?php
/**
 * Created by PhpStorm.
 * User: Alexey
 * Date: 20.01.2019
 * Time: 13:41
 */

namespace Application\Controllers;

use Bramus\Router\Router;

class ApplicationController{


    public function Start(){

        $router = new Router();

        $router->setNamespace('Application\\Controllers');
        $router->get('/' , "HomeController@indexAction");
        $router->get('/home' , "HomeController@indexAction");
        $router->set404("HomeController@error404Action");

        $router->run();

    }//Start

}//ApplicationController