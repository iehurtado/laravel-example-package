<?php

namespace Iehurtado\Comments\Tests;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Iehurtado\Comments\Traits\AuthorsComments;

class User extends Authenticatable
{
    use HasFactory, AuthorsComments;
    
    protected $guarded = [];
    protected $table = 'users';
    
    protected static function newFactory()
    {
        return UserFactory::new();
    }
}
