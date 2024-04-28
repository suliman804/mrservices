<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function register_portfolio(Request $request)
    {
        return view('portfolio.registration');
    }
}
