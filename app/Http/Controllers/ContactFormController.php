<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\ContactForm;


class ContactFormController extends Controller
{
    public function create()
    {
        return view('contact-form.create');
    }

    public function store(\App\Http\Requests\ContactForm\Store $request)
    {
        $contactForm = new ContactForm();
        $contactForm->name = $request->name;
        $contactForm->email = $request->email;
        $contactForm->kategori = $request->kategori;
        $contactForm->message = $request->message;
        $contactForm->notelp = $request->notelp;
        $contactForm->save();

        return redirect()->back()->withSuccess('Pesan telah diterima dan menunggu tindak lanjut.');
    }
}
