<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
        $slide = Slide::all();
        $newproducts = Product::where('new',1)->paginate(4);
        $promotion_product = Product::where('promotion_price', '<>',0)->paginate(8);
        return view('page.trangchu', compact('slide','newproducts', 'promotion_product'));
    }
}
