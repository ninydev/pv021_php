<?php

namespace App\Controllers;

use App\Views\Render;

class HomeController
{
    /**
     * Построить главную страницу сайта
     */
    public function index(){
        Render::view('home', []);
        //echo "Work";
    }

}