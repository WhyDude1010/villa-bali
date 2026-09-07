<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin — Villa Nirawa</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body class="admin-body">

<div class="admin-shell">
    <!-- Sidebar -->
    <aside class="admin-sidebar" id="adminSidebar">
        <div class="sidebar-brand">
            <span class="sidebar-logo">NIRAWA</span>
            <span class="sidebar-role">Admin Panel</span>
        </div>
        <nav class="sidebar-nav">
            <a href="/admin" class="sidebar-link <?php echo (parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) === '/admin' || parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) === '/admin/') ? 'active' : ''; ?>">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/></svg>
                Dashboard
            </a>
            <a href="/admin/bookings" class="sidebar-link <?php echo str_contains(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), 'bookings') ? 'active' : ''; ?>">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                Bookings
            </a>
            <a href="/admin/seo" class="sidebar-link <?php echo str_contains(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), 'seo') ? 'active' : ''; ?>">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
                SEO
            </a>
            <a href="/admin/footer" class="sidebar-link <?php echo str_contains(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), 'footer') ? 'active' : ''; ?>">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 6h16M4 10h16M4 14h10M4 18h6"/></svg>
                Footer
            </a>
        </nav>
        <div class="sidebar-footer-links">
            <a href="/" target="_blank" class="sidebar-link">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6m0 0v6m0-6L10 14"/></svg>
                View Site
            </a>
            <a href="/admin/logout" class="sidebar-link logout-link">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4M16 17l5-5-5-5M21 12H9"/></svg>
                Sign Out
            </a>
        </div>
    </aside>

    <!-- Main -->
    <div class="admin-main">
        <header class="admin-topbar">
            <button class="sidebar-toggle" id="sidebarToggle" onclick="document.getElementById('adminSidebar').classList.toggle('open')">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
            </button>
            <div class="topbar-right">
                <button class="theme-toggle-btn admin-theme-toggle" onclick="toggleTheme()" aria-label="Toggle Theme"></button>
                <span class="admin-badge">Admin</span>
            </div>
        </header>

        <div class="admin-content">
            <?php echo $pageContent ?? ''; ?>
        </div>
    </div>
</div>

<script src="/js/app.js"></script>
</body>
</html>
