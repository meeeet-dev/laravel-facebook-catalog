<?php

use MeeeetDev\LaravelFacebookCatalog\LaravelFacebookCatalog;

use function Spatie\Snapshots\assertMatchesXmlSnapshot;

it('throws an exception when there is a missing required attributes', function () {
    LaravelFacebookCatalog::setTitle('Example feed');
    LaravelFacebookCatalog::setDescription('Example feed of the Example shop');
    LaravelFacebookCatalog::setLink('https://example.shop');

    LaravelFacebookCatalog::addItem([
        'link' => 'https://example.shop/p/foo-bar',
        'id' => 'SKU123',
        'title' => 'Foo bar',
        'image_link' => 'https://example.shop/images/foo-bar.png',
        'description' => 'Foo bar best product',
        'availability' => 'in stock',
        // "price" => 99.99,
        'brand' => 'Foo brand',
        'condition' => 'new',
    ]);

    LaravelFacebookCatalog::display();
})->throws(\Exception::class);

it('generate correctly even with optional attributes', function () {
    LaravelFacebookCatalog::setTitle('Example feed');
    LaravelFacebookCatalog::setDescription('Example feed of the Example shop');
    LaravelFacebookCatalog::setLink('https://example.shop');

    LaravelFacebookCatalog::addItem([
        'link' => 'https://example.shop/p/foo-bar',
        'id' => 'SKU123',
        'title' => 'Foo bar',
        'image_link' => 'https://example.shop/images/foo-bar.png',
        'description' => 'Foo bar best product',
        'availability' => 'in stock',
        'price' => 99.99,
        'brand' => 'Foo brand',
        'condition' => 'new',
        'age_group' => 'teen',
    ]);

    assertMatchesXmlSnapshot(LaravelFacebookCatalog::generate());
});
