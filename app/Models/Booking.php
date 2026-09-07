<?php

namespace App\Models;

class Booking
{
    private static string $file = __DIR__ . '/../../storage/bookings.json';

    public static function all(): array
    {
        if (!file_exists(self::$file)) {
            return [];
        }
        return json_decode(file_get_contents(self::$file), true) ?? [];
    }

    public static function find(string $id): ?array
    {
        foreach (self::all() as $booking) {
            if ($booking['id'] === $id) return $booking;
        }
        return null;
    }

    public static function create(array $data): array
    {
        $bookings = self::all();
        $data['id'] = 'BK-' . str_pad(count($bookings) + 1, 3, '0', STR_PAD_LEFT);
        $data['created_at'] = date('c');
        $data['status'] = 'pending';
        $bookings[] = $data;
        file_put_contents(self::$file, json_encode($bookings, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
        return $data;
    }

    public static function updateStatus(string $id, string $status): void
    {
        $bookings = self::all();
        foreach ($bookings as &$booking) {
            if ($booking['id'] === $id) {
                $booking['status'] = $status;
                break;
            }
        }
        file_put_contents(self::$file, json_encode($bookings, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }

    public static function delete(string $id): void
    {
        $bookings = array_values(array_filter(self::all(), fn($b) => $b['id'] !== $id));
        file_put_contents(self::$file, json_encode($bookings, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }

    public static function stats(): array
    {
        $bookings = self::all();
        $revenue = 0;
        $nights = 0;
        $confirmed = 0;
        $pending = 0;
        $cancelled = 0;

        foreach ($bookings as $b) {
            if ($b['status'] === 'confirmed') {
                $confirmed++;
                $revenue += $b['grand_total'] ?? 0;
                $nights  += $b['nights'] ?? 0;
            } elseif ($b['status'] === 'pending') {
                $pending++;
            } elseif ($b['status'] === 'cancelled') {
                $cancelled++;
            }
        }

        return [
            'total'      => count($bookings),
            'confirmed'  => $confirmed,
            'pending'    => $pending,
            'cancelled'  => $cancelled,
            'revenue'    => $revenue,
            'avg_nights' => $confirmed > 0 ? round($nights / $confirmed, 1) : 0,
        ];
    }
}
