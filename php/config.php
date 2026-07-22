<?php
declare(strict_types=1);

// Realgazeta SDK configuration

class RealgazetaConfig
{
    public static function make_config(): array
    {
        return [
            "main" => [
                "name" => "Realgazeta",
            ],
            "feature" => [
                "test" => [
          'options' => [
            'active' => false,
          ],
        ],
            ],
            "options" => [
                "base" => "https://realgazeta.com.ua/ghost/api/content",
                "auth" => [
                    "prefix" => "",
                ],
                "headers" => [
          'content-type' => 'application/json',
        ],
                "entity" => [
                    "author" => [],
                ],
            ],
            "entity" => [
        'author' => [
          'fields' => [
            [
              'active' => true,
              'name' => 'author',
              'req' => false,
              'type' => '`$ARRAY`',
              'index$' => 0,
            ],
            [
              'active' => true,
              'name' => 'meta',
              'req' => false,
              'type' => '`$OBJECT`',
              'index$' => 1,
            ],
          ],
          'name' => 'author',
          'op' => [
            'load' => [
              'input' => 'data',
              'name' => 'load',
              'points' => [
                [
                  'active' => true,
                  'args' => [
                    'params' => [
                      [
                        'active' => true,
                        'example' => 'sofiia',
                        'kind' => 'param',
                        'name' => 'slug',
                        'orig' => 'slug',
                        'reqd' => true,
                        'type' => '`$STRING`',
                        'index$' => 0,
                      ],
                    ],
                    'query' => [
                      [
                        'active' => true,
                        'example' => '',
                        'kind' => 'query',
                        'name' => 'field',
                        'orig' => 'field',
                        'reqd' => false,
                        'type' => '`$STRING`',
                      ],
                      [
                        'active' => true,
                        'example' => 'count.posts,followers',
                        'kind' => 'query',
                        'name' => 'include',
                        'orig' => 'include',
                        'reqd' => false,
                        'type' => '`$STRING`',
                      ],
                      [
                        'active' => true,
                        'example' => '9a522231cecde5421b239b663b',
                        'kind' => 'query',
                        'name' => 'key',
                        'orig' => 'key',
                        'reqd' => true,
                        'type' => '`$STRING`',
                      ],
                    ],
                  ],
                  'method' => 'GET',
                  'orig' => '/authors/slug/{slug}/',
                  'parts' => [
                    'authors',
                    'slug',
                    '{slug}',
                  ],
                  'select' => [
                    'exist' => [
                      'field',
                      'include',
                      'key',
                      'slug',
                    ],
                  ],
                  'transform' => [
                    'req' => '`reqdata`',
                    'res' => '`body`',
                  ],
                  'index$' => 0,
                ],
              ],
              'key$' => 'load',
            ],
          ],
          'relations' => [
            'ancestors' => [
              [
                'slug',
              ],
            ],
          ],
        ],
      ],
        ];
    }


    public static function make_feature(string $name)
    {
        require_once __DIR__ . '/features.php';
        return RealgazetaFeatures::make_feature($name);
    }
}
