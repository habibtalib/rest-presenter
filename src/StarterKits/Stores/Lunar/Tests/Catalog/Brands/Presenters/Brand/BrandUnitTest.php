<?php

use Illuminate\Http\Request;
use Lunar\FieldTypes\Text;
use Lunar\Models\Brand;
use Lunar\Models\Language;
use Lunar\Models\Url;
use XtendPackages\RESTPresenter\StarterKits\Stores\Lunar\Data\Response\MediaData;
use XtendPackages\RESTPresenter\StarterKits\Stores\Lunar\Resources\Catalog\Brands\Presenters\Brand\Data\BrandData;
use XtendPackages\RESTPresenter\StarterKits\Stores\Lunar\Resources\Catalog\Brands\Presenters\Brand\Brand as BrandPresenter;

beforeEach(function () {
    $this->request = mock(Request::class);
    $this->language = mock(Language::class);
    $this->url = mock(Url::class);
    $this->brandModel = mock(Brand::class)
        ->makePartial()
        ->forceFill([
            'id' => 1,
            'name' => 'New Brand',
            'urls' => collect([
                $this->url,
            ]),
        ]);

    $this->brand = mock(
        BrandPresenter::class,
        [$this->request, $this->brandModel]
    )->makePartial();

    $this->brand
        ->shouldAllowMockingProtectedMethods()
        ->shouldReceive('transform')
        ->andReturn(BrandData::from([
            'id' => 1,
            'slug' => 'new-brand',
            'name' => 'New Brand',
            'image' => fakeMediaItem(1),
        ]));
});

describe('Brand Presenter', function () {
    test('Brand::transform returns the correct data', function () {

        $result = $this->brand->transform();

        expect($result)->toBeInstanceOf(BrandData::class)
            ->and($result->id)->toBe(1)
            ->and($result->slug)->toBe('new-brand')
            ->and($result->name)->toBe('New Brand')
            ->and($result->image)->toBeInstanceOf(MediaData::class);
    });
});
