# ShouryaNapkins - Developer Quick Reference

**Quick reference guide for developers working on the ShouryaNapkins project**

---

## Quick Start

```bash
# 1. Clone and setup
git clone <repo-url>
cd ShouryaNapkins
composer install
npm install

# 2. Configure environment
cp .env.example .env
php artisan key:generate

# 3. Setup database
touch database/database.sqlite
php artisan migrate

# 4. Start development
composer run dev
# OR separately:
# php artisan serve & npm run dev
```

Access at: `http://localhost:8000`

---

## Project Architecture

### Tech Stack
- **Backend:** Laravel 12.0 (PHP 8.2+)
- **Frontend:** TailwindCSS 4.0 + Vanilla JS
- **Build:** Vite 7.0
- **Database:** SQLite (default) / MySQL

### Directory Layout
```
app/Http/Controllers/    → Controllers (currently empty)
resources/views/         → Blade templates
resources/js/            → JavaScript source
public/css/              → Compiled CSS
public/Images/           → Image assets
routes/web.php           → Route definitions
```

---

## Common Tasks

### Development Commands

```bash
# Start all services (recommended)
composer run dev

# Individual services
php artisan serve              # Start Laravel server
npm run dev                    # Start Vite dev server
php artisan queue:listen       # Queue worker
php artisan pail              # Real-time logs

# Testing
composer run test              # Run PHPUnit tests

# Code style
./vendor/bin/pint             # Fix PHP code style
./vendor/bin/pint --test      # Check without fixing
```

### Build & Deploy

```bash
# Production build
npm run build

# Optimize Laravel
php artisan config:cache
php artisan route:cache
php artisan view:cache
composer install --optimize-autoloader --no-dev

# Clear caches
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan cache:clear
```

---

## File Structure

### Adding New Pages

1. **Create Route** (`routes/web.php`):
```php
Route::get('/about', function () {
    return view('about');
})->name('about');
```

2. **Create Blade View** (`resources/views/about.blade.php`):
```blade
@extends('layouts.app')

@section('title', 'About Us')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@section('content')
    <h1>About Us</h1>
    <!-- Your content -->
@endsection

@push('scripts')
    <script src="{{ asset('js/about.js') }}"></script>
@endpush
```

3. **Add Styles** (`public/css/about.css`):
```css
/* Your styles */
```

4. **Add Scripts** (`resources/js/about.js`):
```javascript
// Your JavaScript
```

### Layout Structure

**Main Layout:** `resources/views/layouts/app.blade.php`

Sections available:
- `@section('title')` - Page title
- `@push('styles')` - Additional stylesheets
- `@section('content')` - Main content
- `@push('scripts')` - Additional scripts

---

## Current Routes

| Method | URI | Name | View | Description |
|--------|-----|------|------|-------------|
| GET | `/` | home | home.blade.php | Homepage |

---

## Frontend Components

### Hero Section
- Video background with autoplay
- Animated badges and shapes
- CTA buttons
- Feature chips

### Stats Section
- Animated counter on scroll
- 4 stat cards with icons

### About Section
- Feature grid (4 items)
- Image gallery
- Company information

### Products Section
- Dynamic product cards from PHP array
- Hover effects with features
- CTA buttons (Get Quote, View Details)

### Gallery Section
- Fancybox lightbox integration
- Image grid with overlays

### Contact Section
- Contact information cards
- Embedded Google Maps
- Social media links
- Quick action buttons (WhatsApp, Call, Email)

---

## JavaScript Libraries

### Included Libraries

```html
<!-- Font Awesome 6.4.0 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- Fancybox 3.5.7 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
```

### Usage Examples

#### Animated Counters
```javascript
// Automatically initialized on .stat-number elements
<div class="stat-number" data-count="100">0+</div>
```

#### Gallery Lightbox
```html
<a href="image.jpg" data-fancybox="gallery">
    <img src="image.jpg" alt="Image">
</a>
```

#### Scroll Animations (AOS)
```html
<div data-aos="fade-up" data-aos-delay="100">
    Content
</div>
```

---

## Styling Guide

### TailwindCSS Classes Used

Common utility classes in use:
- **Layout:** `container`, `row`, `col-lg-6`, `d-flex`, `align-items-center`
- **Spacing:** `px-4`, `py-3`, `m-3`, `g-4`, `g-5`
- **Colors:** Custom gradient classes defined in CSS
- **Typography:** `text-center`, custom font sizes
- **Effects:** `position-relative`, `position-absolute`

### Custom CSS Variables

Check `public/css/home.css` for:
- Color scheme
- Gradient definitions
- Animation keyframes
- Responsive breakpoints

---

## Database

### Current Schema

Currently, no custom tables are defined. The project uses:
- Standard Laravel authentication tables (if needed)
- Session storage (database driver)
- Queue jobs (database driver)

### Adding Migrations

```bash
# Create migration
php artisan make:migration create_products_table

# Run migrations
php artisan migrate

# Rollback
php artisan migrate:rollback
```

