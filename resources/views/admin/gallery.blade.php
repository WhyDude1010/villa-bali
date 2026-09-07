<div class="admin-page">
    <div class="page-header">
        <h1 class="page-title">Gallery Management</h1>
        <span class="page-date">Update the portfolio photos shown on the homepage</span>
    </div>

    <?php if (!empty($flash)): ?>
        <div class="flash-success"><?php echo htmlspecialchars($flash); ?></div>
    <?php endif; ?>

    <div class="admin-section" style="max-width: 1100px;">
        <form method="POST" action="/admin/gallery" class="admin-form">
            <div class="gallery-editor-list">
                <?php if (empty($gallery)): ?>
                    <p class="table-empty">No gallery items yet. Add your first photo below.</p>
                <?php endif; ?>

                <?php foreach (($gallery ?? []) as $index => $item): ?>
                    <div class="gallery-editor-item" style="display:grid; gap:12px; padding:16px; border:1px solid var(--border-color); border-radius:16px; margin-bottom:12px; background:var(--card-bg);">
                        <div class="form-grid">
                            <div class="input-group">
                                <label>Image URL</label>
                                <input type="url" name="gallery[<?php echo $index; ?>][src]" value="<?php echo htmlspecialchars($item['src'] ?? ''); ?>" required>
                            </div>
                            <div class="input-group">
                                <label>Image Title</label>
                                <input type="text" name="gallery[<?php echo $index; ?>][title]" value="<?php echo htmlspecialchars($item['title'] ?? ''); ?>" required>
                            </div>
                        </div>

                        <div class="form-grid">
                            <div class="input-group">
                                <label>Category</label>
                                <select name="gallery[<?php echo $index; ?>][category]">
                                    <option value="villa" <?php echo (($item['category'] ?? 'villa') === 'villa') ? 'selected' : ''; ?>>Villa</option>
                                    <option value="pool" <?php echo (($item['category'] ?? 'villa') === 'pool') ? 'selected' : ''; ?>>Pool</option>
                                    <option value="bedroom" <?php echo (($item['category'] ?? 'villa') === 'bedroom') ? 'selected' : ''; ?>>Bedroom</option>
                                    <option value="garden" <?php echo (($item['category'] ?? 'villa') === 'garden') ? 'selected' : ''; ?>>Garden</option>
                                </select>
                            </div>
                            <div class="input-group">
                                <label>Feature as large card</label>
                                <select name="gallery[<?php echo $index; ?>][large]">
                                    <option value="0" <?php echo empty($item['large']) ? 'selected' : ''; ?>>No</option>
                                    <option value="1" <?php echo !empty($item['large']) ? 'selected' : ''; ?>>Yes</option>
                                </select>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="form-actions" style="margin-top: 18px; display:flex; gap:12px; flex-wrap:wrap; align-items:center;">
                <button type="submit" class="btn btn-primary">Save Gallery</button>
            </div>
        </form>
    </div>
</div>
