<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $seoSettings = \App\Models\Settings::get('seo');
    $pageTitle = $title ?? $seoSettings['title'] ?? 'Villa Nirawa — Luxury Villa in Ubud, Bali';
    $metaDesc  = $seoSettings['description'] ?? 'Direct booking website for Villa Nirawa, a private luxury residence in Ubud, Bali.';
    $ogTitle   = $seoSettings['og_title'] ?? $pageTitle;
    $ogImage   = $seoSettings['og_image'] ?? 'https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&w=1200&q=85';
    $canonical = $seoSettings['canonical_url'] ?? '';
    ?>
    <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($metaDesc, ENT_QUOTES); ?>">
    
    <meta property="og:title" content="<?php echo htmlspecialchars($ogTitle, ENT_QUOTES); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($metaDesc, ENT_QUOTES); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($ogImage, ENT_QUOTES); ?>">
    <?php if (!empty($canonical)): ?>
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical, ENT_QUOTES); ?>">
    <?php endif; ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<?php echo $content ?? ''; ?>

    <script src="/js/app.js"></script>
</body>
</html>
