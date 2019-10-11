<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravolt\Suitable\AutoFilter;
use Laravolt\Suitable\AutoSort;


class ContactForm extends Model
{
    protected $guarded = [];

    use Notifiable;
    use AutoSort,AutoFilter;

}
