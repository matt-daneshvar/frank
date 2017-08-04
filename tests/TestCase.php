<?php

namespace Tests;

use Frank\Models\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function signIn($user = null)
    {
        $user = $user ?: factory(User::class)->create(['name' => 'John Doe']);
        $this->actingAs($user);
        return $this;
    }
}
