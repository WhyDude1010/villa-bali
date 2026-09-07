<?php

namespace App\Models;

class Villa
{
    public static function details()
    {
        $defaults = [
            'name'            => 'Villa Nirawa',
            'tagline'         => 'A Private Place to Slow Down',
            'location'        => 'Sayan, Ubud, Bali, Indonesia',
            'bedrooms'        => 3,
            'max_guests'      => 6,
            'bathrooms'       => 3,
            'pool_size'       => '14m Infinity Pool',
            'living_area'     => '250 m²',
            'base_rate'       => 4500000,
            'cleaning_fee'    => 650000,
            'tax_fee'         => 500000,
            'currency'        => 'IDR',
            'currency_symbol' => 'Rp ',
            'hero_image'      => 'https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&w=2000&q=85',
        ];

        return array_replace($defaults, Settings::get('villa'));
    }

    public static function formatPrice($amount)
    {
        return 'Rp ' . number_format($amount, 0, ',', '.');
    }
}
