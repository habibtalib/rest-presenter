<?php

declare(strict_types=1);

namespace XtendPackages\RESTPresenter\StarterKits\Stores\Lunar\Resources\Catalog\Collections\Presenters\Category\Data;

use Spatie\LaravelData\Data;
use XtendPackages\RESTPresenter\StarterKits\Stores\Lunar\Data\Response\MediaData;

final class CategoryData extends Data
{
    public function __construct(
        public int $id,
        public string $slug,
        public string $name,
        public ?string $description,
        public ?MediaData $banner,
    ) {
    }
}
