<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function indexPage()
    {
        return view('dashboard.main');
    }

    public function widgetsPage()
    {
        return view('dashboard.widgets');
    }

    public function chartsPage()
    {
        return view('dashboard.charts');
    }

}
