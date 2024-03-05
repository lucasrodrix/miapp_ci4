<?php

namespace App\Controllers;

class Products extends BaseController{
    public function index(){
        echo "<h1>Controler Products</h1>";
        print_r($this->session);
    }

    public function show(){
        return "<h2>Products Details</h2>";
    }
}