<div class="admin-page">
    <div class="page-header">
        <h1 class="page-title">Footer & Contact Settings</h1>
        <span class="page-date">Manage Footer Content & Contact Information</span>
    </div>

    <?php if (!empty($flash)): ?>
        <div class="flash-success"><?php echo htmlspecialchars($flash); ?></div>
    <?php endif; ?>

    <div class="admin-section" style="max-width: 800px;">
        <form method="POST" action="/admin/footer" class="admin-form">
            <div class="input-group">
                <label>Footer Tagline</label>
                <input type="text" name="tagline" value="<?php echo htmlspecialchars($footer['tagline'] ?? ''); ?>" required>
            </div>

            <div class="input-group">
                <label>Property Address</label>
                <input type="text" name="address" value="<?php echo htmlspecialchars($footer['address'] ?? ''); ?>" required>
            </div>

            <div class="input-group">
                <label>Email Address</label>
                <input type="email" name="email" value="<?php echo htmlspecialchars($footer['email'] ?? ''); ?>" required>
            </div>

            <div class="input-group">
                <label>WhatsApp Contact Number</label>
                <input type="text" name="whatsapp" value="<?php echo htmlspecialchars($footer['whatsapp'] ?? ''); ?>" required>
            </div>

            <div class="input-group">
                <label>Copyright Text</label>
                <input type="text" name="copyright" value="<?php echo htmlspecialchars($footer['copyright'] ?? ''); ?>" required>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Save Footer Settings</button>
            </div>
        </form>
    </div>
</div>
