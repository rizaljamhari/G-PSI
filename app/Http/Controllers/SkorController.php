<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkorController extends Controller
{
    public function index()
    {
    	return \View::make('index')
    	->nest('content', 'skor.index', array())
    	->nest('headerscript', 'headerscript')
    	->nest('footerscript', 'footerscript');
    }
}
