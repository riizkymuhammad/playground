<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactForm;
use Suitable;

class ContactFormController extends Controller
{
    public function index()
    {
        $data = ContactForm::autoSort()->autoFilter()->paginate();
        $table = Suitable::source($data)->columns(['id', 'name'])->render();

        return view('contact-form.index', compact('table', 'data'));
    }
}
