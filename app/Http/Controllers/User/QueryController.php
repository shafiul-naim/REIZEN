<?php

namespace App\Http\Controllers\User;
use App\Contact;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\ParameterBag;
class QueryController extends Controller
{
    public function store(Request $request){
        //dd($request->all());
        $contact = new Contact();
        $contact->firstname = $request->firstname;
        $contact->lastname = $request->lastname;
        $contact->email = $request->email;
        $contact->question = $request->question;
        $contact->save();
        Session::flash('submitquestion','Question Submit Successfully!');
        return redirect()->back();
    }
}
