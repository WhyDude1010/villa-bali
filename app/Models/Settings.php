<?php

namespace App\Models;

class Settings
{
    private static string $file = __DIR__ . '/../../storage/settings.json';

    private static function defaults(): array
    {
        return [
            'seo' => [
                'title' => 'Villa Nirawa — Private Luxury Villa in Ubud, Bali',
                'description' => 'Book direct and save. Villa Nirawa is a private 3-bedroom luxury villa in Ubud, Bali, with an infinity pool, in-villa chef, and personalized Balinese hospitality.',
                'og_title' => 'Villa Nirawa Ubud — A Private Place to Slow Down',
                'og_image' => 'https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&w=1200&q=85',
                'canonical_url' => 'https://www.villanirawa.com',
            ],
            'footer' => [
                'tagline' => 'A quiet private residence to slow down in Ubud, Bali.',
                'address' => 'Jalan Raya Sayan, Ubud, Bali 80571, Indonesia',
                'email' => 'hello@villanirawa.com',
                'whatsapp' => '+62 812 3456 7890',
                'copyright' => '© 2026 Villa Nirawa Bali. All rights reserved.',
            ],
            'villa' => [
                'name' => 'Villa Nirawa',
                'tagline' => 'A Private Place to Slow Down',
                'location' => 'Sayan, Ubud, Bali, Indonesia',
                'bedrooms' => 3,
                'max_guests' => 6,
                'bathrooms' => 3,
                'pool_size' => '14m Infinity Pool',
                'living_area' => '250 m²',
                'base_rate' => 4500000,
                'cleaning_fee' => 650000,
                'tax_fee' => 500000,
                'currency' => 'IDR',
                'currency_symbol' => 'Rp ',
                'hero_image' => 'https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&w=2000&q=85',
            ],
            'gallery' => [
                ['src' => 'https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&w=1200&q=85', 'category' => 'pool', 'title' => '14m Slate Infinity Pool at Sunset', 'large' => true],
                ['src' => 'https://images.unsplash.com/photo-1618773928121-c32242e63f39?auto=format&fit=crop&w=900&q=85', 'category' => 'bedroom', 'title' => 'Master Suite with Garden View', 'large' => false],
                ['src' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=900&q=85', 'category' => 'villa', 'title' => 'Teak Wood Open Lounge', 'large' => false],
                ['src' => 'https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=900&q=85', 'category' => 'garden', 'title' => 'Lush Private Tropical Grounds', 'large' => false],
                ['src' => 'https://images.unsplash.com/photo-1584622650111-993a426fbf0a?auto=format&fit=crop&w=900&q=85', 'category' => 'bedroom', 'title' => 'Outdoor Carved Stone Bathtub', 'large' => false],
                ['src' => 'https://images.unsplash.com/photo-1571896349842-33c89424de2d?auto=format&fit=crop&w=900&q=85', 'category' => 'pool', 'title' => 'Morning Sun over the Pool Deck', 'large' => false],
            ],
        ];
    }

    public static function all(): array
    {
        if (!file_exists(self::$file)) {
            return self::defaults();
        }

        $data = json_decode(file_get_contents(self::$file), true) ?? [];
        return array_replace_recursive(self::defaults(), $data);
    }

    public static function get(string $section): array
    {
        return self::all()[$section] ?? self::defaults()[$section] ?? [];
    }

    public static function save(string $section, array $data): void
    {
        $all = self::all();
        $all[$section] = $data;
        file_put_contents(self::$file, json_encode($all, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }
}
