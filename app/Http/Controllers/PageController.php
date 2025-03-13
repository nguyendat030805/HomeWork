<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
        $slide = Slide::all();
        $newproducts = Product::where('new',1)->paginate(4);
        $promotion_product = Product::where('promotion_price', '<>',0)->paginate(8);
        return view('page.trangchu', compact('slide','newproducts', 'promotion_product'));
    }
    public function getType($type){
        $loai_sp = Product::where('id_type', $type)->get();
        $type_product = ProductType::all();
        $sp_khac = Product::where('id_type', '<>', $type)->paginate(3);
        return view('page.type', compact('loai_sp', 'type_product', 'sp_khac'));

    }
}
