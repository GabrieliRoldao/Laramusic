<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class DashboardController extends Controller
{
    public function index()
    {
        return view('painel.index');
    }


}