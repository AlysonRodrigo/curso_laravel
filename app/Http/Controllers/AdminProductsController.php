<?php
/**
 * Created by PhpStorm.
 * User: alyson
 * Date: 07/12/16
 * Time: 12:18
 */

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Product;
use Illuminate\Routing\Controller;

class AdminProductsController extends Controller
{

    protected $products;

    public function __construct(Product $prods)
    {
        $this->products = $prods;
    }

    public function index(){

        $produtos = $this->products->all();

        return view('products',compact('produtos'));
    }

}