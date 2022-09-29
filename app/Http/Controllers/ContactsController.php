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
}
