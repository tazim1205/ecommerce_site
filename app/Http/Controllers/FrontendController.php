<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\categorie;
use App\Models\sub_categorie;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.layouts.home');
    }

    public function shop()
    {
        return view('frontend.user.shop');
    }

    public function categorie_product($id)
    {
        $categories = categorie::where('id',$id)->first();
        return view('frontend.user.categorie_product',compact('id','categories'));
    }

    public function sub_categorie_product($id)
    {
        $sub_categories = sub_categorie::where('id',$id)->first();
        return view('frontend.user.sub_categorie_product',compact('id','sub_categories'));
    }

    public function flash_sale_product()
    {
        return view('frontend.user.flash_sale_product');
    }

    public function contact()
    {
        return view('frontend.user.contact');
    }

}