### Migration Example

```php
Schema::create('products', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->text('description');
    $table->string('image');
    $table->decimal('price', 10, 2);
    $table->timestamps();
});
```

---

## Assets Management

### Images

**Location:** `public/Images/`

Current images:
- `video.mp4` - Hero section video
- `machine.jpg` - Manufacturing machinery
- `tissue.jpg` - Product images
- `paper-napkin.jpg`
- `faciial-tissues.jpg`
- `ultra-soft-facial-tissues.jpg`
- `template.jpg`

**Usage in Blade:**
```blade
<img src="{{ asset('Images/machine.jpg') }}" alt="Description">
```

### CSS

**Source:** `public/css/`
- `app.css` - Global styles (23.5KB)
- `home.css` - Homepage styles (44.7KB)

**Including in Blade:**
```blade
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush
```

### JavaScript

**Source:** `resources/js/`
- `app.js` - Main entry point
- `bootstrap.js` - Bootstrap config
- `scroll.js` - Scroll effects (838 bytes)

Compiled by Vite to `public/build/`

---

## Environment Variables

### Key Variables

```env
# Application
APP_NAME=ShouryaNapkins
APP_ENV=local|production
APP_DEBUG=true|false
APP_URL=http://localhost

# Database
DB_CONNECTION=sqlite
DB_DATABASE=/path/to/database.sqlite

# Session & Cache
SESSION_DRIVER=database
CACHE_STORE=database
QUEUE_CONNECTION=database

# Mail
MAIL_MAILER=log
MAIL_FROM_ADDRESS="info@shouryanapkins.com"
MAIL_FROM_NAME="ShouryaNapkins"
```

### Accessing in Code

```php
// In PHP
$appName = config('app.name');
$appUrl = config('app.url');

// In Blade
{{ config('app.name') }}

// In JavaScript (via Vite)
import.meta.env.VITE_APP_NAME
```

---

## Testing

### Running Tests

```bash
# All tests
php artisan test
# OR
composer run test

# Specific test
php artisan test --filter ExampleTest

# With coverage
php artisan test --coverage
```

### Test Structure

```
tests/
├── Feature/        # Feature tests (HTTP tests, etc.)
└── Unit/          # Unit tests (class methods, etc.)
```

### Creating Tests

```bash
# Feature test
php artisan make:test ProductTest

# Unit test
php artisan make:test ProductTest --unit
```

---

## Debugging

### Debug Tools

```bash
# Real-time logs
php artisan pail

# Tinker (REPL)
php artisan tinker

# Routes list
php artisan route:list

# Application info
php artisan about
```

### Common Debug Commands

```php
// In code
dd($variable);              // Dump and die
dump($variable);            // Dump
logger('Debug message');    // Log to file

// In Blade
{{ dd($variable) }}
{{ dump($variable) }}
@dump($variable)
```

### Log Files

Location: `storage/logs/laravel.log`

```bash
# Watch logs
tail -f storage/logs/laravel.log
```

---

## Performance Tips

### Development
- Use `composer run dev` to run all services together
- Enable debug mode: `APP_DEBUG=true`
- Use Vite HMR for instant updates

### Production
- Disable debug: `APP_DEBUG=false`
- Cache configs: `php artisan config:cache`
- Cache routes: `php artisan route:cache`
- Optimize composer: `composer install --optimize-autoloader --no-dev`
- Build assets: `npm run build`
- Enable OPcache in PHP

---

## Common Issues

### Port Already in Use
```bash
# Find process using port 8000
netstat -ano | findstr :8000

# Kill process (Windows)
taskkill /PID <PID> /F

# Use different port
php artisan serve --port=8080
```

### Vite Not Connecting
```bash
# Kill and restart
npm run dev
```

### Database Locked (SQLite)
```bash
# Stop all PHP processes
taskkill /F /IM php.exe

# Restart server
php artisan serve
```

### Permission Errors
```bash
# Windows: Run as Administrator
# Linux/Mac:
chmod -R 755 storage bootstrap/cache
```

---

## Git Workflow

### Branch Strategy
- `main` - Production ready code
- `develop` - Development branch
- `feature/*` - Feature branches

### Commit Messages
```
feat: Add new product section
fix: Resolve mobile menu bug
docs: Update README
style: Format code with Pint
refactor: Restructure product cards
test: Add product tests
```

### Before Commit
```bash
# Fix code style
./vendor/bin/pint

# Run tests
php artisan test

# Check for errors
php artisan config:clear
php artisan view:clear
```

---

## Useful Links

- **Laravel Docs:** https://laravel.com/docs
- **TailwindCSS:** https://tailwindcss.com/docs
- **Vite:** https://vitejs.dev
- **Font Awesome:** https://fontawesome.com/icons
- **Fancybox:** https://fancyapps.com/fancybox/

---

## Team Contact

- **Email:** info@shouryanapkins.com
- **Phone:** +91 98765 43210
- **Instagram:** @shourya_napkin_industries

---

**Last Updated:** December 4, 2025
