<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Setting;
use App\Service;
use App\User;
use Auth;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $icons=array("responsive","share","desktop","morph-play-pause");
        $sliders = Slider::all();
        $settings = Setting::first();
        $services = Service::all();
        $user = Auth::user();
        return view('frontend.index',compact('sliders','settings','services','icons','user'));
    }

    public function about(){
        $settings = Setting::first();
        $services = Service::all();
        return view('frontend.about',compact('settings','services'));
    }

    public function what_we_are(){
        $settings = Setting::first();
        $services = Service::all();
        return view('frontend.what_we_are',compact('settings','services'));
    }

    public function contact(){
        $settings = Setting::first();
        $services = Service::all();
        return view('frontend.contact',compact('settings','services'));
    }

    public function services($id){
        $settings = Setting::first();
        $service = Service::find($id);
        $services = Service::all();
        return view('frontend.services',compact('settings','services','service'));
    }
}
