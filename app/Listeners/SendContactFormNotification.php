<?php

namespace App\Listeners;

use App\Events\ContactFormSubmitted;
use App\Models\ContactForm;
use App\User;

class SendContactFormNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param ContactFormSubmitted $event
     */
    public function handle(ContactFormSubmitted $event)
    {
        $invoice = ContactForm::latest();
        $invoice->notify(new \App\Notifications\ContactFormSubmitted($event->contactForm));

    }
}
