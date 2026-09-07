<?php
$statCards = [
    ['label' => 'Total Bookings',    'value' => $stats['total'],                                                          'sub' => 'All time',              'color' => 'stat-blue'],
    ['label' => 'Confirmed Stays',   'value' => $stats['confirmed'],                                                      'sub' => 'Active reservations',   'color' => 'stat-green'],
    ['label' => 'Pending Review',    'value' => $stats['pending'],                                                        'sub' => 'Awaiting confirmation', 'color' => 'stat-amber'],
    ['label' => 'Total Revenue',     'value' => 'Rp ' . number_format($stats['revenue'], 0, ',', '.'),                   'sub' => 'Confirmed bookings',    'color' => 'stat-ink'],
    ['label' => 'Avg. Stay Length',  'value' => $stats['avg_nights'] . ' nights',                                        'sub' => 'Per confirmed booking', 'color' => 'stat-sand'],
];
?>
<div class="admin-page">
    <div class="page-header">
        <h1 class="page-title">Dashboard</h1>
        <span class="page-date"><?php echo date('l, d F Y'); ?></span>
    </div>

    <div class="stat-grid">
        <?php foreach ($statCards as $card): ?>
        <div class="stat-card <?php echo $card['color']; ?>">
            <span class="stat-label"><?php echo $card['label']; ?></span>
            <span class="stat-value"><?php echo $card['value']; ?></span>
            <span class="stat-sub"><?php echo $card['sub']; ?></span>
        </div>
        <?php endforeach; ?>
    </div>

    <div class="admin-section">
        <div class="section-row">
            <h2 class="admin-section-title">Recent Bookings</h2>
            <a href="/admin/bookings" class="admin-link">View all →</a>
        </div>
        <div class="table-wrapper">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Guest</th>
                        <th>Check-in</th>
                        <th>Check-out</th>
                        <th>Nights</th>
                        <th>Total</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php if (empty($bookings)): ?>
                    <tr><td colspan="7" class="table-empty">No bookings yet.</td></tr>
                <?php else: ?>
                    <?php foreach ($bookings as $b): ?>
                    <tr>
                        <td class="td-mono"><?php echo htmlspecialchars($b['id']); ?></td>
                        <td><?php echo htmlspecialchars($b['first_name'] . ' ' . $b['last_name']); ?></td>
                        <td><?php echo htmlspecialchars($b['check_in']); ?></td>
                        <td><?php echo htmlspecialchars($b['check_out']); ?></td>
                        <td><?php echo (int)$b['nights']; ?></td>
                        <td class="td-mono">Rp <?php echo number_format($b['grand_total'], 0, ',', '.'); ?></td>
                        <td><span class="badge badge-<?php echo $b['status']; ?>"><?php echo ucfirst($b['status']); ?></span></td>
                    </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="admin-section">
        <h2 class="admin-section-title">Booking Status Overview</h2>
        <div class="bar-chart">
            <?php
            $total = max(1, $stats['total']);
            $bars = [
                ['label' => 'Confirmed',  'count' => $stats['confirmed'],  'class' => 'bar-green'],
                ['label' => 'Pending',    'count' => $stats['pending'],    'class' => 'bar-amber'],
                ['label' => 'Cancelled',  'count' => $stats['cancelled'],  'class' => 'bar-red'],
            ];
            foreach ($bars as $bar):
                $pct = round(($bar['count'] / $total) * 100);
            ?>
            <div class="bar-row">
                <span class="bar-label"><?php echo $bar['label']; ?></span>
                <div class="bar-track">
                    <div class="bar-fill <?php echo $bar['class']; ?>" style="width: <?php echo $pct; ?>%"></div>
                </div>
                <span class="bar-count"><?php echo $bar['count']; ?></span>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
