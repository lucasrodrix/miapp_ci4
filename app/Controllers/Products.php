<?php

namespace App\Controllers;

class Products extends BaseController{
    public function index(){
        $db = \Config\Database::connect();

        $query = $db->query('select code, name, stock from products');
        $res = $query->getResult();

        $data = ['title' => 'Products Catalog','products' => $res];
        return view('products/index', $data);
    }

    public function show($id){
        $data = [
            'title' => 'Products Catalog',
            'id' => $id
        ];
        return view('products/show', $data);
    }

    public function cat($category, $id){
        return "<h2>Category: $category <br> Product: $id</h2>";
    }
}