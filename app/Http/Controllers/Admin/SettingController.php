<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Setting;
use Carbon\Carbon;
use Brian2694\Toastr\Facades\Toastr;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Setting::all();
        return view('admin.setting.index',compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.setting.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'about' => 'required',
            'what_we_are' => 'required',
            'about_pic' => 'required|mimes:jpeg,jpg,bmp,png',
            'what_we_are_pic' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);
        //About Picture
        $about_pic = $request->file('about_pic');
        if (isset($about_pic)) {
            $currentDate = Carbon::now()->toDateString();
            $about_picname = $currentDate .'-'.uniqid().'.'.$about_pic->getClientOriginalExtension();
            if (!file_exists('uploads/about')) {
                mkdir('uploads/about', 0777, true);
            }
            $about_pic->move('uploads/about', $about_picname);
        }else{
            $about_picname = 'default.png';
        }
        //What We Are Picture
        $what_we_are_pic = $request->file('what_we_are_pic');
        if (isset($what_we_are_pic)) {
            $currentDate = Carbon::now()->toDateString();
            $what_we_are_picname = $currentDate .'-'.uniqid().'.'.$what_we_are_pic->getClientOriginalExtension();
            if (!file_exists('uploads/what_we_are')) {
                mkdir('uploads/what_we_are', 0777, true);
            }
            $what_we_are_pic->move('uploads/what_we_are', $what_we_are_picname);
        }else{
            $what_we_are_picname = 'default.png';
        }

        $setting = new Setting();
        $setting->email = $request->email;
        $setting->phone = $request->phone;
        $setting->address = $request->address;
        $setting->about = $request->about;
        $setting->what_we_are = $request->what_we_are;
        $setting->about_pic = $about_picname;
        $setting->what_we_are_pic = $what_we_are_picname;
        $setting->save();
        Toastr::success('Setting Added Successfully','Success',["positionClass" => "toast-top-right"]);
        return  redirect()->route('setting.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $setting = Setting::find($id);
        return view('admin.setting.show', compact('setting'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $setting = Setting::find($id);
        return view('admin.setting.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'about' => 'required',
            'what_we_are' => 'required',
            'about_pic' => 'mimes:jpeg,jpg,bmp,png',
            'what_we_are_pic' => 'mimes:jpeg,jpg,bmp,png',
        ]);
        //About Picture
        $about_pic = $request->file('about_pic');
        $setting = Setting::find($id);
        if (isset($about_pic)) {
            $currentDate = Carbon::now()->toDateString();
            $about_picname = $currentDate .'-'.uniqid().'.'.$about_pic->getClientOriginalExtension();
            if (!file_exists('uploads/about')) {
                mkdir('uploads/about', 0777, true);
            }
            unlink('uploads/about/'.$setting->about_pic);
            $about_pic->move('uploads/about', $about_picname);
        }else{
            $about_picname = $setting->about_pic;
        }

        //What We Are Picture
        $what_we_are_pic = $request->file('what_we_are_pic');
        if (isset($what_we_are_pic)) {
            $currentDate = Carbon::now()->toDateString();
            $what_we_are_picname = $currentDate .'-'.uniqid().'.'.$what_we_are_pic->getClientOriginalExtension();
            if (!file_exists('uploads/what_we_are')) {
                mkdir('uploads/what_we_are', 0777, true);
            }
            unlink('uploads/what_we_are/'.$setting->what_we_are_pic);
            $what_we_are_pic->move('uploads/what_we_are', $what_we_are_picname);
        }else{
            $what_we_are_picname = $setting->what_we_are_pic;
        }

        $setting->email = $request->email;
        $setting->phone = $request->phone;
        $setting->address = $request->address;
        $setting->about = $request->about;
        $setting->what_we_are = $request->what_we_are;
        $setting->about_pic = $about_picname;
        $setting->what_we_are_pic = $what_we_are_picname;
        $setting->save();
        Toastr::success('Setting Updated Successfully','Success',["positionClass" => "toast-top-right"]);
        return  redirect()->route('setting.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $setting = Setting::find($id);
        if (file_exists('uploads/about/'. $setting->about_pic)) {
            unlink('uploads/about/'. $setting->about_pic);
        }
        if (file_exists('uploads/what_we_are/'. $setting->what_we_are_pic)) {
            unlink('uploads/what_we_are/'. $setting->what_we_are_pic);
        }
        $setting->delete();
        Toastr::success('Setting Deleted Successfully','Success',["positionClass" => "toast-top-right"]);
        return  redirect()->back();
    }
}
