<?php

namespace Yk\LaravelPackageExample\App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Yk\LaravelPackageExample::home', [
            'configuration' => \Config::get('packages.Yk.LaravelPackageExample'),
            'configuration_published' => \Config::get('vendor.yk.laravel-package-example')
        ]);
    }
}
