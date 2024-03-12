# Laravel Facebook Catalog Package that exports formatted XML data feed

## Installation

You can install the package via composer:

```bash
composer require meeeet-dev/laravel-facebook-catalog
```

## Usage

```php
use MeeeetDev\LaravelFacebookCatalog\LaravelFacebookCatalog;

LaravelFacebookCatalog::setTitle('Example feed');
LaravelFacebookCatalog::setDescription('Example feed of the Example shop');
LaravelFacebookCatalog::setLink('https://example.shop');
LaravelFacebookCatalog::setCurrency('USD');

LaravelFacebookCatalog::addItem([
    'link' => 'https://example.shop/p/foo-bar',
    'id' => 'SKU123',
    'title' => 'Foo bar',
    'image_link' => 'https://example.shop/images/foo-bar.png',
    'description' => 'Foo bar best product',
    'availability' => 'in stock',
    "price" => 99.99,
    'brand' => 'Foo brand',
    'condition' => 'new',
]);

return LaravelFacebookCatalog::display();
```

An example of the expected array

```php
[
    "id" 	            		        => "", // Unique Example SKU
    "title" 	            		    => "", // Max 200 Characters, recommend 65 maximum
    "description"            	        => "",
    "rich_text_description"             => "", // A description of the item containing rich text (HTML) formatting
    "availability"           	        => "in stock", // values: in stock, out of stock
    "condition" 	            	    => "new", // values: new, refurbished, used
    "price" 		            	    => 0.00,
    "link"		                        => "",
    "image_link"		                => "",
    "brand" 		            	    => "",
    // required fileds for payments in USA only and optional everywhere else
    "quantity_to_sell_on_facebook"      => 10, // previously name "inventory"
    "google_product_category"           => "",
    "fb_product_category"               => null,
    "size"                              => null,
    // required in india and optional everywhere else
    "origin_country"                    => null, // Ex: US
    "importer_name"                     => null, // if the origin country is not INDIA
    "importer_address"                  => null,
    "manufacturer_info"                 => null,
    "wa_compliance_category"            => null,
    // Optional fields
    "sale_price"                        => null,
    "sale_price_effective_date"         => null,
    "item_group_id"                     => null,
    "status"                            => null, // Values: active, archived (or staging)
    "additional_image_link"             => null, // separated by a comma (,), semicolon (;), space ( ) or vertical bar (|)
    "gender"                            => null, // female, male, unisex
    "color"                             => null, // The main colour of the item. Describe the colour in words, not a hex code. Character limit: 200.
    "age_group"                         => null, // Values: adult, all ages, teen, kids, toddler, infant, newborn.
    "material" 	                        => null, // The material the item is made from, such as cotton, polyester, denim or leather
    "pattern"	                        => null, // The pattern or graphic print on the item
    "shipping"                          => null,
    "shipping_weight"                   => null,
]
```
For more details => https://web.facebook.com/business/help/120325381656392?id=725943027795860

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Meeeet Dev](https://github.com/meeeet-dev)
- [don mbelembe](https://github.com/donmbelembe)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
