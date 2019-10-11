<?php

namespace App\Events;

use App\Models\ContactForm;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ContactFormSubmitted
{
    use Dispatchable;
    use InteractsWithSockets;
    use SerializesModels;

    public $contactForm;

    /**
     * Create a new event instance.
     */
    public function __construct(ContactForm $contactForm)
    {
        $this->contactForm = $contactForm;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array|\Illuminate\Broadcasting\Channel
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}

