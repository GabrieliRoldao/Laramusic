<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class SiteController extends Controller
{
    public function index () {
        return view('site.index');
    }
}
