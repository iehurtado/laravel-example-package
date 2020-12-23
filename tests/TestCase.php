<?php

namespace Iehurtado\Comments\Tests;

use Iehurtado\Comments\CommentsServiceProvider;


class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        // additional setup
    }

    protected function getPackageProviders($app)
    {
        return [
            CommentsServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        // perform environment setup
        include_once __DIR__ . '/../database/migrations/private/2014_10_12_000000_create_users_table.php';
        include_once __DIR__ . '/../database/migrations/private/2020_12_23_204709_create_commentables_table.php';
        
        (new \CreateUsersTable())->up();
        (new \CreateCommentablesTable())->up();
    }
}