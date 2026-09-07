<?php

namespace App\Services;

class AvailabilityService
{
    protected array $blockedDates = [
        '2026-09-01', '2026-09-02', '2026-09-03'
    ];

    public function isAvailable(string $checkIn, string $checkOut): bool
    {
        if (in_array($checkIn, $this->blockedDates) || in_array($checkOut, $this->blockedDates)) {
            return false;
        }
        return true;
    }
}
