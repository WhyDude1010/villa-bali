<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Settings;
use App\Models\Villa;

class AdminController
{
    private const ADMIN_USER = 'admin';
    private const ADMIN_PASS = 'nirawa2026';

    private function startSession(): void
    {
        if (session_status() === PHP_SESSION_NONE) {
            $sessionDir = __DIR__ . '/../../storage/sessions';
            if (!is_dir($sessionDir)) {
                @mkdir($sessionDir, 0777, true);
            }
            if (is_writable($sessionDir)) {
                session_save_path($sessionDir);
            }
            session_start();
        }
    }

    private function requireAuth(): void
    {
        $this->startSession();
        if (empty($_SESSION['admin_logged_in'])) {
            header('Location: /admin/login');
            exit;
        }
    }

    public function login()
    {
        $this->startSession();
        if (!empty($_SESSION['admin_logged_in'])) {
            header('Location: /admin');
            exit;
        }
        $error = '';
        return rawView('admin.login', compact('error'));
    }

    public function doLogin()
    {
        $this->startSession();
        $user = $_POST['username'] ?? '';
        $pass = $_POST['password'] ?? '';

        if ($user === self::ADMIN_USER && $pass === self::ADMIN_PASS) {
            $_SESSION['admin_logged_in'] = true;
            session_write_close();
            header('Location: /admin');
            exit;
        }

        $error = 'Invalid username or password.';
        return rawView('admin.login', compact('error'));
    }

    public function logout()
    {
        $this->startSession();
        $_SESSION = [];
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
        session_destroy();
        header('Location: /admin/login');
        exit;
    }

    public function dashboard()
    {
        $this->requireAuth();
        $stats    = Booking::stats();
        $bookings = array_slice(array_reverse(Booking::all()), 0, 5);
        return adminView('admin.dashboard', compact('stats', 'bookings'));
    }

    public function bookings()
    {
        $this->requireAuth();
        $bookings = array_reverse(Booking::all());
        $flash    = $_SESSION['flash'] ?? '';
        unset($_SESSION['flash']);
        return adminView('admin.bookings', compact('bookings', 'flash'));
    }

    public function updateBooking()
    {
        $this->requireAuth();
        $id     = $_POST['id'] ?? '';
        $action = $_POST['action'] ?? '';

        if ($action === 'delete') {
            Booking::delete($id);
            $_SESSION['flash'] = 'Booking deleted.';
        } elseif (in_array($action, ['confirmed', 'pending', 'cancelled'])) {
            Booking::updateStatus($id, $action);
            $_SESSION['flash'] = 'Status updated to ' . ucfirst($action) . '.';
        }

        session_write_close();
        header('Location: /admin/bookings');
        exit;
    }

    public function seo()
    {
        $this->requireAuth();
        $seo   = Settings::get('seo');
        $flash = $_SESSION['flash'] ?? '';
        unset($_SESSION['flash']);
        return adminView('admin.seo', compact('seo', 'flash'));
    }

    public function saveSeo()
    {
        $this->requireAuth();
        Settings::save('seo', [
            'title'         => trim($_POST['title'] ?? ''),
            'description'   => trim($_POST['description'] ?? ''),
            'og_title'      => trim($_POST['og_title'] ?? ''),
            'og_image'      => trim($_POST['og_image'] ?? ''),
            'canonical_url' => trim($_POST['canonical_url'] ?? ''),
        ]);
        $_SESSION['flash'] = 'SEO settings saved successfully.';
        session_write_close();
        header('Location: /admin/seo');
        exit;
    }

    public function villa()
    {
        $this->requireAuth();
        $villa = Settings::get('villa');
        $flash = $_SESSION['flash'] ?? '';
        unset($_SESSION['flash']);
        return adminView('admin.villa', compact('villa', 'flash'));
    }

    public function saveVilla()
    {
        $this->requireAuth();
        Settings::save('villa', [
            'name'         => trim($_POST['name'] ?? 'Villa Nirawa'),
            'tagline'      => trim($_POST['tagline'] ?? 'A Private Place to Slow Down'),
            'location'     => trim($_POST['location'] ?? 'Sayan, Ubud, Bali, Indonesia'),
            'bedrooms'     => (int)($_POST['bedrooms'] ?? 3),
            'max_guests'   => (int)($_POST['max_guests'] ?? 6),
            'bathrooms'    => (int)($_POST['bathrooms'] ?? 3),
            'pool_size'    => trim($_POST['pool_size'] ?? '14m Infinity Pool'),
            'living_area'  => trim($_POST['living_area'] ?? '250 m²'),
            'base_rate'    => (int)($_POST['base_rate'] ?? 4500000),
            'cleaning_fee' => (int)($_POST['cleaning_fee'] ?? 650000),
            'tax_fee'      => (int)($_POST['tax_fee'] ?? 500000),
            'currency'     => trim($_POST['currency'] ?? 'IDR'),
            'hero_image'   => trim($_POST['hero_image'] ?? 'https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&w=2000&q=85'),
        ]);
        $_SESSION['flash'] = 'Villa details saved successfully.';
        session_write_close();
        header('Location: /admin/villa');
        exit;
    }

    public function gallery()
    {
        $this->requireAuth();
        $gallery = Settings::get('gallery');
        $flash = $_SESSION['flash'] ?? '';
        unset($_SESSION['flash']);
        return adminView('admin.gallery', compact('gallery', 'flash'));
    }

    public function saveGallery()
    {
        $this->requireAuth();

        $gallery = [];
        $items = $_POST['gallery'] ?? [];

        foreach ($items as $item) {
            $src = trim((string)($item['src'] ?? ''));
            $title = trim((string)($item['title'] ?? ''));
            $category = trim((string)($item['category'] ?? 'villa'));
            if ($src === '' || $title === '') {
                continue;
            }

            $gallery[] = [
                'src' => $src,
                'title' => $title,
                'category' => strtolower($category),
                'large' => !empty($item['large']) && $item['large'] === '1',
            ];
        }

        if (empty($gallery)) {
            $gallery = Settings::get('gallery');
        }

        Settings::save('gallery', $gallery);
        $_SESSION['flash'] = 'Gallery updated successfully.';
        session_write_close();
        header('Location: /admin/gallery');
        exit;
    }

    public function footer()
    {
        $this->requireAuth();
        $footer = Settings::get('footer');
        $flash  = $_SESSION['flash'] ?? '';
        unset($_SESSION['flash']);
        return adminView('admin.footer', compact('footer', 'flash'));
    }

    public function saveFooter()
    {
        $this->requireAuth();
        Settings::save('footer', [
            'tagline'   => trim($_POST['tagline'] ?? ''),
            'address'   => trim($_POST['address'] ?? ''),
            'email'     => trim($_POST['email'] ?? ''),
            'whatsapp'  => trim($_POST['whatsapp'] ?? ''),
            'copyright' => trim($_POST['copyright'] ?? ''),
        ]);
        $_SESSION['flash'] = 'Footer settings saved successfully.';
        session_write_close();
        header('Location: /admin/footer');
        exit;
    }
}
