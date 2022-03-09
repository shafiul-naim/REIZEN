<?php

namespace App\Http\Controllers\Admin;
use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        return view('admin.contact.contact',compact('contacts'));
    }
    public function store(Request $request){
        $contact=new Contact();
        $contact->firstname=$request->firstname;
        $contact->lastname=$request->lastname;
        $contact->email=$request->email;
        $contact->question = $request->question;
        $contact->save();
        return redirect()->to('admin/all-contact');
    }
    public function view_page($id){
        $contact= Contact::find($id);
        return view('admin.contact.view-contact',compact('contact'));
    }
}
