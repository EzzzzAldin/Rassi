<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $table = 'contact_us';

    protected $fillable = [
        'image',
        'en_description',
        'ar_description',
        'phone',
        'email',
        'facebook',
        'tiktok',
        'youtube',
    ];

    public function getDescriptionAttribute()
    {
        return app()->getLocale() === 'ar'
            ? $this->ar_description
            : $this->en_description;
    }
}
