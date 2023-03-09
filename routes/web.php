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

      $footer_links = [
            [
                  'label' => 'digital comics',
                  'src' => 'buy-comics-digital-comics.png',
                  'url' => '#'
            ], [
                  'label' => 'dc merchandise',
                  'src' => 'buy-comics-merchandise.png',
                  'url' => '#'
            ], [
                  'label' => 'subscription',
                  'src' => 'buy-comics-subscriptions.png',
                  'url' => '#'
            ], [
                  'label' => 'comic shop locator',
                  'src' => 'buy-comics-shop-locator.png',
                  'url' => '#'
            ], [
                  'label' => 'dc power visa',
                  'src' => 'buy-dc-power-visa.svg',
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
                  'src' => "footer-facebook.png"
            ], [
                  'label' => 'twitter',
                  'url' => '#',
                  'src' => "footer-twitter.png"
            ], [
                  'label' => 'youtube',
                  'url' => '#',
                  'src' => "footer-youtube.png"
            ], [
                  'label' => 'pinterest',
                  'url' => '#',
                  'src' => "footer-pinterest.png"
            ], [
                  'label' => 'periscope',
                  'url' => '#',
                  'src' => "footer-periscope.png"
            ],
      ];

      return view('welcome', [
            'header_links' => $header_links,
            'footer_links' => $footer_links,
            'section' => $sections,
            'social' => $social,
      ]);
});
