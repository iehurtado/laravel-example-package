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
        $relation = $this->morphTo('author');
        if (config('comments.anonymousAuthors.enabled', true))
        {
            $relation->withDefault(config('comments.anonymousAuthors.attributes', [
                'name' => 'Anonymous'
            ]));
        }
        return $relation;
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
