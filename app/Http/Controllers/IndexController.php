<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $data['portfolios'] = Portfolio::all();
        return view('index',$data);
    }

    public function portfolioDetails($id)
    {
        $data['portfolio'] = Portfolio::findOrFail($id);
        return view('portfolio_details',$data);
    }
}
