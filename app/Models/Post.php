<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Str;
use Orbit\Concerns\Orbital;
use Orbit\Concerns\SoftDeletes;

/**
 * @property string $title
 * @property string $slug
 * @property string $published_at
 */
class Post extends Model
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
        $table->foreignIdFor(Blog::class, 'blog_slug')->nullable();
        $table->timestamp('published_at');
    }

    public function getBodyAttribute()
    {
        return Str::of($this->content)->markdown()->toString();
    }

    public function getKeyName()
    {
        return 'slug';
    }

    public function getIncrementing()
    {
        return false;
    }

    protected static function booted()
    {
        parent::booted();

        static::saving(function (self $post) {
            $post->slug = Str::slug($post->title);

            if ( ! $post->published_at) {
                $post->published_at = now();
            }
        });
    }
}
