<?php

namespace App\Services;

class PricingService
{
    protected float $baseRate = 250.00;
    protected float $cleaningFee = 40.00;
    protected float $taxServiceFee = 35.00;

    public function calculate(string $checkIn, string $checkOut, int $guests = 2): array
    {
        $d1 = new \DateTime($checkIn);
        $d2 = new \DateTime($checkOut);
        $nights = max(1, $d1->diff($d2)->days);

        $accommodationTotal = $this->baseRate * $nights;
        $total = $accommodationTotal + $this->cleaningFee + $this->taxServiceFee;

        return [
            'base_rate' => $this->baseRate,
            'nights' => $nights,
            'accommodation_total' => $accommodationTotal,
            'cleaning_fee' => $this->cleaningFee,
            'tax_fee' => $this->taxServiceFee,
            'total' => $total,
            'currency' => 'EUR',
            'symbol' => '€'
        ];
    }
}
