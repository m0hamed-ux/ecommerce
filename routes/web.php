<?php

use Illuminate\Support\Facades\Route;

$PRODUITS = [
    'Men' => [
        [
            'id' => 1,
            'name' => 'Classic Oxford Cotton Shirt',
            'price' => 45.00,
            'image' => 'https://images.unsplash.com/photo-1596755094514-f87e34085b2c?auto=format&fit=crop&w=800&q=80',
            'description' => 'A timeless classic white button-down shirt made from 100% organic cotton. Perfect for office wear or casual outings.'
        ],
        [
            'id' => 2,
            'name' => 'Slim Fit Denim Jeans',
            'price' => 59.99,
            'image' => 'https://images.unsplash.com/photo-1542272617-08f08630329e?auto=format&fit=crop&w=800&q=80',
            'description' => 'Dark wash slim fit jeans with a slight stretch for maximum comfort. Features a classic 5-pocket design.'
        ],
        [
            'id' => 3,
            'name' => 'Lightweight Bomber Jacket',
            'price' => 89.50,
            'image' => 'https://images.unsplash.com/photo-1591047139829-d91aecb6caea?auto=format&fit=crop&w=800&q=80',
            'description' => 'Olive green bomber jacket with ribbed cuffs and hem. Water-resistant outer shell ideal for transitional weather.'
        ],
        [
            'id' => 4,
            'name' => 'Casual Crew Neck T-Shirt',
            'price' => 25.00,
            'image' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?auto=format&fit=crop&w=800&q=80',
            'description' => 'Premium heavyweight cotton t-shirt in heather grey. Pre-shrunk to maintain fit wash after wash.'
        ],
        [
            'id' => 5,
            'name' => 'Leather Chelsea Boots',
            'price' => 120.00,
            'image' => 'https://images.unsplash.com/photo-1638318721455-2244243673c6?auto=format&fit=crop&w=800&q=80',
            'description' => 'Handcrafted brown leather Chelsea boots with durable elastic side panels and a non-slip rubber sole.'
        ],
        [
            'id' => 6,
            'name' => 'Wool Blend Overcoat',
            'price' => 199.00,
            'image' => 'https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=800&q=80',
            'description' => 'Elegant camel-colored overcoat made from a warm wool blend. Features a notched lapel and three-button closure.'
        ],
        [
            'id' => 7,
            'name' => 'Chino Shorts',
            'price' => 35.00,
            'image' => 'https://images.unsplash.com/photo-1617114919297-3c8ddbec0c1b?auto=format&fit=crop&w=800&q=80',
            'description' => 'Breathable beige chino shorts tailored for a relaxed fit. Great for summer days and casual weekends.'
        ],
        [
            'id' => 8,
            'name' => 'Cable Knit Sweater',
            'price' => 65.00,
            'image' => 'https://images.unsplash.com/photo-1610652492500-ded49ceeb378?auto=format&fit=crop&w=800&q=80',
            'description' => 'Cozy navy blue cable knit sweater made from merino wool. Soft to the touch and excellent for layering.'
        ],
        [
            'id' => 9,
            'name' => 'Plaid Flannel Shirt',
            'price' => 40.00,
            'image' => 'https://images.unsplash.com/photo-1621335829175-95f437384d7c?auto=format&fit=crop&w=800&q=80',
            'description' => 'Rugged red and black buffalo plaid flannel shirt. Double brushed for extra softness and warmth.'
        ],
        [
            'id' => 10,
            'name' => 'Tailored Suit Jacket',
            'price' => 150.00,
            'image' => 'https://images.unsplash.com/photo-1594938298603-c8148c47e356?auto=format&fit=crop&w=800&q=80',
            'description' => 'Modern charcoal grey suit jacket with a slim cut. Features interior pockets and a silk lining.'
        ]
    ],
    'Women' => [
        [
            'id' => 11,
            'name' => 'Floral Summer Dress',
            'price' => 55.00,
            'image' => 'https://images.unsplash.com/photo-1572804013309-59a88b7e92f1?auto=format&fit=crop&w=800&q=80',
            'description' => 'Lightweight midi dress with a vibrant floral print. Features a wrap design and flutter sleeves.'
        ],
        [
            'id' => 12,
            'name' => 'High-Waist Mom Jeans',
            'price' => 49.99,
            'image' => 'https://images.unsplash.com/photo-1541099649105-f69ad21f3246?auto=format&fit=crop&w=800&q=80',
            'description' => 'Vintage-inspired blue denim jeans with a high waist and tapered leg. 100% cotton for an authentic feel.'
        ],
        [
            'id' => 13,
            'name' => 'Oversized Beige Blazer',
            'price' => 75.00,
            'image' => 'https://images.unsplash.com/photo-1584273143981-41c073dfe8f8?auto=format&fit=crop&w=800&q=80',
            'description' => 'Chic oversized blazer in neutral beige. Perfect for elevating a casual look or for professional office wear.'
        ],
        [
            'id' => 14,
            'name' => 'Knitted Turtleneck Sweater',
            'price' => 45.00,
            'image' => 'https://images.unsplash.com/photo-1583846783214-7229a91b20ed?auto=format&fit=crop&w=800&q=80',
            'description' => 'Chunky knit turtleneck sweater in cream. Features dropped shoulders and a relaxed boxy fit.'
        ],
        [
            'id' => 15,
            'name' => 'Pleated Midi Skirt',
            'price' => 39.95,
            'image' => 'https://images.unsplash.com/photo-1583496661160-fb5886a0aaaa?auto=format&fit=crop&w=800&q=80',
            'description' => 'Elegant satin-finish pleated skirt in emerald green. Elastic waistband ensures a comfortable fit.'
        ],
        [
            'id' => 16,
            'name' => 'Classic Trench Coat',
            'price' => 110.00,
            'image' => 'https://images.unsplash.com/photo-1621275323956-2b47e85c1d81?auto=format&fit=crop&w=800&q=80',
            'description' => 'Timeless double-breasted trench coat with a waist belt and storm flap. Water-repellent fabric.'
        ],
        [
            'id' => 17,
            'name' => 'Leather Moto Jacket',
            'price' => 135.00,
            'image' => 'https://images.unsplash.com/photo-1551488852-080175b94516?auto=format&fit=crop&w=800&q=80',
            'description' => 'Edgy black faux leather motorcycle jacket with silver hardware and zippered pockets.'
        ],
        [
            'id' => 18,
            'name' => 'White Sneaker Essentials',
            'price' => 60.00,
            'image' => 'https://images.unsplash.com/photo-1595950653106-6c9ebd614d3a?auto=format&fit=crop&w=800&q=80',
            'description' => 'Minimalist white leather sneakers. Low-top profile with a cushioned insole for all-day walking comfort.'
        ],
        [
            'id' => 19,
            'name' => 'Boho Maxi Cardigan',
            'price' => 50.00,
            'image' => 'https://images.unsplash.com/photo-1520591799316-6b30425429aa?auto=format&fit=crop&w=800&q=80',
            'description' => 'Long open-front cardigan with a bohemian pattern. Soft knit fabric ideal for breezy evenings.'
        ],
        [
            'id' => 20,
            'name' => 'Silk Blouse',
            'price' => 85.00,
            'image' => 'https://images.unsplash.com/photo-1564257631407-4deb1f99d992?auto=format&fit=crop&w=800&q=80',
            'description' => 'Luxurious silk button-up blouse in blush pink. Features a classic collar and buttoned cuffs.'
        ]
    ],
    'Babies' => [
        [
            'id' => 21,
            'name' => 'Organic Cotton Bodysuit Set',
            'price' => 25.00,
            'image' => 'https://images.unsplash.com/photo-1522771930-78848d9293e8?auto=format&fit=crop&w=800&q=80',
            'description' => 'Pack of 3 soft organic cotton bodysuits with snap closures. Hypoallergenic and gentle on sensitive skin.'
        ],
        [
            'id' => 22,
            'name' => 'Knitted Baby Romper',
            'price' => 32.00,
            'image' => 'https://images.unsplash.com/photo-1519689680058-324335c77eba?auto=format&fit=crop&w=800&q=80',
            'description' => 'Adorable grey knitted romper with wooden buttons. Keeps baby warm while allowing freedom of movement.'
        ],
        [
            'id' => 23,
            'name' => 'Soft Fleece Blanket',
            'price' => 18.00,
            'image' => 'https://images.unsplash.com/photo-1515488042361-ee00e0ddd4e4?auto=format&fit=crop&w=800&q=80',
            'description' => 'Plush fleece baby blanket with a cute star pattern. Perfect for the stroller or nap time.'
        ],
        [
            'id' => 24,
            'name' => 'Baby Leather Moccasins',
            'price' => 22.00,
            'image' => 'https://images.unsplash.com/photo-1506809632128-d7629b352425?auto=format&fit=crop&w=800&q=80',
            'description' => 'Soft-sole leather moccasins in tan. Elastic opening ensures they stay on little feet.'
        ],
        [
            'id' => 25,
            'name' => 'Hooded Animal Towel',
            'price' => 15.00,
            'image' => 'https://images.unsplash.com/photo-1555252333-9f8e92e65df4?auto=format&fit=crop&w=800&q=80',
            'description' => 'Ultra-absorbent terry cloth towel with a bear hood design. Makes bath time fun and cozy.'
        ],
        [
            'id' => 26,
            'name' => 'Denim Overalls',
            'price' => 28.00,
            'image' => 'https://images.unsplash.com/photo-1519238263496-6353675842f6?auto=format&fit=crop&w=800&q=80',
            'description' => 'Classic denim overalls with adjustable straps and snap openings for easy diaper changes.'
        ],
        [
            'id' => 27,
            'name' => 'Sleep & Play Pajamas',
            'price' => 20.00,
            'image' => 'https://images.unsplash.com/photo-1514339304626-4447385d5642?auto=format&fit=crop&w=800&q=80',
            'description' => 'Footed pajamas with a 2-way zipper. Made from breathable cotton with a cute dinosaur print.'
        ],
        [
            'id' => 28,
            'name' => 'Winter Beanie & Mittens',
            'price' => 16.00,
            'image' => 'https://images.unsplash.com/photo-1519457431-44ccd64a579b?auto=format&fit=crop&w=800&q=80',
            'description' => 'Matching knit beanie and mittens set in pastel pink. Lined with fleece for extra warmth.'
        ],
        [
            'id' => 29,
            'name' => 'Muslin Swaddle Cloths',
            'price' => 24.00,
            'image' => 'https://images.unsplash.com/photo-1556012018-50c5c0da73bf?auto=format&fit=crop&w=800&q=80',
            'description' => 'Set of 2 large muslin swaddle blankets. Breathable fabric prevents overheating during sleep.'
        ],
        [
            'id' => 30,
            'name' => 'Formal Bowtie Suit',
            'price' => 35.00,
            'image' => 'https://images.unsplash.com/photo-1504198266287-1659872e6590?auto=format&fit=crop&w=800&q=80',
            'description' => 'Cute formal outfit including suspender pants, a white shirt, and a detachable bowtie.'
        ]
    ],
    'Sports' => [
        [
            'id' => 31,
            'name' => 'Pro Running Shoes',
            'price' => 110.00,
            'image' => 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?auto=format&fit=crop&w=800&q=80',
            'description' => 'High-performance red running shoes with responsive cushioning and breathable mesh upper.'
        ],
        [
            'id' => 32,
            'name' => 'Compression Leggings',
            'price' => 45.00,
            'image' => 'https://images.unsplash.com/photo-1534438327276-14e5300c3a48?auto=format&fit=crop&w=800&q=80',
            'description' => 'Moisture-wicking high-waisted leggings. Provides muscle support and flexibility for gym workouts.'
        ],
        [
            'id' => 33,
            'name' => 'Breathable Sport Tee',
            'price' => 25.00,
            'image' => 'https://images.unsplash.com/photo-1518459031867-a89b944bffe4?auto=format&fit=crop&w=800&q=80',
            'description' => 'Quick-dry athletic t-shirt. Lightweight fabric keeps you cool during intense training sessions.'
        ],
        [
            'id' => 34,
            'name' => 'Yoga Mat Premium',
            'price' => 35.00,
            'image' => 'https://images.unsplash.com/photo-1601925260368-ae2f83cf8b7f?auto=format&fit=crop&w=800&q=80',
            'description' => 'Non-slip 6mm thick yoga mat. Eco-friendly material with carrying strap included.'
        ],
        [
            'id' => 35,
            'name' => 'Sports Hoodie',
            'price' => 55.00,
            'image' => 'https://images.unsplash.com/photo-1556906781-9a412961d28c?auto=format&fit=crop&w=800&q=80',
            'description' => 'Fleece-lined sports hoodie with a kangaroo pocket. Ideal for outdoor jogging in cooler weather.'
        ],
        [
            'id' => 36,
            'name' => 'Athletic Shorts',
            'price' => 28.00,
            'image' => 'https://images.unsplash.com/photo-1539185441755-769473a23570?auto=format&fit=crop&w=800&q=80',
            'description' => 'Lightweight running shorts with built-in liner and zippered key pocket.'
        ],
        [
            'id' => 37,
            'name' => 'Training Duffle Bag',
            'price' => 40.00,
            'image' => 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?auto=format&fit=crop&w=800&q=80',
            'description' => 'Durable gym bag with separate shoe compartment and water-resistant base.'
        ],
        [
            'id' => 38,
            'name' => 'Performance Socks Set',
            'price' => 15.00,
            'image' => 'https://images.unsplash.com/photo-1560159752-d68f2e2936a2?auto=format&fit=crop&w=800&q=80',
            'description' => 'Pack of 3 pairs of cushioned athletic socks. Arch support and anti-blister technology.'
        ],
        [
            'id' => 39,
            'name' => 'Water Bottle 1L',
            'price' => 20.00,
            'image' => 'https://images.unsplash.com/photo-1602143407151-11115cd4e69b?auto=format&fit=crop&w=800&q=80',
            'description' => 'Insulated stainless steel water bottle. Keeps drinks cold for 24 hours during workouts.'
        ],
        [
            'id' => 40,
            'name' => 'Sports Cap',
            'price' => 22.00,
            'image' => 'https://images.unsplash.com/photo-1588850561407-ed78c282e89b?auto=format&fit=crop&w=800&q=80',
            'description' => 'Adjustable baseball cap with sweat-wicking band. Provides sun protection for outdoor sports.'
        ]
    ],
    'Accessories' => [
        [
            'id' => 41,
            'name' => 'Classic Aviator Sunglasses',
            'price' => 130.00,
            'image' => 'https://images.unsplash.com/photo-1572635196237-14b3f281503f?auto=format&fit=crop&w=800&q=80',
            'description' => 'Gold-frame aviator sunglasses with polarized green lenses. 100% UV protection.'
        ],
        [
            'id' => 42,
            'name' => 'Leather Crossbody Bag',
            'price' => 95.00,
            'image' => 'https://images.unsplash.com/photo-1548036328-c9fa89d128fa?auto=format&fit=crop&w=800&q=80',
            'description' => 'Compact leather crossbody bag in cognac. Features gold-tone hardware and adjustable strap.'
        ],
        [
            'id' => 43,
            'name' => 'Minimalist Wristwatch',
            'price' => 110.00,
            'image' => 'https://images.unsplash.com/photo-1524592094714-0f0654e20314?auto=format&fit=crop&w=800&q=80',
            'description' => 'Sleek analog watch with a black face and stainless steel mesh strap. Water-resistant up to 30m.'
        ],
        [
            'id' => 44,
            'name' => 'Silk Scarf',
            'price' => 40.00,
            'image' => 'https://images.unsplash.com/photo-1584030373081-f37b7bb4fa8e?auto=format&fit=crop&w=800&q=80',
            'description' => 'Square silk scarf with a paisley print. Can be worn around the neck, hair, or tied to a bag.'
        ],
        [
            'id' => 45,
            'name' => 'Canvas Tote Bag',
            'price' => 25.00,
            'image' => 'https://images.unsplash.com/photo-1597484661643-2f5fef640dd1?auto=format&fit=crop&w=800&q=80',
            'description' => 'Durable heavy-duty canvas tote. Spacious interior suitable for groceries, books, or beach gear.'
        ],
        [
            'id' => 46,
            'name' => 'Leather Wallet',
            'price' => 55.00,
            'image' => 'https://images.unsplash.com/photo-1627123424574-18bd0aef2eb1?auto=format&fit=crop&w=800&q=80',
            'description' => 'Bifold premium leather wallet with RFID blocking technology. Holds 8 cards and cash.'
        ],
        [
            'id' => 47,
            'name' => 'Wide Brim Fedora Hat',
            'price' => 45.00,
            'image' => 'https://images.unsplash.com/photo-1514327605112-b887c0e61c0a?auto=format&fit=crop&w=800&q=80',
            'description' => 'Stylish wool felt fedora in black with a leather band. Adds a sophisticated touch to any outfit.'
        ],
        [
            'id' => 48,
            'name' => 'Gold Plated Hoop Earrings',
            'price' => 30.00,
            'image' => 'https://images.unsplash.com/photo-1635767798638-3e252a071427?auto=format&fit=crop&w=800&q=80',
            'description' => 'Classic medium-sized hoop earrings. 18k gold plated over brass, hypoallergenic.'
        ],
        [
            'id' => 49,
            'name' => 'Travel Backpack',
            'price' => 75.00,
            'image' => 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?auto=format&fit=crop&w=800&q=80',
            'description' => 'Modern travel backpack with laptop sleeve and anti-theft pockets. Water-resistant fabric.'
        ],
        [
            'id' => 50,
            'name' => 'Leather Belt',
            'price' => 35.00,
            'image' => 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?auto=format&fit=crop&w=800&q=80',
            'description' => 'Full-grain leather belt in dark brown with a brushed silver buckle. durable and stylish.'
        ]
    ]
];


