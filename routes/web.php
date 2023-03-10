<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
      $header_links = [
            [
                  'label' => 'characters',
                  'url' => '#',
                  'active' => false,
            ], [
                  'label' => 'comics',
                  'url' => '#',
                  'active' => true,
            ], [
                  'label' => 'movies',
                  'url' => '#',
                  'active' => false,
            ], [
                  'label' => 'tv',
                  'url' => '#',
                  'active' => false,
            ], [
                  'label' => 'games',
                  'url' => '#',
                  'active' => false,
            ], [
                  'label' => 'collectibles',
                  'url' => '#',
                  'active' => false,
            ], [
                  'label' => 'videos',
                  'url' => '#',
                  'active' => false,
            ], [
                  'label' => 'fans',
                  'url' => '#',
                  'active' => false,
            ], [
                  'label' => 'news',
                  'url' => '#',
                  'active' => false,
            ], [
                  'label' => 'shop',
                  'url' => '#',
                  'active' => false,
            ],
      ];

      $comics = config('comics');

      $footer_links = [
            [
                  'label' => 'digital comics',
                  'src' => 'resources/img/buy-comics-digital-comics.png',
                  'url' => '#'
            ], [
                  'label' => 'dc merchandise',
                  'src' => 'resources/img/buy-comics-merchandise.png',
                  'url' => '#'
            ], [
                  'label' => 'subscription',
                  'src' => 'resources/img/buy-comics-subscriptions.png',
                  'url' => '#'
            ], [
                  'label' => 'comic shop locator',
                  'src' => 'resources/img/buy-comics-shop-locator.png',
                  'url' => '#'
            ], [
                  'label' => 'dc power visa',
                  'src' => 'resources/img/buy-dc-power-visa.svg',
                  'url' => '#'
            ],
      ];

      $sections = [
            [
                  'title' => 'dc comics',
                  'links' => [
                        [
                              'label' => 'Characters',
                              'url' => '#'
                        ], [
                              'label' => 'Comics',
                              'url' => '#'
                        ], [
                              'label' => 'Movies',
                              'url' => '#'
                        ], [
                              'label' => 'TV',
                              'url' => '#'
                        ], [
                              'label' => 'Games',
                              'url' => '#'
                        ], [
                              'label' => 'Videos',
                              'url' => '#'
                        ], [
                              'label' => 'News',
                              'url' => '#'
                        ],
                  ]
            ], [
                  'title' => 'shop',
                  'links' => [
                        [
                              'label' => 'Shop DC',
                              'url' => '#'
                        ], [
                              'label' => 'Shop DC Collectibles',
                              'url' => '#'
                        ],
                  ]
            ], [
                  'title' => 'dc',
                  'links' => [
                        [
                              'label' => 'Terms Of Use',
                              'url' => '#'
                        ], [
                              'label' => 'Privacy Policy (New)',
                              'url' => '#'
                        ], [
                              'label' => 'Add Choices',
                              'url' => '#'
                        ], [
                              'label' => 'Advertising',
                              'url' => '#'
                        ], [
                              'label' => 'Jobs',
                              'url' => '#'
                        ], [
                              'label' => 'Subscriptions',
                              'url' => '#'
                        ], [
                              'label' => 'Talent Workshops',
                              'url' => '#'
                        ], [
                              'label' => 'CPSC Certificates',
                              'url' => '#'
                        ], [
                              'label' => 'Ratings',
                              'url' => '#'
                        ], [
                              'label' => 'Shop Help',
                              'url' => '#'
                        ], [
                              'label' => 'Contact Us',
                              'url' => '#'
                        ],
                  ]
            ], [
                  'title' => 'sites',
                  'links' => [
                        [
                              'label' => 'DC',
                              'url' => '#'
                        ], [
                              'label' => 'MAD Magazine',
                              'url' => '#'
                        ], [
                              'label' => 'DC Kids',
                              'url' => '#'
                        ], [
                              'label' => 'DC Universe',
                              'url' => '#'
                        ], [
                              'label' => 'DC Power Visa',
                              'url' => '#'
                        ],
                  ]
            ],
      ];

      $social = [
            [
                  'label' => 'facebook',
                  'url' => '#',
                  'src' => "resources/img/footer-facebook.png"
            ], [
                  'label' => 'twitter',
                  'url' => '#',
                  'src' => "resources/img/footer-twitter.png"
            ], [
                  'label' => 'youtube',
                  'url' => '#',
                  'src' => "resources/img/footer-youtube.png"
            ], [
                  'label' => 'pinterest',
                  'url' => '#',
                  'src' => "resources/img/footer-pinterest.png"
            ], [
                  'label' => 'periscope',
                  'url' => '#',
                  'src' => "resources/img/footer-periscope.png"
            ],
      ];

      return view('welcome', [
            'header_links' => $header_links,
            'comics' => $comics,
            'footer_links' => $footer_links,
            'sections' => $sections,
            'social' => $social,
      ]);
});
