<?php
use App\Models\Villa;
$title = 'Reservation Confirmed — Villa Nirawa';
?>
<div class="container" style="padding: 100px 0; max-width: 650px; margin: 0 auto; text-align: center;">
    <div style="background: #FFFFFF; border: 1px solid rgba(28, 33, 29, 0.08); border-radius: 12px; padding: 48px 36px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
        <div style="font-size: 3rem; color: #536052; margin-bottom: 16px;">✓</div>
        <span class="section-tag">Direct Booking Received</span>
        <h1 class="section-heading" style="margin-top: 8px;">Thank You, <?php echo htmlspecialchars($booking['first_name']); ?>!</h1>
        <p class="body-text">Your reservation request for <strong>Villa Nirawa</strong> has been successfully created.</p>

        <div style="background: #FAF8F5; border: 1px dashed #D8CBB8; border-radius: 8px; padding: 20px; margin: 24px 0; text-align: left;">
            <div style="display:flex; justify-content:space-between; margin-bottom: 8px;">
                <span style="color:#A9A49A; font-size:0.85rem;">Booking Reference</span>
                <strong style="font-family:monospace;"><?php echo htmlspecialchars($booking['id']); ?></strong>
            </div>
            <div style="display:flex; justify-content:space-between; margin-bottom: 8px;">
                <span style="color:#A9A49A; font-size:0.85rem;">Check-in / Check-out</span>
                <span><?php echo htmlspecialchars($booking['check_in']); ?> → <?php echo htmlspecialchars($booking['check_out']); ?> (<?php echo (int)$booking['nights']; ?> nights)</span>
            </div>
            <div style="display:flex; justify-content:space-between; margin-bottom: 8px;">
                <span style="color:#A9A49A; font-size:0.85rem;">Guests</span>
                <span><?php echo (int)$booking['guests']; ?> Guests</span>
            </div>
            <div style="display:flex; justify-content:space-between; margin-top: 12px; border-top: 1px solid #E2DDD5; padding-top: 12px;">
                <strong>Total Amount</strong>
                <strong style="color:#806B58;"><?php echo Villa::formatPrice($booking['grand_total']); ?></strong>
            </div>
        </div>

        <p style="font-size: 0.88rem; color: #536052; margin-bottom: 28px;">
            A confirmation summary has been logged for our host concierge team. We will reach out to <strong><?php echo htmlspecialchars($booking['email']); ?></strong> shortly with arrival details.
        </p>

        <a href="/" class="btn btn-primary">Return to Homepage</a>
    </div>
</div>
