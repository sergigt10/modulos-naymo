<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => false, // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => "Modulos Naymo 972 11 59 41, Venta de Mobil Home y Casas de Hormigón, Comprar Mobile Home de Segunda Mano y Mobil Home de Ocasión Online. Módulos Naymo.", // set false to total remove
            'separator'    => ', ',
            'keywords'     => ['mobile home', 'mobil home', 'mobil home de segunda mano', 'mobile home segunda mano', 'casas prefabricadas de segunda mano', 'mobil home ocasion', 'venta de mobil home', 'modulos de segunda mano'],
            'canonical'    => false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots'       => 'all', // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'Venta de Mobile Home, Comprar Mobile Home de Ocasión', // set false to total remove
            'description' => "En módulos naymo somos expertos en la venta de casas prefabricadas de segunda mano y mobile home de ocasión.", // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => 'website',
            'site_name'   => 'Módulos Naymo',
            'locale'      => 'es_ES',
            'images'      => ['https://www.modulosnaymo.es/frontend/img/modulos-naymo-mobile-home.webp'],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            'card'        => 'summary',
            'title'       => 'Venta de Mobile Home, Comprar Mobile Home de Ocasión',
            'site'        => '@modulosnaymo',
            'creator'     => '@modulosnaymo',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'Venta de Mobile Home, Comprar Mobile Home de Ocasión', // set false to total remove
            'description' => 'En módulos naymo somos expertos en la venta de casas prefabricadas de segunda mano y mobile home de ocasión.', // set false to total remove
            'url'         => 'https://www.modulosnaymo.es/', // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => ['https://www.modulosnaymo.es/frontend/img/modulos-naymo-mobile-home.webp'],
        ],
    ],
];
