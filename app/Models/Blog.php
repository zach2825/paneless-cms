<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Str;
use Orbit\Concerns\Orbital;
use Orbit\Concerns\SoftDeletes;

class Blog extends Model
{
    use Orbital, SoftDeletes;

    public static $driver = 'md';

    public $incrementing = false;

    protected $fillable = ['title', 'slug', 'published_at'];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    protected $appends = ['body'];

    public static function schema(Blueprint $table)
    {
        $table->string('title');
        $table->string('slug');
        $table->timestamp('published_at');
    }

    public function getKeyName()
    {
        return 'slug';
    }

    public function getIncrementing()
    {
        return false;
    }

    public function getBodyAttribute()
    {
        return Str::of($this->content)->markdown()->toString();
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    protected static function booted()
    {
        parent::booted();

        static::saving(function (self $blog) {
            $blog->slug = Str::slug($blog->title);

            if ( ! $blog->published_at) {
                $blog->published_at = now();
            }
        });
    }
}
