<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    use HasFactory;

    // protected $guarded = ['id'];
    protected $fillable = ['post_id', 'ip_address'];

    public function view()
    {
        return $this->belongsTo(Post::class);
    }
}
