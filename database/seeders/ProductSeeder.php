<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
            'name'=>'L.G K92',
            'price'=>'300$',
            'category'=>'L.G',
            'description'=>'LG K92 5G LMK920AM1 - 128GB - Titan Gray (AT&T) (Single SIM)',
            'gallery'=>'https://i.ebayimg.com/images/g/t2QAAOSwTfNgRkNT/s-l640.jpg'  
            ],
            [
                'name'=>'LG Xpression® Plus 3 | AT&T',
                'price'=>'600$',
                'category'=>'L.G',
                'description'=>'A Brand New Phone with key features that has Sleek & Premium Design with Ergonomic 3D Arc Edges',
                'gallery'=>'https://www.lg.com/us/images/cell-phones/md07512514/gallery/desktop-01.jpg'  
            ],
            [
                'name'=>'LG Phoenix® 5 | AT&T',
                'price'=>'100$',
                'category'=>'L.G',
                'description'=>'AT&T Prepaid - LG Phoenix Plus with 16GB Memory Prepaid Cell Phone - Black',
                'gallery'=>'https://www.lg.com/us/images/cell-phones/md07509133/gallery/M-01.jpg'  
            ],
            [
                'name'=>'LG V60 ThinQ™ 5G | AT&T',
                'price'=>'700$',
                'category'=>'L.G',
                'description'=>'smartphone features a 6.10-inch touchscreen display with a resolution of 1440 x 3120 pixels.',
                'gallery'=>'https://rawdev.com.ng/blog/wp-content/uploads/2019/04/LG-G7-ThinQ-1.jpg'  
            ],
            [
                'name'=>'L.G phone AT&T',
                'price'=>'100$',
                'category'=>'L.G',
                'description'=>'AT&T Radiant Max 32GB, Cobalt Blue - Prepaid Smartphone',
                'gallery'=>'https://www.lg.com/us/images/cell-phones/md07500211/gallery/desktop-08.jpg'  
            ],
            [
                'name'=>'LG Arena™ 2 | AT&T',
                'price'=>'120$',
                'category'=>'L.G',
                'description'=>'LG Arena™ 2 with a 32GB Gray',
                'gallery'=>'https://www.att.com/catalog/en/idse/LG/LG%20Arena%202/Gray-hero-zoom.png'  
            ],
            [
                'name'=>'L.G Stylo',
                'price'=>'300$',
                'category'=>'L.G',
                'description'=>'Android 9.0 Pie 4G LTE speed 6.2 touch screen Bluetooth 13.0MP rear- and 5.0MP front-facing cameras Qualcomm Snapdragon 450 1.8GHz octa-core',
                'gallery'=>'https://www.lg.com/us/images/cell-phones/md07000541/gallery/medium01.jpg'
            ],
                [
                    'name'=>'LG G7',
                    'price'=>'219.00$',
                    'category'=>'L.G',
                    'description'=>'LG G7 G710 ThinQ 64GB Sprint + Factory GSM Unlocked - Platinum Gray / Blue - New',
                    'gallery'=>'https://pricematch.pk/uploadedstuff/productimages/41-LG-G7-ThinQ-128-GB.jpg'  
                ],
                [
                    'name'=>'LG V40 ThinQ',
                    'price'=>'$289.98',
                    'category'=>'L.G',
                    'description'=>'LG V40 ThinQ 64GB Sprint + Factory GSM Unlocked - LM-V405UA Aurora Black New',
                    'gallery'=>'https://www.kickmobiles.com/images/thumbs/0022224_lg-v40-thinq_808.jpeg'  
                ],
                [
                    'name'=>'Nexus',
                    'price'=>'300$',
                    'category'=>'Mortola',
                    'description'=>'Motorola Nexus 6 Blue 64GB GSM Unlocked New',
                    'gallery'=>'https://cdn-files.kimovil.com/phone_front/0001/31/thumb_30225_phone_front_big.jpeg'  
                ],
                [
                    'name'=>'Samsung Galaxy S9',
                    'price'=>'250$',
                    'category'=>'Samnsung',
                    'description'=>'Samsung Galaxy S9 - 64GB - Black (Worldwide GSM Unlocked)',
                    'gallery'=>'https://mobelat.com/wp-content/uploads/2018/03/samsung-galaxy-s9-thumb-mobelat.jpg'  
                ],
                    [
                        'name'=>'LG Velvet ',
                        'price'=>'300$',
                        'category'=>'L.G',
                        'description'=>'Brand New LG Velvet 5G 128GB(Illusion Sunset)LM-G900UM Unlocked with warranty',
                        'gallery'=>'https://www.lg.com/ca_en/images/cell-phones/md07512171/gallery/D1.jpg'  
                    ],
                    [
                        'name'=>'LG Wing',
                        'price'=>' $470.00',
                        'category'=>'L.G',
                        'description'=>'L.G Wing 5G LM-F100N 128GB GSM Unlocked! Very good condition!',  
                        'gallery'=>'https://www.lg.com/us/images/cell-phones/md07518563/gallery/desktop-02.jpg'               
                     ],
                    [
                        'name'=>'iPhone 8',
                        'price'=>'260$',
                        'category'=>'Apple',
                        'description'=>'iPhone 8 RED - 64GB',
                        'gallery'=>'https://r7w7i5f2.rocketcdn.me/wp-content/uploads/2021/03/iPhone-8-64GB-Red.jpg'  
                    ],
                    [
                        'name'=>'Redmi Note 10',
                        'price'=>'300$',
                        'category'=>'Xiaomi',
                        'description'=>'Redmi Note 10 Pro Vintage Bronze 6GB RAM 128GB Storage 120hz Factory Unlocked',
                        'gallery'=>'https://www.phonefinity.net/wp-content/uploads/redmi-note-10-green.jpg'  
                    ],
                    [
                            'name'=>'SAMSUNG GALAXY A12 ',
                            'price'=>'205$',
                            'category'=>'Samnsung',
                            'description'=>'SAMSUNG GALAXY A12 A125F/DS 128GB BLACK/BLUE/WHITE/RED 4GB RAM FACTORY UNLOCKED',
                            'gallery'=>'https://escapadeng.com/wp-content/uploads/2021/03/samsung_galaxy_a12.jpg'  
                    ],
                        [
                            'name'=>'SAMSUNG GALAXY A21s',
                            'price'=>'220$',
                            'category'=>'Samnsung',
                            'description'=>'SAMSUNG GALAXY A21s A217M/L 64GB BLACK/BLUE/WHITE/RED 4GB RAM FACTORY UNLOCKED',
                            'gallery'=>'https://cdn.talaco.net/talaco/assets/images/2020/06/01190208/SM_217_GalaxyA21s_Blue_Front.jpg'  
                        ],
                        [
                            'name'=>'Samsung Galaxy A22 ',
                            'price'=>'300$',
                            'category'=>'Samnsung',
                            'description'=>'New Samsung Galaxy A22 5G 6.6" 48MP Dual SIM 6GB 128GB Factory Unlocked Phone',
                            'gallery'=>'https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a22.jpg'  
                        ],
                        [
                            'name'=>'L.G K42',
                            'price'=>'180$',
                            'category'=>'L.G',
                            'description'=>'LG K42 Grey 64GB Dual Sim Factory Unlocked 2020 Android Smartphone',
                            'gallery'=>'https://med.csmobiles.com/194332-large_default/lg-k42-64gb-dual-sim-gris.jpg'  
                        ],
                        [
                            'name'=>'Iphone-X',
                            'price'=>'600$',
                            'category'=>'Apple',
                            'description'=>'Apple iPhone X - 64GB - Silver',
                            'gallery'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQomAkRs4y7LwHcrFwoc4hNOuuvolliKj1sS1adhC2WBZJUQi3zKFdaxAfyMEBZGbp4on4&usqp=CAU'  
                        ],
                        [
                            'name'=>'Iphone 11 pro',
                            'price'=>'1400$',
                            'category'=>'Apple',
                            'description'=>'AN IPHONE 11 PRO WITH A 64GB BRAND NEW',
                            'gallery'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQU0uBPWqK8QA94hkWXvt249Hnic-5dNcK8BrRp7YasgMwJn8onx07T99s249bw6IYIAd0&usqp=CAU'  
                            ],
                            [
                                'name'=>' iPhone 12 Pro Max',
                                'price'=>'2300$',
                                'category'=>'Apple',
                                'description'=>' iPhone 12 Pro Max - 256GB - Pacific Blue',
                                'gallery'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRbwnh16yWtnvhYUUAM6E5rNictUef47X0bP9dppEPI3TO35SUj_KK92lxO37C2Ealnapc&usqp=CAU'  
                            ],
                            [
                                'name'=>'Iphone 7',
                                'price'=>'400$',
                                'category'=>'Apple',
                                'description'=>'iPhone 7 32GB 128GB 256GB Unlocked Black Rose Gold Red Silver Gold',
                                'gallery'=>'https://cdn.alloallo.media/catalog/product/apple/iphone/iphone-7/iphone-7-black.jpg'  
                            ],
                            [
                                'name'=>'Iphone XS Max',
                                'price'=>'706$',
                                'category'=>'Apple',
                                'description'=>'A Brand New Iphone XS Max with the size of storage of 512GB',
                                'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/81N2BjAH2PL.jpg'  
                            ],
                            [
                                'name'=>'Samsung Galaxy S10',
                                'price'=>'500$',
                                'category'=>'Samnsung',
                                'description'=>'A Brand New Phone with 157g, 7.8mm thickness',
                                'gallery'=>'https://cdn-files.kimovil.com/phone_front/0002/92/thumb_191132_phone_front_big.jpeg'  
                            ], 
                            [
                                'name'=>'Samnsung A60',
                                'price'=>'300$',
                                'category'=>'Samnsung',
                                'description'=>'A Samnsung mobile with 6 GB 8GB RAM and 128GB',
                                'gallery'=>'https://i.ebayimg.com/images/g/t2QAAOSwTfNgRkNT/s-l640.jpg'  
                            ],
                                [
                                    'name'=>'Samnsung Galaxy S20',
                                    'price'=>'1000$',
                                    'category'=>'Samnsung ',
                                    'description'=>'a Samnsung Galaxy with 12GB of RAM',
                                    'gallery'=>'https://www.phonefinity.net/wp-content/uploads/s20-fe-navy.jpg'  
                                ],
                                [
                                    'name'=>'L.G phone',
                                    'price'=>'300$',
                                    'category'=>'L.G',
                                    'description'=>'',
                                    'gallery'=>'https://i.ebayimg.com/images/g/t2QAAOSwTfNgRkNT/s-l640.jpg'  
                                ],
                                [
                                    'name'=>'Smart Watch',
                                    'price'=>'30$',
                                    'category'=>'L.G',
                                    'description'=>'Willful Smart Watch for Android and iOS Phones Compatible iPhone Samsung, WaterProof for Men and Women Black',
                                    'gallery'=>'https://i.ebayimg.com/images/g/t2QAAOSwTfNgRkNT/s-l640.jpg'  
                                ],
                                [
                                    'name'=>'Smart Watch',
                                    'price'=>'50$',
                                    'category'=>'I.O.S',
                                    'description'=>'Smart Watch, 1.4 Touch Screen Smartwatch, Fitness Trackers with Heart Rate Monitor, Waterproof IP67',
                                    'gallery'=>'https://m.media-amazon.com/images/I/61+mseS94FL._AC_SS450_.jpg'  
                                ],
                                [
                                    'name'=>'HeadPhones',
                                    'price'=>'30$',
                                    'category'=>'yamay',
                                    'description'=>'Bluetooth Headphones with Mic,YAMAY Wireless Bluetooth',
                                    'gallery'=>'https://m.media-amazon.com/images/I/51m3FxbQ1ZL.jpg'  
                                    ],
                                    [
                                        'name'=>'HeadPhones',
                                        'price'=>'300$',
                                        'category'=>'Bose',
                                        'description'=>'Bose QuietComfort 35 II Wireless Headphones (Black)',
                                        'gallery'=>'https://media.croma.com/image/upload/v1605183501/Croma%20Assets/Entertainment/Headphones%20and%20Earphones/Images/8945035247646.png'  
                                    ],
                                    [
                                        'name'=>'HeadPhones',
                                        'price'=>'15$',
                                        'category'=>'on',
                                        'description'=>'onn. Bluetooth On-Ear Headphones, Blue',
                                        'gallery'=>'https://i5.walmartimages.com/asr/e02e2d52-5ade-4236-b24a-e9c88faadf46.8d82c070488397fe72d864004a9bac8b.png'  
                                    ],
                                    [
                                        'name'=>'EarPhones',
                                        'price'=>'3$',
                                        'category'=>'O.E.M',
                                        'description'=> 'earphone music WG-1001-1 is supplied by earphone music manufacturers, producers, suppliers on Global Sources,cheapest earbuds,type-c headband',
                                        'gallery'=>'https://p.globalsources.com/IMAGES/PDT/B5121308963/earphone-music.jpg'  
                                    ],
                                    [
                                        'name'=>'HeadPhones',
                                        'price'=>'18$',
                                        'category'=>'Toureya',
                                        'description'=>'Wireless headphones Bluetooth headsets Stereo Music earphone Gaming Headphone Wired earbud Speaker Phon',
                                        'gallery'=>'https://udaan.azureedge.net/products/hks32oxx2ve96ugzpcxp.jpg'  
                                        ],
                                        [
                                            'name'=>'AirPods',
                                            'price'=>'110$',
                                            'category'=>'L.G',
                                            'description'=>'TONE Free FN4 Wireless Bluetooth Earphones - Black',
                                            'gallery'=>'https://brain-images-ssl.cdn.dixons.com/5/9/10211695/u_10211695.jpg'  
                                        ],
                                        [
                                            'name'=>'AirPods',
                                            'price'=>'250$',
                                            'category'=>'Apple',
                                            'description'=>'Official Apple AirPods True Wireless Earphones with Mic',
                                            'gallery'=>'https://images.mobilefun.co.uk/graphics/450pixelp/62553.jpg'  
                                        ],
                                        [
                                            'name'=>'Ipad Pro',
                                            'price'=>'1000$',
                                            'category'=>'Apple',
                                            'description'=>'A Brand New Ipad Pro 11 with 256GB',
                                            'gallery'=>'https://www.phonefinity.net/wp-content/uploads/ipad-pro-11-space-gray-2020-1.jpg'  
                                        ],
                                        [
                                            'name'=>'Ipad Air',
                                            'price'=>'600$',
                                            'category'=>'Apple',
                                            'description'=>'10.9-inch iPad Air Wi-Fi 64GB - Space Gray',
                                            'gallery'=>'https://www.phonefinity.net/wp-content/uploads/ipad-air-2020-sky-blue-1.jpg'  
                                        ],
                                        [
                                            'name'=>'Ipad Air 2',
                                            'price'=>'300$',
                                            'category'=>'Apple',
                                            'description'=>'Ipad Air 2 with 128GB Wifi',
                                            'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/51TpWtt7WjL._AC_SY450_.jpg'  
                                        ],
                                        [
                                            'name'=>'Iphone 6',
                                            'price'=>'240$',
                                            'category'=>'Apple',
                                            'description'=>'a phone 64GB with 4.7-inch Retina HD display, 12-megapixel iSight camera',
                                            'gallery'=>'https://cellbuddy.in/wp-content/uploads/2019/11/71wFEBh9pPL._SL1500_.jpg'  
                                            ],
                                            [
                                                'name'=>'Iphone 6 plus',
                                                'price'=>'400$',
                                                'category'=>'Apple',
                                                'description'=>'Iphone 6 plus with 64GB',
                                                'gallery'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSzHvj4J76nRL3lxk62sstQUecVbW_E52y2nQan1ES3Bqj7hqShO1lWSv52PAnP7DJFXM&usqp=CAU'  
                                            ],
                                            [
                                                'name'=>'HUAWEI Y9a',
                                                'price'=>'300$',
                                                'category'=>'Huawei',
                                                'description'=>'64 MP Quad Camera | 40 W HUAWEI SuperCharge | 8 GB RAM + 128 GB ROM',
                                                'gallery'=>'https://img01.huaweifile.com/sg/ms/pe/pms/product/6941487206964/800_800_450E19C7D547C82F67C2576CCB18FB6B09F1A89EFFBE8F9Bmp.webp'  
                                            ],
                                            [
                                                'name'=>'HUAWEI Y8p',
                                                'price'=>'512$',
                                                'category'=>'Huawei',
                                                'description'=>'48 MP AI Triple Camera | 128 GB Storage | 6.3" OLED Display',
                                                'gallery'=>'https://www.dslr-zone.com/wp-content/uploads/2020/08/huawei-y8p-black-21072020-2.jpg'  
                                            ],
                                            [
                                                'name'=>'Samnsung Galaxy Note20 ',
                                                'price'=>'800$',
                                                'category'=>'Samnsung Galaxy ',
                                                'description'=>'',
                                                'gallery'=>'https://www.phonefinity.net/wp-content/uploads/note20-ultra-white-1.jpg'  
                                            ],
                                                [
                                                    'name'=>'HUAWEI P40',
                                                    'price'=>'750$',
                                                    'category'=>'Huawei',
                                                    'description'=>'HUAWEI P40 Pro / Dual SIM / 8 Go RAM / 256 Go ROM / AppGallery / Or',
                                                    'gallery'=>'https://consumer.huawei.com/content/dam/huawei-cbg-site/common/mkt/list-image/phones/p40-pro/p40-pro-gold.png'  
                                                ],
                                                [
                                                    'name'=>'Smart Watch',
                                                    'price'=>'300$',
                                                    'category'=>'Huawei',
                                                    'description'=>'Huawei Watch Fit 1.64" Vivid AMOLED Display | Quick-Workout Animations | 10 Days Battery Life ',
                                                    'gallery'=>'https://consumer-img.huawei.com/content/dam/huawei-cbg-site/common/mkt/pdp/wearables/watch-fit/dynamic/watch-fit/img/pc/huawei-watch-fit-personal-assistant-3.jpg'  
                                                ],
                                                [
                                                    'name'=>'Xiaomi Redmi Note 10 Pro',
                                                    'price'=>'300$',
                                                    'category'=>'Xiaomi',
                                                    'description'=>'Xiaomi Redmi Note 10 Pro 8GB RAM, 128GB - Onyx Gray',
                                                    'gallery'=>'https://dream2000.com/pub/media/catalog/product/cache/4da49bbc2916dfc05a00e156aaa19aa0/m/i/mi_redmi_note_10_pro_8g_128g_onyx_gray.jpg'  
                                                ],
                                                [
                                                    'name'=>'Xiaomi Mi 10 Pro',
                                                    'price'=>'1100$',
                                                    'category'=>'Xiaomi',
                                                    'description'=>'Xiaomi Mi 10 128GB, 8GB RAM, 6.67',
                                                    'gallery'=>'https://cdn.alzashop.com/ImgW.ashx?fd=f16&cd=XI208ax'  
                                                ],
                                                [
                                                    'name'=>'L.G G6',
                                                    'price'=>'300$',
                                                    'category'=>'L.G',
                                                    'description'=>'LG G6-32GB T-Mobile Unlocked Android Phone - Ice Platinum',
                                                    'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/81uw7rANIlL._AC_SX522_.jpg'  
                                                ],
        ]);
    }
}
