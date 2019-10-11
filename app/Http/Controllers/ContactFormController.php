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
        // Simpan model yang disimpan ke database dalam sebuah variable
        $contactForm = ContactForm::create($request->validated());

        // Dispatch event. Tugas event hanya mengabarkan dan menyediakan data (variable) yang sekiranya berguna bagi kelas lain yang nanti akan memprosesnya.
        event(new \App\Events\ContactFormSubmitted($contactForm));

        return redirect()->back()->withSuccess('Pesan telah diterima dan menunggu tindak lanjut.');
    }

}
