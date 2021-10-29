<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
        
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::firstOrNew();
        return view('contact.index', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $contact = Contact::firstOrNew();
        return view('contact.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\ContactRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function update(ContactRequest $request)
    {
        $data = $request->except('_token');
        $contact = Contact::first();
        if (is_null($contact)) {
            $contact = Contact::create($data);
        } else {
            $contact->update($data);
        }
        return redirect(route('contact.index'))->with('success', 'Les coordonnées ont bien été mises à jour');
    }
}
