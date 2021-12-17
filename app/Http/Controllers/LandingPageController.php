<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Blog;
use App\Brand;
use App\Category;
use App\Flashdeal;
use App\Flashsell;
use App\Product;
use App\ProductImage;
use App\Services\SettingsService;
use App\Settings;
use App\Slider;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front-end.home');
    }

    public function djs()
    {
        return view("front-end.djs");
    }
    public function schedule()
    {
        return view("front-end.schedule");
    }
    public function blog()
    {
        return view("front-end.blog");
    }
    public function gallery()
    {
        return view("front-end.gallery");
    }
    public function faq()
    {
        return view("front-end.faq");
    }
    public function contact()
    {
        return view("front-end.contact");
    }
    public function blogDetails()
    {
        return view("front-end.blog-details");
    }

}
