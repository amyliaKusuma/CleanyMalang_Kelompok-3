<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaundryController extends Controller
{
    private $laundryData = [
        'le-choix' => [
            'name' => 'Le Choix Laundry',
            'logo' => 'images/le choix.png',
            'description' => 'Le Choix Laundry, laundry premium di Malang, menawarkan layanan berkualitas dengan mesin canggih dan tenaga profesional. Dikenal aman dan berpengalaman, Le Choix Laundry siap menangani berbagai jenis pakaian, termasuk yang membutuhkan metode khusus. Pilihan tepat untuk laundry terbaik di Malang!',
            'operational_hours' => 'Senin - Sabtu: 08.00 - 16.00 WIB',
            'contact' => '(0341) 578578',
            'map_iframe' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.3119035943637!2d112.61695637476797!3d-7.966682892058209!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd62829fbcd24ff%3A0xc16b56ddd7ca57dc!2sLe%20Choix%20Laundry%20and%20Dry%20Clean!5e0!3m2!1sen!2sid!4v1732161361388!5m2!1sen!2sid',
            'address' => 'Jl. Pahlawan Trip No.23A, Oro-oro Dowo, Kec. Klojen, Kota Malang, Jawa Timur 65119',
            'services' => [
                'Cuci Kiloan' => 'Rp.50.000/kg',
                'Cuci Bed Cover' => 'Rp.60.000/kg',
                'Cuci Satuan' => 'Rp.5000/kg',
                'Cuci Sepatu' => 'Rp.20.000/kg',
                'Cuci Karpet' => 'Rp.60.000/kg'
            ],
            'gallery' => [
                'images/le-choix/gallery1.png',
                'images/le-choix/gallery2.png',
                'images/le-choix/gallery3.png'
            ],
            'reviews' => [
                ['text' => 'Premium self-service laundry in Malang', 'rating' => 5],
                ['text' => 'Great service', 'rating' => 5],
                ['text' => 'Quick service', 'rating' => 5],
                ['text' => 'Great service, clothes clean and neatly ironed and folded. Dropped off in the morning, ready later the same day.', 'rating' => 4],
                ['text' => 'Satisfactory service. Thank you Oxy', 'rating' => 5],
                ['text' => 'The bro is very helpful, but its okay to subscribe every week', 'rating' => 5]
            ]
        ],
        'atlantic-prime' => [
            'name' => 'ATLANTIC PRIME',
            'logo' => 'images/atlantic-prime.png',
            'description' => 'di ATLANTIC PRIME, setiap barang yang akan kamu laundry, akan dicuci menggunakan mesin cuci yang modern. Begitu juga dengan tahap pengeringan sampai setrikanya. Apalagi, Atlantic Prime menyediakan layanan Dry Cleaning yang sangat bermanfaat bagimu yang ingin laundry baju tertentu.',
            'operational_hours' => 'Senin - Minggu: 07.00 - 20.00 WIB',
            'contact' => '0817 0533 488',
            'address' => 'Jl. Lkr. Blimbing Indah No.9, Pandanwangi, Kec. Blimbing, Kota Malang, Jawa Timur 65126',
            'map_iframe' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15805.984249908946!2d112.65271389999997!3d-7.947578849999987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629909f398be3%3A0x84bfb6903b4af37b!2sAtlantic%20Prime%20Laundry%20%26%20Dry%20Cleaning!5e0!3m2!1sen!2sid!4v1732163249276!5m2!1sen!2sid',
            'services' => [
                'Cuci Kiloan' => 'Rp.20.000/kg',
                'Cuci Satuan' => 'Rp.2.000/kg',
                'Cuci Sprei' => 'Rp.30.000/kg',
                'Cuci sepatu' => 'Rp.15.000/kg',
                'Cuci Karpet' => 'Rp.40.000/kg'
            ],
            'gallery' => [
                'images/atlantic-prime/foto1.png',
                'images/atlantic-prime/foto2.png',
                'images/atlantic-prime/foto3.png'
            ],
            'reviews' => [
                ['text' => 'pelayanan ramah bgttt, bisa pilih parfume, terima kasih', 'rating' => 5],
                ['text' => 'Pelayanan sesuai dengan yang dijanjikan, setiap baju dilabeli sehingga kemungkinan tertukar kecil Bisa cuci cepat, hari ini naruh cucian besok bisa jadi tapi ya ada charge tambahan, dan hitungannya tetap kiloan', 'rating' => 4],
                ['text' => 'Tempat mencuci bantal guling, bersih dan wangi. Akan di beritahu lewat wa saat sudah selesai laundryan nya, ada jasa mengantarkan laundryan juga', 'rating' => 4],
                ['text' => 'Parfumnya tahan lama', 'rating' => 5],
                ['text' => 'Pelayanan ramah dan cepat. Sangat membantu. Parkir mudah dan luas. Buka sampai malam.', 'rating' => 4]
            ]
        ],
        'wiranas' => [
            'name' => 'Wiranas Laundry & Dry Cleaning',
            'logo' => 'images/wiranas.png',
            'description' => 'Di Wiranas Laundry & Dry Cleaning, kamu akan mendapatkan jasa gratis antar setiap barang yang telah selesai dicuci dan disetrika dengan rapi. Hasilnya, tentu saja tidak akan mengecewakan. Kamu juga bisa mengatur waktu laundry selesai sesuai dengan keinginan. Kalau kamu langsung datang ke tempatnya, kamu akan dilayani dengan sangat ramah.',
            'operational_hours' => 'Senin - Minggu: Pukul 07.00 – 19.00 WIB',
            'contact' => '(0341) 416088',
            'address' => 'Jl. R. Tumenggung Suryo No.131 E, Purwantoro, Kec. Blimbing, Kota Malang, Jawa Timur 65123',
            'map_iframe' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15805.033942027683!2d112.63830025!3d-7.972215800000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629ab917264cb%3A0x8d3dbbc5d9c35315!2sWiranas%20Laundry!5e0!3m2!1sen!2sid!4v1732163402905!5m2!1sen!2sid',
            'services' => [
                'Cuci Kiloan' => 'Rp.7.000/kg',
                'Cuci Sepatu' => 'Rp.20.000/kg',
                'Cuci Satuan' => 'Rp.5.000/kg',
                'Cuci Sprei' => 'Rp.12.000/kg',
                'Cuci Karpet' => 'Rp.30.000/kg'
            ],
            'gallery' => [
                'images/wiranas/w1.png',
                'images/wiranas/w2.png',
                'images/wiranas/w3.png'
            ],
            'reviews' => [
                ['text' => 'Profesional laundry and dry clean', 'rating' => 5],
                ['text' => 'Nice and clean laundry', 'rating' => 5],
                ['text' => 'Fast and precise service', 'rating' => 5],
                ['text' => 'Optimal service', 'rating' => 5],
                ['text' => 'Friendly service, free delivery', 'rating' => 5],
                ['text' => 'Good friendly and clean', 'rating' => 5]
            ]
            ],
        'oxy' => [
            'name' => 'Oxy CoinLaundry',
            'logo' => 'images/oxy.png',
            'description' => 'Kalau kamu mencari laundry Suhat Malang, maka jawabannya adalah Oxy Laundry. Bisa dikatakan, layanan dari Oxy Laundry itu sangat lengkap. Bahkan kamu bisa melakukan self-service di sini. Jadi, kamu dapat mencuci sendiri dengan peralatan dan perlengkapan yang sudah mereka sediakan. Harganya juga standar. Dan hasil pengerjaannya, tergolong cepat. ',
            'operational_hours' => 'Senin - Minggu: 07.00 - 22.00 WIB',
            'contact' => '0813 8038 3735',
            'address' => 'Jl. Soekarno – Hatta No.76a, Mojolangu, Kec. Lowokwaru, Kota Malang, Jawa Timur 65142',
            'map_iframe' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15806.357018232571!2d112.61677826977535!3d-7.937893999999971!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629e0d9449ef3%3A0xa90ec7870b8c3240!2sOxy%20Laundry%20Soekarno%20Hatta!5e0!3m2!1sen!2sid!4v1732163501048!5m2!1sen!2sid',
            'services' => [
                'Cuci Kiloan' => 'Rp.10.000/kg',
                'Cuci Sepatu' => 'Rp.25.000/kg',
                'Cuci Satuan' => 'Rp.8.000/kg',
                'Cuci Sprei' => 'Rp.30.000/kg',
                'Cuci Karpet' => 'Rp.50.000/kg'
            ],
            'gallery' => [
                'images/oxy/o1.png',
                'images/oxy/o2.png',
                'images/oxy/o3.png'
            ],
            'reviews' => [
                ['text' => 'Always go there', 'rating' => 5],
                ['text' => 'nice', 'rating' => 5],
                ['text' => 'Great, clean, friendly for sure', 'rating' => 5],
                ['text' => 'Very fragrant, friendly staff, fast delivery, only the price is a little more expensive', 'rating' => 5],
                ['text' => 'Pelayanan ramah, cepat, sangat memuaskan', 'rating' => 5],
                ['text' => 'lokasinya strategis', 'rating' => 5]
            ]
            ],
    ];

    public function show($id)
    {
        if (!array_key_exists($id, $this->laundryData)) {
            abort(404);
        }
    
        return view('laundry.detail', [
            'laundry' => $this->laundryData[$id]
        ]);
    }
    
}