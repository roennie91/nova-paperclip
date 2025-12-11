<?php

declare(strict_types=1);

namespace Roennie91\NovaPaperclip\Tests\stubs\database\factories;

use Roennie91\NovaPaperclip\Tests\stubs\App\Models\User;
use Orchestra\Testbench\Factories\UserFactory as BaseUserFactory;

class UserFactory extends BaseUserFactory
{
    protected $model = User::class;
}
