<?php

namespace Iehurtado\Comments\Traits;

use Iehurtado\Comments\Models\Comment;

trait AuthorsComments 
{
    public function comments()
    {
        return $this->morphMany(Comment::class, 'author');
    }
}
