<?php

namespace App\Controllers;

use App\Models\ProductsModel;

class Products extends BaseController{
    private $productModel;

    public function __construct(){
        $this->productModel = new ProductsModel();
    }
    public function index(){
        $db = \Config\Database::connect();

        // $condition = ['status'=> 1, 'stock >'=> 4];

        // $query = $db->table('products')
        // ->select('id, code, name, stock')
        // ->where($condition)
        // ->orderBy('name','asc')
        // ->limit(1)
        // ->get();

        $sql = $db->table('products');
        $sql->select('products.id, products.code, products.name, products.stock, store.name AS store');
        $sql->join('store','products.id_store = store.id');
        $query = $sql->get();
        $res = $query->getResultArray();
        echo $db->getLastQuery();
        
        // $productModel = new ProductsModel();
        // $res = $productModel->where('status', 1)->findAll();

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