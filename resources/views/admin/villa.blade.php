<div class="admin-page">
    <div class="page-header">
        <h1 class="page-title">Villa Details & Pricing</h1>
        <span class="page-date">Update the homepage villa content and reservation rates</span>
    </div>

    <?php if (!empty($flash)): ?>
        <div class="flash-success"><?php echo htmlspecialchars($flash); ?></div>
    <?php endif; ?>

    <div class="admin-section" style="max-width: 900px;">
        <form method="POST" action="/admin/villa" class="admin-form">
            <div class="input-group">
                <label>Villa Name</label>
                <input type="text" name="name" value="<?php echo htmlspecialchars($villa['name'] ?? 'Villa Nirawa'); ?>" required>
            </div>

            <div class="input-group">
                <label>Tagline</label>
                <input type="text" name="tagline" value="<?php echo htmlspecialchars($villa['tagline'] ?? 'A Private Place to Slow Down'); ?>" required>
            </div>

            <div class="input-group">
                <label>Location</label>
                <input type="text" name="location" value="<?php echo htmlspecialchars($villa['location'] ?? 'Sayan, Ubud, Bali, Indonesia'); ?>" required>
            </div>

            <div class="form-grid">
                <div class="input-group">
                    <label>Bedrooms</label>
                    <input type="number" name="bedrooms" min="1" value="<?php echo (int)($villa['bedrooms'] ?? 3); ?>" required>
                </div>
                <div class="input-group">
                    <label>Bathrooms</label>
                    <input type="number" name="bathrooms" min="1" value="<?php echo (int)($villa['bathrooms'] ?? 3); ?>" required>
                </div>
            </div>

            <div class="form-grid">
                <div class="input-group">
                    <label>Max Guests</label>
                    <input type="number" name="max_guests" min="1" value="<?php echo (int)($villa['max_guests'] ?? 6); ?>" required>
                </div>
                <div class="input-group">
                    <label>Living Area</label>
                    <input type="text" name="living_area" value="<?php echo htmlspecialchars($villa['living_area'] ?? '250 m²'); ?>" required>
                </div>
            </div>

            <div class="form-grid">
                <div class="input-group">
                    <label>Pool Size</label>
                    <input type="text" name="pool_size" value="<?php echo htmlspecialchars($villa['pool_size'] ?? '14m Infinity Pool'); ?>" required>
                </div>
                <div class="input-group">
                    <label>Currency</label>
                    <input type="text" name="currency" value="<?php echo htmlspecialchars($villa['currency'] ?? 'IDR'); ?>" required>
                </div>
            </div>

            <div class="form-grid">
                <div class="input-group">
                    <label>Base Rate</label>
                    <input type="number" name="base_rate" min="0" value="<?php echo (int)($villa['base_rate'] ?? 4500000); ?>" required>
                </div>
                <div class="input-group">
                    <label>Cleaning Fee</label>
                    <input type="number" name="cleaning_fee" min="0" value="<?php echo (int)($villa['cleaning_fee'] ?? 650000); ?>" required>
                </div>
            </div>

            <div class="input-group">
                <label>Tax / Service Fee</label>
                <input type="number" name="tax_fee" min="0" value="<?php echo (int)($villa['tax_fee'] ?? 500000); ?>" required>
            </div>

            <div class="input-group">
                <label>Hero Image URL</label>
                <input type="url" name="hero_image" value="<?php echo htmlspecialchars($villa['hero_image'] ?? 'https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&w=2000&q=85'); ?>" required>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Save Villa Details</button>
            </div>
        </form>
    </div>
</div>
