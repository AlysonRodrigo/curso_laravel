<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Product;

use CodeCommerce\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    private $productModel;

    public function __construct(Product $product){
        $this->productModel = $product;
    }

    public function index(){
        $products = $this->productModel->all();
        return view('products.index',compact('products'));
    }

    public function create(){
        return view('products.create');
    }

    public function store(ProductRequest $request){
        $input = $request->all();
        $product = $this->productModel->fill($input);
        $product->save();

        return redirect()->route('admin.products.index');
    }

    public function edit($id){
        $product = $this->productModel->find($id);
        return view('products.edit',compact('product'));
    }

    public function update(ProductRequest $request, $id){
        $this->productModel->find($id)->update($request->all());

        return redirect()->route('admin.products.index');
    }

    public function destroy($id){
        $this->productModel->find($id)->delete();

        return redirect()->route('admin.products.index');
    }
}
