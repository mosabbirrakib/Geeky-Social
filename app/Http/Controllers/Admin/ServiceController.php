<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;
use Carbon\Carbon;
use Brian2694\Toastr\Facades\Toastr;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.service.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create');
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
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);
       
        $image = $request->file('image');
        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $currentDate .'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if (!file_exists('uploads/service')) {
                mkdir('uploads/service', 0777, true);
            }
            $image->move('uploads/service', $imagename);
        }else{
            $imagename = 'default.png';
        }

        $service = new Service();
        $service->title = $request->title;
        $service->slug = str_slug($request->title);
        $service->description = $request->description;
        $service->image = $imagename;
        $service->save();
        Toastr::success('Service Added Successfully','Success',["positionClass" => "toast-top-right"]);
        return  redirect()->route('service.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = Service::find($id);
        return view('admin.service.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        return view('admin.service.edit', compact('service'));
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
            'title' => 'required',
            'description' => 'required',
            'image' => 'mimes:jpeg,jpg,bmp,png',
        ]);
       
        $image = $request->file('image');
        $service = Service::find($id);
        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $currentDate .'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if (!file_exists('uploads/service')) {
                mkdir('uploads/service', 0777, true);
            }
            unlink('uploads/service/'.$service->image);
            $image->move('uploads/service', $imagename);
        }else{
            $imagename = $service->image;
        }

        $service->title = $request->title;
        $service->slug = str_slug($request->title);
        $service->description = $request->description;
        $service->image = $imagename;
        $service->save();
        Toastr::success('Service Updated Successfully','Success',["positionClass" => "toast-top-right"]);
        return  redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        if (file_exists('uploads/service/'. $service->image)) {
            unlink('uploads/service/'. $service->image);
        }
        $service->delete();
        Toastr::success('Service Deleted Successfully','Success',["positionClass" => "toast-top-right"]);
        return  redirect()->back();
    }
}
