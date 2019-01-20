<?php
/**
 * Created by PhpStorm.
 * User: Alexey
 * Date: 20.01.2019
 * Time: 14:15
 */

namespace Application\Controllers;

class BaseController{

    protected $loader;
    protected $twig;

    public function __construct(){

        $this->loader = new \Twig_Loader_Filesystem('../Application/Views');
        $this->twig = new \Twig_Environment($this->loader);

    }


}