<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    protected $table = 'about_us';

    protected $fillable = [
        'image',
        'en_description',
        'ar_description',
        'en_ourstory',
        'ar_ourstory',
        'en_safety',
        'ar_safety',
        'en_transparency',
        'ar_transparency',
        'en_innovation',
        'ar_innovation',
        'en_credibility',
        'ar_credibility',
    ];

    // Translation Accessors
    protected function locale(): string
    {
        return app()->getLocale() === 'ar' ? 'ar' : 'en';
    }

    public function getDescriptionAttribute()
    {
        return $this->{$this->locale().'_description'};
    }

    public function getOurstoryAttribute()
    {
        return $this->{$this->locale().'_ourstory'};
    }

    public function getSafetyAttribute()
    {
        return $this->{$this->locale().'_safety'};
    }

    public function getTransparencyAttribute()
    {
        return $this->{$this->locale().'_transparency'};
    }

    public function getInnovationAttribute()
    {
        return $this->{$this->locale().'_innovation'};
    }

    public function getCredibilityAttribute()
    {
        return $this->{$this->locale().'_credibility'};
    }
}
