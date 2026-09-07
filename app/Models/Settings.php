<?php

namespace App\Models;

class Settings
{
    private static string $file = __DIR__ . '/../../storage/settings.json';

    public static function all(): array
    {
        if (!file_exists(self::$file)) {
            return ['seo' => [], 'footer' => []];
        }
        return json_decode(file_get_contents(self::$file), true) ?? ['seo' => [], 'footer' => []];
    }

    public static function get(string $section): array
    {
        return self::all()[$section] ?? [];
    }

    public static function save(string $section, array $data): void
    {
        $all = self::all();
        $all[$section] = $data;
        file_put_contents(self::$file, json_encode($all, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }
}
