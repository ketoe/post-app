<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Builder;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments'; //name table in database
    protected $fillable = [
        'id',
        'post_id',
        'content',
        'author'
    ];


    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'post_id', 'id');
    }

   
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author', 'id');
    }

}
