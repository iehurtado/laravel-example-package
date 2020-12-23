<?php

namespace Iehurtado\Comments\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Iehurtado\Comments\Database\Factories\CommentFactory;

class Comment extends Model
{
    use HasFactory;
    
    protected $fillable = ['content'];
    
    public function author()
    {
        return $this->morphTo('author');
    }
    
    public function commentable()
    {
        return $this->morphTo('commentable');
    }
    
    protected static function newFactory() 
    {
        return CommentFactory::new();
    }
}
