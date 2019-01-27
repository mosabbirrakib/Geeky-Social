<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;
use App\Service;
use App\Contact;

class DashboardController extends Controller
{
    public function index(){
    	$sliderCount = Slider::count();
    	$serviceCount = Service::count();
    	$contactCount = Contact::count();
    	return view('admin.dashboard',compact('sliderCount','serviceCount','contactCount'));
    }
}