// Home page
Route::get('/', function () use ($PRODUITS) {
    $products = $PRODUITS;
    return view('home', ['products' => $products, 'categories' => array_keys($PRODUITS)]);
});

// All products or category products
Route::get('/products/{category}', function ($category) use ($PRODUITS) {
    if ($category === 'all') {
        // Show all products from all categories
        $allProducts = [];
        foreach ($PRODUITS as $cat => $items) {
            $allProducts = array_merge($allProducts, $items);
        }
        return view('products', ['products' => $allProducts, 'category' => 'all', 'categories' => array_keys($PRODUITS)]);
    }
    
    if (!array_key_exists($category, $PRODUITS)) {
        abort(404);
    }
    
    $products = $PRODUITS[$category];
    return view('products', ['products' => $products, 'category' => $category, 'categories' => array_keys($PRODUITS)]);
});

// Individual product detail page
Route::get('/product/{id}', function ($id) use ($PRODUITS) {
    $product = null;
    $productCategory = null;
    
    // Find the product by ID
    foreach ($PRODUITS as $category => $products) {
        foreach ($products as $p) {
            if ($p['id'] == $id) {
                $product = $p;
                $productCategory = $category;
                break 2;
            }
        }
    }
    
    if (!$product) {
        abort(404);
    }
    
    // Get related products from the same category
    $relatedProducts = [];
    if ($productCategory) {
        foreach ($PRODUITS[$productCategory] as $p) {
            if ($p['id'] != $id && count($relatedProducts) < 4) {
                $relatedProducts[] = $p;
            }
        }
    }
    
    return view('product-detail', [
        'product' => $product, 
        'relatedProducts' => $relatedProducts
    ]);
});

// About page
Route::get('/about', function () {
    return view('about');
});

// Contact page
Route::get('/contact', function () {
    return view('contact');
});








