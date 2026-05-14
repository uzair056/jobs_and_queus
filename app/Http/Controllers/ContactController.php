<?php

namespace App\Http\Controllers;
use App\Jobs\SendContactEmailJob;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'email' => 'required|email',
        ]);

        $contact = Contact::create([
            'name'  => $request->name,
            'email' => $request->email,
        ]);

        SendContactEmailJob::dispatch($contact);

        return back()->with('success', 'Form Submitted');
    }
}
