<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Builder;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts'; //name table in database
    protected $fillable = [
        'id',
        'title',
        'content',
        'author'
    ];
  
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }

 
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author', 'id');
    }

}
