<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;

class ContactsController extends Controller
{
    public function submit(Request $request)

    {
        $contacts = new Contacts;
        $contacts->name = $request->name;
        $contacts->email = $request->email;
        $contacts->message = $request->message;
        $contacts->save();
        return "Your message succesfully sended";
    }

    // $contacts = new Contacts();
    // $contacts->name = $req->input('name');
    // $contacts->email = $req->input('email');
    // $contacts->message = $req->input('message');

    // $contacts->save();

    // return redirect()->route('contacts');
}
