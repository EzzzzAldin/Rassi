<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TermsCondition extends Model
{
    protected $fillable = [
        'en_title',
        'ar_title',
        'en_content',
        'ar_content',
        'is_active',
    ];

    protected function locale(): string
    {
        return app()->getLocale() === 'ar' ? 'ar' : 'en';
    }

    public function getTitleAttribute()
    {
        return $this->{$this->locale().'_title'};
    }

    public function getContentAttribute()
    {
        return $this->{$this->locale().'_content'};
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
