<?php

namespace App\Controllers;

use App\Models\ProductsModel;

class Products extends BaseController{
    private $productModel;

    public function __construct(){
        $this->productModel = new ProductsModel();
    }
    public function index(){
        $productModel = new ProductsModel();
        $res = $productModel->findAll();

        $data = ['title' => 'Products Catalog','products' => $res];
        return view('products/index', $data);
    }

    public function show($id){
        $productModel = new ProductsModel();
        $product = $productModel->find($id);
        $data = [
            'title' => 'Products Catalog',
            'product' => $product
        ];
        return view('products/show', $data);
    }

    public function transaction(){
        $data = [
            'status' => '0',
        ];

        echo $this->productModel->delete(4);
        // echo $this->productModel->getInsertID();
    }

    public function cat($category, $id){
        return "<h2>Category: $category <br> Product: $id</h2>";
    }
}