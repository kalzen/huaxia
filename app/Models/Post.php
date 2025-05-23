<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Overtrue\Pinyin\Pinyin;

class Post extends Model
{
    use SoftDeletes;
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;
    protected $guarded = [];
    public function getUrlAttribute()
    {
        return '/tin-tuc/' . $this->slug;
    }
    public function scopeActive($query, $lang = null)
    {
        if ($lang) {
            $query->where('status', Post::STATUS_ACTIVE)->where('lang', $lang);
        } else {
            $query->where('status', Post::STATUS_ACTIVE);
        }
    }

    public function scopeIsPromotion($query)
    {
        $query->where('is_promotion', Post::STATUS_ACTIVE);
    }

    public function Language_vi()
    {
        return $this->hasOne(PostLanguage::class, 'vi');
    }

    public function Language_en()
    {
        return $this->hasOne(PostLanguage::class, 'en');
    }

    public function Language_cn()
    {
        return $this->hasOne(PostLanguage::class, 'cn');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable')->withTimestamps();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function images()
    {
        return $this->belongsToMany(Image::class)->withTimestamps();
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class)->withTimestamps();
    }

    public static function boot()
    {
        parent::boot();
        static::creating(function ($post) {
            if ($post->slug) {
                return;
            }
            if (preg_match('/[\x{4e00}-\x{9fa5}]/u', $post->title)) {
                $pinyin = new Pinyin();
                $post->slug = Str::slug($pinyin->permalink($post->title));
                
            } else {
                $post->slug = Str::slug($post->title);
            }
            
            $post->user_id = $post->user_id ?: (auth()->user()->id ?? null);
        });
        
        static::updating(function ($post) {
            if (preg_match('/[\x{4e00}-\x{9fa5}]/u', $post->title)) {
                $pinyin = new Pinyin();
                $post->slug = Str::slug($pinyin->permalink($post->title));
            } else {
                $post->slug = Str::slug($post->title);
            }
        });
    }
}
