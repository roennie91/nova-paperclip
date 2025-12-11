<?php

declare(strict_types=1);

namespace Roennie91\NovaPaperclip\Tests\stubs\App\Models;

use Roennie91\NovaPaperclip\Tests\stubs\database\factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as BaseUser;

class User extends BaseUser
{
    use HasFactory;

    protected static function newFactory(): UserFactory
    {
        return new UserFactory();
    }
}
