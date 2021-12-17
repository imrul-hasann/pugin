<?php

namespace App\Http\Controllers\Admin;

use App\Customer;
use App\Http\Controllers\Controller;
use App\Music;
use App\Order;
use App\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $musics = Music::all();
//        dd($musics);/
        $data = [
          'title' => 'Dashboard',
        ];
        return view('admin.dashboard.index',$data);
    }
}
