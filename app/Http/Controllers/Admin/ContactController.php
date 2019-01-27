<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;
use Brian2694\Toastr\Facades\Toastr;

class ContactController extends Controller
{
    public function postContact(Request $request){
    	$this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'comment' => 'required',
        ]);

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->comment = $request->comment;
        $contact->save();
        Toastr::success('Message Sent Successfully','Success',["positionClass" => "toast-top-right"]);
        return  redirect()->back();
    }

    public function index(){
    	$contacts = Contact::all();
    	return view('admin.contact.index',compact('contacts'));
    }

    public function destroy($id){
    	$contact = Contact::find($id);
    	$contact->delete();
    	Toastr::success('Message Deleted Successfully','Success',["positionClass" => "toast-top-right"]);
        return  redirect()->back();
    }
}
