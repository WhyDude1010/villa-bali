<div class="admin-page">
    <div class="page-header">
        <h1 class="page-title">SEO Settings</h1>
        <span class="page-date">Search Engine & OpenGraph Settings</span>
    </div>

    <?php if (!empty($flash)): ?>
        <div class="flash-success"><?php echo htmlspecialchars($flash); ?></div>
    <?php endif; ?>

    <div class="admin-section" style="max-width: 800px;">
        <form method="POST" action="/admin/seo" class="admin-form">
            <div class="input-group">
                <label>Page Meta Title</label>
                <input type="text" name="title" value="<?php echo htmlspecialchars($seo['title'] ?? ''); ?>" required>
                <small class="form-help">Appears in browser tabs and Google search results.</small>
            </div>

            <div class="input-group">
                <label>Page Meta Description</label>
                <textarea name="description" rows="3" required><?php echo htmlspecialchars($seo['description'] ?? ''); ?></textarea>
                <small class="form-help">Short summary snippet for search result snippets (150-160 chars recommended).</small>
            </div>

            <div class="input-group">
                <label>OpenGraph Title (Social Sharing)</label>
                <input type="text" name="og_title" value="<?php echo htmlspecialchars($seo['og_title'] ?? ''); ?>">
            </div>

            <div class="input-group">
                <label>OpenGraph Image URL</label>
                <input type="url" name="og_image" value="<?php echo htmlspecialchars($seo['og_image'] ?? ''); ?>">
                <small class="form-help">Image used when sharing link on WhatsApp, Facebook, Twitter, etc.</small>
            </div>

            <div class="input-group">
                <label>Canonical URL</label>
                <input type="url" name="canonical_url" value="<?php echo htmlspecialchars($seo['canonical_url'] ?? ''); ?>">
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Save SEO Settings</button>
            </div>
        </form>
    </div>
</div>
