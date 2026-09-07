<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Villa;

class BookingController
{
    public function store()
    {
        $villa  = Villa::details();
        $checkIn  = $_POST['check_in']  ?? '';
        $checkOut = $_POST['check_out'] ?? '';
        $guests   = (int)($_POST['guests'] ?? 2);

        $nights = 1;
        if ($checkIn && $checkOut) {
            $diff = (strtotime($checkOut) - strtotime($checkIn)) / 86400;
            $nights = max(1, (int)$diff);
        }

        $baseTotal  = $villa['base_rate'] * $nights;
        $grandTotal = $baseTotal + $villa['cleaning_fee'] + $villa['tax_fee'];

        $booking = Booking::create([
            'first_name'   => htmlspecialchars(trim($_POST['first_name'] ?? '')),
            'last_name'    => htmlspecialchars(trim($_POST['last_name'] ?? '')),
            'email'        => htmlspecialchars(trim($_POST['email'] ?? '')),
            'phone'        => htmlspecialchars(trim($_POST['phone'] ?? '')),
            'check_in'     => $checkIn,
            'check_out'    => $checkOut,
            'guests'       => $guests,
            'nights'       => $nights,
            'base_total'   => $baseTotal,
            'cleaning_fee' => $villa['cleaning_fee'],
            'tax_fee'      => $villa['tax_fee'],
            'grand_total'  => $grandTotal,
            'notes'        => htmlspecialchars(trim($_POST['notes'] ?? '')),
        ]);

        return view('booking_success', ['booking' => $booking, 'villa' => $villa]);
    }

    public function checkAvailability()
    {
        header('Content-Type: application/json');
        $checkIn  = $_GET['check_in']  ?? '';
        $checkOut = $_GET['check_out'] ?? '';
        $bookings = Booking::all();
        $booked   = false;

        foreach ($bookings as $b) {
            if ($b['status'] === 'cancelled') continue;
            if ($checkIn < $b['check_out'] && $checkOut > $b['check_in']) {
                $booked = true;
                break;
            }
        }

        echo json_encode(['available' => !$booked]);
    }
}
