<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    protected $fillable = [
        'en_title',
        'ar_title',
        'en_description',
        'ar_description',
        'video',
    ];

    public function getTitleAttribute(): string
    {
        $locale = app()->getLocale();

        return $locale === 'ar' ? $this->ar_title : $this->en_title;
    }

    public function getDescriptionAttribute(): string
    {
        $locale = app()->getLocale();

        return $locale === 'ar' ? $this->ar_description : $this->en_description;
    }
}
