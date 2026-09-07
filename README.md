# Villa Nirawa

A luxury villa booking website built with PHP and Laravel-style routing/views, designed for direct bookings with a polished landing page, reservation form, and admin dashboard.

## Features

- Responsive luxury villa landing page
- Theme toggle for light and dark mode
- Availability and pricing calculation for bookings
- Admin dashboard for managing bookings, SEO, and footer data
- Booking confirmation flow
- Static JSON-backed storage for settings and reservations

## Tech Stack

- PHP
- Laravel-style MVC structure
- Vanilla JavaScript
- HTML/CSS

## Project Structure

```text
.
├── app/
│   ├── Http/Controllers/
│   ├── Models/
│   └── Services/
├── public/
│   ├── css/
│   ├── js/
│   └── index.php
├── resources/
│   └── views/
├── routes/
├── storage/
├── .gitignore
├── composer.json
├── artisan
├── index.php
├── README.md
└── public/index.php
```

## Requirements

- PHP 8.1 or newer
- Composer
- A local web server such as PHP built-in server

## Local Setup

1. Clone the repository.
2. Navigate to the project folder.
3. Install PHP dependencies:

```bash
composer install
```

4. Start the app:

```bash
php -S localhost:8000
```

5. Open the app in your browser:

```text
http://localhost:8000
```

## Admin Access

The admin area is available under:

```text
http://localhost:8000/admin
```

If you are using the provided setup, the admin routes are included in the project’s router and the dashboard can be managed from the UI.

## Deployment

For deployment, upload the project files to a PHP-compatible hosting environment and ensure the `public` directory is the web root.

If your host uses Apache or Nginx, configure the site root to point to the `public` folder.

## Notes

- Some configuration is stored in JSON files under `storage/`.
- The project includes a theme toggle that saves the selected mode in `localStorage`.
- If you are deploying to production, review all environment and storage settings before publishing.

## License

This project is for educational or personal use unless otherwise specified.
