<?php

namespace Database\Seeders;

use App\Models\hotel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        hotel::create([
            'Name' => 'Safi Royal Luxury Metropolitan',
            'Rating' => '5',
            'City' => 'San Pedro Garza Garcia',
            'Price_per_night' => 3193,
            'Image' => 'https://cf.bstatic.com/xdata/images/hotel/square200/323227982.webp?k=df0d1e1b742beab7d2f91c18ea976fb4aa52514bef50f07c55db11f74ca36f7c&o=&s=1',
        ]);

        hotel::create([
            'Name' => 'Hilton Garden Inn Monterrey Obispado',
            'Rating' => '3',
            'City' => 'Monterrey',
            'Price_per_night' => 1672,
            'Image' => 'https://cf.bstatic.com/xdata/images/hotel/square200/250295075.webp?k=c23d42cee139dc513cc1706c7092286d947899bbbfec1e98c9aaba3201cafc82&o=&s=1',
        ]);
        hotel::create([
            'Name' => 'Holiday Inn Express & Suites Monterrey Valle, an IHG Hotel',
            'Rating' => '3',
            'City' => 'San Pedro Garza Garcia',
            'Price_per_night' => 1804,
            'Image' => 'https://cf.bstatic.com/xdata/images/hotel/square200/388860061.webp?k=ae9c6f2edf66cbac2113e43b1042b1a62f0983f4ef564c65d8609f8ab3a4d566&o=&s=1',
        ]);
        hotel::create([
            'Name' => 'Fiesta Americana Monterrey Pabellón M.',
            'Rating' => '5',
            'City' => 'Monterrey',
            'Price_per_night' => 2526,
            'Image' => 'https://cf.bstatic.com/xdata/images/hotel/square200/293189385.webp?k=00efd44d57b01f806eea287ec221eb774f333d04bd80d1ab66856fb5ac307d10&o=&s=1',
        ]);
        hotel::create([
            'Name' => 'Best Western PREMIER Monterrey Aeropuerto',
            'Rating' => '5',
            'City' => 'Apodaca',
            'Price_per_night' => 1632,
            'Image' => 'https://cf.bstatic.com/xdata/images/hotel/square200/169381373.webp?k=a2fb31fa340505b2c4dbcea3d93f4a7837870407f7439c7b83d5598004d6c49c&o=&s=1',
        ]);
        hotel::create([
            'Name' => 'Ramada Encore by Wyndham Monterrey Apodaca Zona Aeropuerto',
            'Rating' => '4',
            'City' => 'Apodaca',
            'Price_per_night' => 1394,
            'Image' => 'https://cf.bstatic.com/xdata/images/hotel/square200/282471769.webp?k=527a689d7153fde254fa9c88ce64500dc43458658b286a68710ea43af5841d5d&o=&s=1',
        ]);
        hotel::create([
            'Name' => 'Holiday Inn Express - Monterrey - Fundidora, an IHG Hotel',
            'Rating' => '4',
            'City' => 'Monterrey',
            'Price_per_night' => 1439,
            'Image' => 'https://cf.bstatic.com/xdata/images/hotel/square200/390669653.webp?k=b5b9c864da1d8bf7271308d59609296fb99daf336ad207c0f939b981eacbda99&o=&s=1',
        ]);
        hotel::create([
            'Name' => 'Camino Real Fashion Drive Monterrey',
            'Rating' => '5',
            'City' => 'San Pedro Garza Garcia',
            'Price_per_night' => 2631,
            'Image' => 'https://cf.bstatic.com/xdata/images/hotel/square200/342983464.webp?k=e434292b8e9888c28d55c69a39d7bba5aaeccd51371f8d938f4b8b6f484f5c69&o=&s=1',
        ]);
        hotel::create([
            'Name' => 'Grand Fiesta Americana Monterrey Valle',
            'Rating' => '5',
            'City' => 'San Pedro Garza Garcia',
            'Price_per_night' => 3109,
            'Image' => 'https://cf.bstatic.com/xdata/images/hotel/square200/266620281.webp?k=0a58b8f914a187b37f30acc2ee1bb87a02954335cf9d9504111837e3682e1947&o=&s=1',
        ]);
        hotel::create([
            'Name' => 'Four Points by Sheraton Galerias Monterrey',
            'Rating' => '5',
            'City' => 'San Pedro Garza Garcia',
            'Price_per_night' => 1315,
            'Image' => 'https://cf.bstatic.com/xdata/images/hotel/square200/448711786.webp?k=a6a1bacfb6031d258f2c2ffed055d4efbb05c13ddd323e24bda891eff19ff99c&o=&s=1',
        ]);
        hotel::create([
            'Name' => 'Wyndham Garden Monterrey Valle Real',
            'Rating' => '3',
            'City' => 'Monterrey',
            'Price_per_night' => 1356,
            'Image' => 'https://cf.bstatic.com/xdata/images/hotel/square200/152734160.webp?k=33ee3dd6b9faed39eef933804e7de79516e312056a81226c6c6c7a306debcfd4&o=&s=1',
        ]);
        hotel::create([
            'Name' => 'Safi Royal Luxury Centro',
            'Rating' => '5',
            'City' => 'Monterrey',
            'Price_per_night' => 1355,
            'Image' => 'https://cf.bstatic.com/xdata/images/hotel/square200/271052697.webp?k=e8584847e3858cc4e288128bedd490b226dcca0bec0a75f799ab1a4c6bb4209b&o=',
        ]);
        hotel::create([
            'Name' => 'Holiday Inn & Suites - Monterrey Apodaca Zona Airport, an IHG Hotel',
            'Rating' => '5',
            'City' => 'Apodaca',
            'Price_per_night' => 1619,
            'Image' => 'https://cf.bstatic.com/xdata/images/hotel/square200/252423621.webp?k=084dcefa46f3e7b4ddc964cdec11bb1ba8ca7e59c3f966772822a5310ec17754&o=&s=1',
        ]);
        hotel::create([
            'Name' => 'Hampton by Hilton Monterrey Galerias Obispado',
            'Rating' => '3',
            'City' => 'Monterrey',
            'Price_per_night' => 1586,
            'Image' => 'https://cf.bstatic.com/xdata/images/hotel/square200/81342678.webp?k=7111968e12bdfb8ec11633ae0d83305605920a86748c0ba780dd93a862323dfe&o=&s=1',
        ]);
        hotel::create([
            'Name' => 'Best Western PLUS Monterrey Airport',
            'Rating' => '3',
            'City' => 'Apodaca',
            'Price_per_night' => 1392,
            'Image' => 'https://cf.bstatic.com/xdata/images/hotel/square200/169166843.webp?k=e7a85b4856bf0130eda92a4621496a256d663646e097af21e844b9afb1360f77&o=&s=1',
        ]);
        hotel::create([
            'Name' => 'Holiday Inn Express Monterrey Galerias-San Jeronimo, an IHG Hotel',
            'Rating' => '4',
            'City' => 'Monterrey',
            'Price_per_night' => 1319,
            'Image' => 'https://cf.bstatic.com/xdata/images/hotel/square200/230129713.webp?k=af7098b6cd37635054100f448036860940daa0123e50db4d5fac28cac3ed27b5&o=&s=1',
        ]);
        hotel::create([
            'Name' => 'Four Points by Sheraton Monterrey Linda Vista',
            'Rating' => '4',
            'City' => 'Guadalupe',
            'Price_per_night' => 1249,
            'Image' => 'https://cf.bstatic.com/xdata/images/hotel/square200/136472634.webp?k=5a9f6ce0313788891fdd7857ef7e25c06623117038a10e60b6ed9e46e3f6b61b&o=&s=1',
        ]);
        hotel::create([
            'Name' => 'Safi Royal Luxury Valle',
            'Rating' => '5',
            'City' => 'San Pedro Garza Garcia',
            'Price_per_night' => 2790,
            'Image' => 'https://cf.bstatic.com/xdata/images/hotel/square200/79028993.webp?k=105c13d3f225c781aaed3b7e7c7230c46e7451cf97dfb539650e588c7612beab&o=&s=1',
        ]);
        hotel::create([
            'Name' => 'Camino Real Monterrey',
            'Rating' => '5',
            'City' => 'San Pedro Garza Garcia',
            'Price_per_night' => 2582,
            'Image' => 'https://cf.bstatic.com/xdata/images/hotel/square200/339691354.webp?k=b15ef7c79ffe1ef4dcdad9d8a37e350ef17412eddd00469c40d6d7efb6b0f49b&o=&s=1',
        ]);
        hotel::create([
            'Name' => 'Holiday Inn Monterrey Norte, an IHG Hotel',
            'Rating' => '3',
            'City' => 'San Nicolas de los Garza',
            'Price_per_night' => 1900,
            'Image' => 'https://cf.bstatic.com/xdata/images/hotel/square200/247020980.webp?k=a4961f99453508ce4dee66495200a3ede5099c16c805a7f9356111007f376958&o=&s=1',
        ]);
    }
}


