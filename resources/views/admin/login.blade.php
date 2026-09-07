<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal — Villa Nirawa</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body class="admin-login-standalone">
    <div class="login-bg-overlay"></div>
    
    <div class="login-standalone-card">
        <div class="login-header">
            <span class="login-brand-name">VILLA NIRAWA</span>
            <span class="login-brand-sub">Property Portal & Reservation System</span>
        </div>

        <?php if (!empty($error)): ?>
            <div class="flash-error"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>

        <form method="POST" action="/admin/login" class="admin-form">
            <div class="input-group">
                <label>Admin Username</label>
                <input type="text" name="username" id="username" required autocomplete="username" placeholder="Enter username">
            </div>
            
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" id="password" required autocomplete="current-password" placeholder="••••••••">
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary btn-full">Sign In to Dashboard</button>
            </div>
        </form>

        <div class="login-footer">
            <a href="/" class="back-link">← Return to Public Website</a>
        </div>
    </div>
</body>
</html>
