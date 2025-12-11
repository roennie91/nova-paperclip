<?php

declare(strict_types=1);

namespace Roennie91\NovaPaperclip\Tests\stubs\database\factories;

use Roennie91\NovaPaperclip\Tests\stubs\App\Models\ModelWithImage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ModelWithImage>
 */
class ModelWithImageFactory extends Factory
{
    protected $model = ModelWithImage::class;

    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => null,
        ];
    }
}
