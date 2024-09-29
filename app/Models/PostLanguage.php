<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostLanguage extends Model
{
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;

    protected $guarded = [];

    public function scopeActive($query, $lang)
    {
        $query->where('status', self::STATUS_ACTIVE)->pluck($lang);
    }

    public function post_vi()
    {
        return $this->belongsTo(Post::class, 'vi', 'id')->where('lang', 'vi');
    }

    public function post_en()
    {
        return $this->belongsTo(Post::class, 'en', 'id')->where('lang', 'en');
    }
}
