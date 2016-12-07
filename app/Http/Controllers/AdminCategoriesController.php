<?php
/**
 * Created by PhpStorm.
 * User: alyson
 * Date: 07/12/16
 * Time: 12:13
 */

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;
use Illuminate\Routing\Controller;


class AdminCategoriesController extends Controller
{

    protected $categories;

    public function __construct(Category $cat)
    {
        $this->categories = $cat;
    }

    public function index(){

        $categs = $this->categories->all();

        return view('categories',compact('categs'));
    }
}