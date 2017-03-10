<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
    	return \View::make('index')
    	->nest('content', 'home', array())
    	->nest('headerscript', 'headerscript')
    	->nest('footerscript', 'footerscript');
    }
}
