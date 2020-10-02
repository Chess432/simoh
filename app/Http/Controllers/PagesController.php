<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function cash_flow()
    {
        return view('pages.cashflow');
    }
    public function profitability()
    {
        return view('pages.profitability');
    }
}
