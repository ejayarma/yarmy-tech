<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactFormSubmission extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'message',
        'company',
        'ip_address',
        'user_agent',
    ];
}
