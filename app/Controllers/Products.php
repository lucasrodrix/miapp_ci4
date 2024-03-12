<?php

namespace App\Controllers;

class Products extends BaseController{
    public function index(){
        $data = ['title' => 'Products Catalog'];
        return view('products/index', $data);
        // return view('model/header', $data)
        // .view('products/index', $data)
        // .view('model/footer', ['copy' => "2024"]);
    }

    public function show($id){
        $data = [
            'title' => 'Products Catalog',
            'id' => $id
        ];
        return view('products/show', $data);
        // return view('model/header', $data)
        // .view('products/show', $data)
        // .view('model/footer', ['copy' => "2024"]);
    }

    public function cat($category, $id){
        return "<h2>Category: $category <br> Product: $id</h2>";
    }
}