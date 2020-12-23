<?php

namespace Iehurtado\Comments\Traits;

use Iehurtado\Comments\Models\Comment;

trait IsCommentable
{
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
