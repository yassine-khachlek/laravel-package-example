<?php

namespace Yk\LaravelPackageExample\App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Intervention\Image\ImageManager;

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
        //$manager = new ImageManager(array('driver' => 'imagick'));

        $manager = new ImageManager(array('driver' => 'gd'));

        $image = $manager->make(__DIR__.'/../../../storage/app/public/box-1730159_640.png')->resize(300, 200);

        return view('Yk\LaravelPackageExample::home', [
            'configuration' => \Config::get('packages.Yk.LaravelPackageExample'),
            'configuration_published' => \Config::get('vendor.yk.laravel-package-example'),
            'image' => $image
        ]);
    }
}
