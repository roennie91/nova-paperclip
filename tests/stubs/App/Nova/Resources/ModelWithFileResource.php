<?php

declare(strict_types=1);

namespace Roennie91\NovaPaperclip\Tests\stubs\App\Nova\Resources;

use Roennie91\NovaPaperclip\PaperclipFile;
use Roennie91\NovaPaperclip\Tests\stubs\App\Models\ModelWithFile;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Field;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Resource;

/**
 * @extends Resource<ModelWithFile>
 */
class ModelWithFileResource extends Resource
{
    /**
     * @var string
     */
    public static $model = ModelWithFile::class;

    /**
     * @param Request $request
     * @return Field[]
     */
    public function fields(Request $request): array
    {
        return [
            ID::make(),

            PaperclipFile::make('File', 'file')
                ->rules('required', 'file'),
        ];
    }
}
