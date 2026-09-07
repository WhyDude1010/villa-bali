@extends('layouts.app')

@section('title', 'Reservation Confirmed — Villa Nirawa')

@section('content')
<div class="container" style="padding: 120px 24px;">
    <div class="confirmation-box" style="max-width: 600px; margin: 0 auto; background: var(--color-white); padding: 48px; border-radius: 4px; border: var(--border-subtle);">
        <div class="confirm-icon">✓</div>
        <h1 class="modal-title" style="margin-bottom: 8px;">Your Escape is Reserved!</h1>
        <p class="modal-sub">We can't wait to welcome you to Villa Nirawa, Bali.</p>
        
        <div class="reservation-ticket">
            <div class="ticket-header">
                <span>RESERVATION VOUCHER</span>
                <span class="ticket-id">{{ $booking['reference'] }}</span>
            </div>
            <div class="ticket-body">
                <p><strong>Property:</strong> {{ $booking['villa'] }} (3-Bedroom Private Residence)</p>
                <p><strong>Dates:</strong> {{ $booking['check_in'] }} — {{ $booking['check_out'] }} ({{ $booking['nights'] }} nights)</p>
                <p><strong>Guest:</strong> {{ $booking['first_name'] }} {{ $booking['last_name'] }} ({{ $booking['guests'] }} Guests)</p>
                <p><strong>Email:</strong> {{ $booking['email'] }}</p>
                <p><strong>Total Amount:</strong> €{{ $booking['grand_total'] }} (Instant Confirmation)</p>
                @if(!empty($booking['notes']))
                    <p><strong>Notes:</strong> {{ $booking['notes'] }}</p>
                @endif
            </div>
        </div>

        <p class="confirm-note" style="margin-bottom: 24px;">A confirmation voucher and host arrival guide have been dispatched to your email address.</p>

        <a href="/" class="btn btn-primary btn-full">Return to Villa Nirawa Homepage</a>
    </div>
</div>
@endsection
