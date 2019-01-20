<?php
/**
 * Created by PhpStorm.
 * User: Alexey
 * Date: 20.01.2019
 * Time: 14:06
 */

namespace Application\Controllers;


class HomeController extends BaseController {

    public function indexAction(  ){


        $template = $this->twig->load('home/home.twig');
        echo $template->render([
            'fruits' => [
                'apple',
                'orange',
                'cherry'
            ]
        ]);

    }//indexAction

    public function error404Action(  ){

        $template = $this->twig->load('404.twig');
        echo $template->render();

    }
    
}//HomeController