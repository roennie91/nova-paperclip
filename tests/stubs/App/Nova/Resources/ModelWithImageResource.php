<?php

declare(strict_types=1);

namespace Roennie91\NovaPaperclip\Tests\stubs\App\Nova\Resources;

use Roennie91\NovaPaperclip\PaperclipImage;
use Roennie91\NovaPaperclip\Tests\stubs\App\Models\ModelWithImage;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Field;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Resource;

/**
 * @extends Resource<ModelWithImage>
 */
class ModelWithImageResource extends Resource
{
    /**
     * @var string
     */
    public static $model = ModelWithImage::class;

    /**
     * @param Request $request
     * @return Field[]
     */
    public function fields(Request $request): array
    {
        return [
            ID::make(),

            PaperclipImage::make('Image', 'image')
                ->rules('required', 'image'),
        ];
    }
}
