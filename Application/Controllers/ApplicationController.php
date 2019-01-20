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
//        $router->get('/' , "HomeController@indexAction");
//        $router->get('/home' , "HomeController@indexAction");
//        $router->set404("HomeController@error404Action");

        $publicRoutes = include '../Application/Routes/PublicRoutes.php';
        $adminRoutes = include '../Application/Routes/AdminRoutes.php';

        //echo var_dump($publicRoutes);


        foreach ($publicRoutes as $method => $routes) {

            foreach ( $routes as $path => $action ){

                $router->$method( $path , $action );

            }//foreach

        }//

        foreach ($adminRoutes as $method => $routes) {

            foreach ( $routes as $path => $action ){

                $router->before( 'GET|POST' , $path, function (  ){

                    if (!isset($_SESSION['user'])) {
                        header('location: home');
                        exit();
                    }

                });

                $router->$method( $path , $action );

            }//foreach

        }//


        $router->run();

    }//Start

}//ApplicationController