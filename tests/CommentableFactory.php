<?php

namespace Iehurtado\Comments\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentableFactory extends Factory
{
    protected $model = Commentable::class;
    
    public function definition()
    {
        return [
            'content' => $this->faker->text()
        ];
    }
}
