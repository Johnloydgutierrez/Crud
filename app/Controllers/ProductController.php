<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;
use App\Models\CategoryModel;

class ProductController extends BaseController
{
    private $product;
    private $category; 

    public function __construct()
    {
        $this->product = new ProductModel();
        $this->category = new CategoryModel();
    }

    public function index()
    {
        return redirect()->to('/product');
    }

    public function viewAll()
    {
        $data['products'] = $this->product->findAll();
        return view('products', $data);
    }

    public function addForm()
    {
        $data['categories'] = $this->category->findAll();
        return view('add_product', $data);
    }

    public function add()
    {
        $data = [
            'ProductName' => $this->request->getVar('ProductName'),
            'ProductDescription' => $this->request->getVar('ProductDescription'),
            'ProductCategory' => $this->request->getVar('ProductCategory'),
            'ProductQuantity' => $this->request->getVar('ProductQuantity'),
            'ProductPrice' => $this->request->getVar('ProductPrice'),
        ];

        $this->product->insert($data);
        return redirect()->to('/product');
    }

    public function editForm($id)
    {
        $data['product'] = $this->product->find($id);
        $data['categories'] = $this->category->findAll();
        return view('edit_product', $data); 
    }

    public function edit($id)
    {
        $data = [
            'ProductName' => $this->request->getVar('ProductName'),
            'ProductDescription' => $this->request->getVar('ProductDescription'),
            'ProductCategory' => $this->request->getVar('ProductCategory'),
            'ProductQuantity' => $this->request->getVar('ProductQuantity'),
            'ProductPrice' => $this->request->getVar('ProductPrice'),
        ];
    
        $this->product->update($id, $data);
        return redirect()->to('/product');
    }
    

    public function delete($id)
    {
        $this->product->where('id', $id)->delete();      
        return redirect()->to('/product'); 

    }
}
