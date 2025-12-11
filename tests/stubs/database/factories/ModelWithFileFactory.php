<?php

declare(strict_types=1);

namespace Roennie91\NovaPaperclip\Tests\stubs\database\factories;

use Roennie91\NovaPaperclip\Tests\stubs\App\Models\ModelWithFile;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ModelWithFile>
 */
class ModelWithFileFactory extends Factory
{
    protected $model = ModelWithFile::class;

    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'file' => null,
        ];
    }
}
