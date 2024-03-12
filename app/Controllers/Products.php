<?php

namespace App\Controllers;

class Products extends BaseController{
    public function index(){
        echo "<h1>Controler Products</h1>";
        print_r($this->session);
    }

    public function show($id){
        return "<h2>Products Details $id </h2>";
    }

    public function cat($category, $id){
        return "<h2>Category: $category <br> Product: $id</h2>";
    }
}