<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function submit(Request $req){
        $validation = $req->validate([
            'name'=>'required|min:3|max:20',
            'email'=>'required|email',
            'theme'=>'required|min:4|max:100',
            'message'=>'required|min:15|max:1000'

        ]);

        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->theme = $req->input('theme');
        $contact->message = $req->input('message');
        $contact->save();
        return redirect()->route('index')->with('success','Message successfully added. The answer will come to your indicated mail');
    }

    public function allData(){
        return view('messages',['data'=>Contact::all()]);
    }
    public function showMessage($id){
        $contact = new Contact;
        return view('auth.support.one-message',['data'=>$contact::find($id)]);
    }

    public function updateMessage($id){
        $contact = new Contact;
        return view('auth.support.update-message',['data'=>$contact::find($id)]);
    }

    public function updateMessageSubmit($id, Request $req)
    {
        $contact = Contact::find($id);
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->theme = $req->input('theme');
        $contact->message = $req->input('message');
        $contact->save();
        return redirect()->route('contact-data-message', $id)->with('success','Message successfully updated. ');
    }

    public function deleteMessage($id){
        Contact::find($id)->delete();
        return redirect()->route('contact-data')->with('success','Message successfully deleted.');
    }

}
