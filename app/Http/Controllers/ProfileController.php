<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Carbon\Carbon;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index($id){
    	$users = User::find($id);
    	return view('frontend.profile', compact('users'));
    }

    public function update(Request $request, $id){
    	
        $avatar = $request->file('avatar');
        $user = User::find($id);
        if (isset($avatar)) {
            $currentDate = Carbon::now()->toDateString();
            $avatarname = $currentDate .'-'.uniqid().'.'.$avatar->getClientOriginalExtension();
            if (!file_exists('uploads/userprofile_pic')) {
                mkdir('uploads/userprofile_pic', 0777, true);
            }
            $avatar->move('uploads/userprofile_pic', $avatarname);
        }else{
            $avatarname = $user->avatar;
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->designation = $request->designation;
        $user->address = $request->address;
        $user->about = $request->about;
        if ($request->password !=NULL || $request->password !="") {
            $user->password = Hash::make($request->password);
        }
        $user->avatar = $avatarname;
        $user->save();
        Toastr::success('Profile Updated Successfully','Success',["positionClass" => "toast-top-right"]);
        return  redirect()->back();
    }
}
