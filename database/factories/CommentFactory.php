<?php

namespace Iehurtado\Comments\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Iehurtado\Comments\Models\Comment;
use Iehurtado\Comments\Tests\User;
use Iehurtado\Comments\Tests\Commentable;

class CommentFactory extends Factory
{
    protected $model = Comment::class;
    
    public function definition()
    {
        $author = User::factory()->create();
        $commentable = Commentable::factory()->create();
        
        return [
            'content' => $this->faker->paragraph(),
            'author_id' => $author->id,
            'author_type' => get_class($author),
            'commentable_id' => $commentable->id,
            'commentable_type' => get_class($commentable)
        ];
    }
}
