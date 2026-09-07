<?php

use App\Http\Controllers\VillaController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminController;

if (session_status() === PHP_SESSION_NONE) {
    $sessionDir = __DIR__ . '/../storage/sessions';
    if (!is_dir($sessionDir)) {
        @mkdir($sessionDir, 0777, true);
    }
    if (is_writable($sessionDir)) {
        session_save_path($sessionDir);
    }
    session_start();
}

$uri    = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

$admin = new AdminController();

switch (true) {
    // Public
    case ($uri === '/' || $uri === '/home') && $method === 'GET':
        echo (new VillaController())->index();
        break;

    case $uri === '/booking/checkout' && $method === 'POST':
        echo (new BookingController())->store();
        break;

    case $uri === '/api/availability' && $method === 'GET':
        (new BookingController())->checkAvailability();
        break;

    // Admin auth
    case $uri === '/admin/login' && $method === 'GET':
        echo $admin->login();
        break;

    case $uri === '/admin/login' && $method === 'POST':
        echo $admin->doLogin();
        break;

    case $uri === '/admin/logout':
        $admin->logout();
        break;

    // Admin panel
    case $uri === '/admin' || $uri === '/admin/':
        echo $admin->dashboard();
        break;

    case $uri === '/admin/bookings' && $method === 'GET':
        echo $admin->bookings();
        break;

    case $uri === '/admin/bookings/update' && $method === 'POST':
        $admin->updateBooking();
        break;

    case $uri === '/admin/seo' && $method === 'GET':
        echo $admin->seo();
        break;

    case $uri === '/admin/seo' && $method === 'POST':
        $admin->saveSeo();
        break;

    case $uri === '/admin/villa' && $method === 'GET':
        echo $admin->villa();
        break;

    case $uri === '/admin/villa' && $method === 'POST':
        $admin->saveVilla();
        break;

    case $uri === '/admin/gallery' && $method === 'GET':
        echo $admin->gallery();
        break;

    case $uri === '/admin/gallery' && $method === 'POST':
        $admin->saveGallery();
        break;

    case $uri === '/admin/footer' && $method === 'GET':
        echo $admin->footer();
        break;

    case $uri === '/admin/footer' && $method === 'POST':
        $admin->saveFooter();
        break;

    default:
        echo (new VillaController())->index();
        break;
}
