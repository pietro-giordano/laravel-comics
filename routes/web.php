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

      $comics = [
            [
                  "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX",
                  "price" => "$19.99",
                  "series" => "Action Comics",
                  "type" => "comic book"
            ],
            [
                  "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/AV1976_01_300-001_HD_5f738f6e39ddd7.18205602.jpg?itok=VgdYdJ01",
                  "price" => "$3.99",
                  "series" => "American Vampire 1976",
                  "type" => "comic book"
            ],
            [
                  "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/gn-covers/2018/08/AQMv4_UW_153-001_HD_5b7efa1745a9b8.08589135.jpg?itok=HPTtnrsb",
                  "price" => "$16.99",
                  "series" => "Aquaman",
                  "type" => "graphic novel"
            ],
            [
                  "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/06/batgirl_v5_1_5b23e1f1124941.50950783.jpg?itok=VnrJah76",
                  "price" => "$2.99",
                  "series" => "Batgirl",
                  "type" => "comic book"
            ],
            [
                  "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/BM_56_300-001_HD_5ba137a85c3bf3.33122291.jpg?itok=3FHJQYJZ",
                  "price" => "$3.99",
                  "series" => "Batman",
                  "type" => "comic book"
            ],
            [
                  "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/BM_56_300-001_HD_5ba137a85c3bf3.33122291.jpg?itok=3FHJQYJZ",
                  "price" => "$2.99",
                  "series" => "Batman Beyond",
                  "type" => "comic book"
            ],
            [
                  "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2019/08/BMSM_5d4361b7116261.74371456.jpg?itok=kEDR2OL8",
                  "price" => "$3.99",
                  "series" => "Batman/Superman",
                  "type" => "comic book"
            ],
            [
                  "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/BMSMANN_01_300-001_HD_5f5ff17fa1d665.74704970.jpg?itok=azz5sfGk",
                  "price" => "$4.99",
                  "series" => "Batman/Superman Annual",
                  "type" => "comic book"
            ],
            [
                  "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/BMTJWZ_01_300-001_HD_5f5ff2307dcb37.34652945.jpg?itok=VswVjLR8",
                  "price" => "$5.99",
                  "series" => "Batman: The Joker War Zone",
                  "type" => "comic book"
            ],
            [
                  "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/08/cover-v2_5f40314645a734.37285065.png?itok=ImNM2QBY",
                  "price" => "$6.99",
                  "series" => "Batman: Three Jokers",
                  "type" => "comic book"
            ],
            [
                  "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/10/BMWK_HQ_01_300-001_HD_5f7cb4945e13f6.89501032.jpg?itok=sVwALbUX",
                  "price" => "$4.99",
                  "series" => "Batman: White Knight Presents: Harley Quinn",
                  "type" => "comic book"
            ],
            [
                  "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/gn-covers/2019/04/CTWv1_CC_144-001_HD_5ca5299a751963.53054221.jpg?itok=ooPaoLDq",
                  "price" => "$16.99",
                  "series" => "Catwoman",
                  "type" => "graphic novel"
            ]
      ];

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
