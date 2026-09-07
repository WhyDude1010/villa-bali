<div class="admin-page">
    <div class="page-header">
        <h1 class="page-title">Manage Bookings</h1>
        <span class="page-date"><?php echo count($bookings); ?> Total Bookings</span>
    </div>

    <?php if (!empty($flash)): ?>
        <div class="flash-success"><?php echo htmlspecialchars($flash); ?></div>
    <?php endif; ?>

    <div class="admin-section">
        <div class="table-wrapper">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Guest Details</th>
                        <th>Dates</th>
                        <th>Guests</th>
                        <th>Total (IDR)</th>
                        <th>Notes</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php if (empty($bookings)): ?>
                    <tr><td colspan="8" class="table-empty">No bookings found.</td></tr>
                <?php else: ?>
                    <?php foreach ($bookings as $b): ?>
                    <tr>
                        <td class="td-mono"><?php echo htmlspecialchars($b['id']); ?></td>
                        <td>
                            <strong><?php echo htmlspecialchars($b['first_name'] . ' ' . $b['last_name']); ?></strong><br>
                            <small><?php echo htmlspecialchars($b['email']); ?></small><br>
                            <small><?php echo htmlspecialchars($b['phone']); ?></small>
                        </td>
                        <td>
                            <small>In: <?php echo htmlspecialchars($b['check_in']); ?></small><br>
                            <small>Out: <?php echo htmlspecialchars($b['check_out']); ?></small><br>
                            <small>(<?php echo (int)$b['nights']; ?> nights)</small>
                        </td>
                        <td><?php echo (int)$b['guests']; ?> guests</td>
                        <td class="td-mono">Rp <?php echo number_format($b['grand_total'], 0, ',', '.'); ?></td>
                        <td style="max-width:200px;"><small><?php echo htmlspecialchars($b['notes'] ?? 'N/A'); ?></small></td>
                        <td><span class="badge badge-<?php echo $b['status']; ?>"><?php echo ucfirst($b['status']); ?></span></td>
                        <td>
                            <form method="POST" action="/admin/bookings/update" style="display:inline-block;">
                                <input type="hidden" name="id" value="<?php echo htmlspecialchars($b['id']); ?>">
                                <select name="action" onchange="this.form.submit()" class="admin-select-sm">
                                    <option value="">Change Status...</option>
                                    <option value="confirmed">Set Confirmed</option>
                                    <option value="pending">Set Pending</option>
                                    <option value="cancelled">Set Cancelled</option>
                                    <option value="delete">Delete Booking</option>
                                </select>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
