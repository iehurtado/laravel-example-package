<?php

namespace Iehurtado\Comments\Tests;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Iehurtado\Comments\Traits\IsCommentable;

class Commentable extends Model
{
    use HasFactory, IsCommentable;
    
    protected $guarded = [];
    protected $table = 'commentables';
    
    protected static function newFactory()
    {
        return CommentableFactory::new();
    }
}
