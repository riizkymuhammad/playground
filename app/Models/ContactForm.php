<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ContactForm extends Model
{
    protected $guarded = [];

    use Notifiable;
}
