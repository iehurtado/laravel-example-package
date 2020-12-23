<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Iehurtado\Comments\Tests;

use Orchestra\Testbench\Factories\UserFactory as TestbenchUserFactory;

class UserFactory extends TestbenchUserFactory
{
    protected $model = User::class;
    
    /**
     * @{inheritdoc}
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => \Illuminate\Support\Str::random(10),
        ];
    }
}
