<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory, Sluggable;

    // protected $fillable = ['title' , 'excerpt', 'body'];
    protected $guarded = ['id'];
    protected $with = ['author', 'category', 'news', 'tags'];


    public function scopeFilter($query, array $filters)
    {

        // if (isset($filters['search']) ? $filters['search'] : false) {
        //     return $query->where('title', 'like', '%' . $filters['search'] . '%')
        //           ->orWhere('body','like','%' . $filters['search'] . '%');
        // }

        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        $query->when($filters['news'] ?? false, function ($query, $news) {
            return $query->whereHas('news', function ($query) use ($news) {
                $query->where('slug', $news);
            });
        });

        $query->when($filters['author'] ?? false, function ($query, $author) {
            return $query->whereHas('author', function ($query) use ($author) {
                $query->where('username', $author);
            });
        });
        $query->when($filters['tags'] ?? false, function ($query, $tags) {
            return $query->whereHas('tags', function ($query) use ($tags) {
                $query->where('slug', $tags);
            });
        });

        // $query->when($filters['author'] ?? false, fn($query, $author)=>
        //     $query->whereHas('author', fn($query) =>
        //         $query->where('username', $author)
        //         )
        //     );
    }
    // public function scopeFilter($query){
    //     if (request('search')) {
    //         return $query->where('title', 'like', '%' . request('search') . '%')
    //               ->orWhere('body','like','%' . request('search') . '%');
    //     }
    // }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function news()
    {
        return $this->belongsTo(News::class, 'news_id');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function view()
    {
        return $this->belongsTo(View::class, 'post_id');
    }
    public function tags()
    {
        return $this->belongsToMany(Tags::class, 'post_tags');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
