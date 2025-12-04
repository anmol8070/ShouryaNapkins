# ShouryaNapkins - Project Documentation

**Version:** 1.0.0  
**Last Updated:** December 4, 2025  
**Framework:** Laravel 12.0  
**PHP Version:** ^8.2

---

## Table of Contents

1. [Project Overview](#project-overview)
2. [Technology Stack](#technology-stack)
3. [Project Structure](#project-structure)
4. [Installation & Setup](#installation--setup)
5. [Configuration](#configuration)
6. [Features](#features)
7. [Development](#development)
8. [Deployment](#deployment)
9. [API Reference](#api-reference)
10. [Troubleshooting](#troubleshooting)

---

## Project Overview

**ShouryaNapkins** is a premium tissue products manufacturer website built with Laravel 12. The application showcases the company's product range, manufacturing capabilities, and provides contact information for potential customers.

### Business Domain
- **Industry:** Tissue & Napkin Manufacturing
- **Target Market:** B2B and B2C customers across India
- **Founded:** 2022
- **Core Products:** Paper Napkin Tissue, Facial Tissue, Ultra Soft Facial Tissue

### Key Objectives
- Showcase premium tissue product line
- Provide information about manufacturing excellence
- Enable customer inquiries and quotations
- Highlight eco-friendly and quality certifications

---

## Technology Stack

### Backend
- **Framework:** Laravel 12.0
- **PHP Version:** ^8.2
- **Database:** SQLite (default) / MySQL (configurable)
- **Package Manager:** Composer

### Frontend
- **CSS Framework:** TailwindCSS 4.0
- **Build Tool:** Vite 7.0.7
- **JavaScript:** Vanilla JS with modern ES modules
- **Icons:** Font Awesome 6.4.0
- **Animation Library:** AOS (Animate On Scroll)
- **Image Gallery:** Fancybox 3.5.7

### Development Tools
- **Artisan:** Laravel's command-line interface
- **Pail:** Real-time log viewer
- **Pint:** PHP code style fixer
- **Concurrently:** Run multiple commands simultaneously

### Additional Libraries
- **Laravel Tinker:** REPL for Laravel
- **Axios:** HTTP client
- **jQuery:** For Fancybox support

---

## Project Structure

```
ShouryaNapkins/
├── app/
│   ├── Http/
│   │   └── Controllers/         # Application controllers (empty - using closures)
│   ├── Models/                  # Eloquent models
│   └── Providers/               # Service providers
│
├── bootstrap/                   # Framework bootstrap files
│
├── config/                      # Configuration files
│
├── database/
│   ├── factories/               # Model factories for testing
│   ├── migrations/              # Database migrations
│   └── seeders/                 # Database seeders
│
├── public/                      # Public web root
│   ├── css/                     # Compiled CSS
│   │   ├── app.css             # Main application styles
│   │   └── home.css            # Homepage specific styles
│   ├── Images/                  # Image assets
│   │   ├── video.mp4           # Hero section video
│   │   ├── machine.jpg         # Manufacturing machinery
│   │   ├── tissue.jpg          # Product images
│   │   └── ...
│   ├── js/                      # Compiled JavaScript
│   └── index.php               # Application entry point
│
├── resources/
│   ├── css/                     # Source CSS files
│   ├── js/                      # Source JavaScript files
│   │   ├── app.js              # Main JS entry point
│   │   ├── bootstrap.js        # Bootstrap configuration
│   │   └── scroll.js           # Scroll effects
│   └── views/                   # Blade templates
│       ├── layouts/
│       │   └── app.blade.php   # Main layout template
│       ├── home.blade.php      # Homepage view
│       └── welcome.blade.php   # Laravel welcome page
│
├── routes/
│   ├── web.php                 # Web routes
│   └── console.php             # Console routes
│
├── storage/                     # Storage for logs, cache, sessions
│
├── tests/                       # Application tests
│
├── vendor/                      # Composer dependencies
│
├── .env.example                 # Environment variables template
├── .editorconfig               # Editor configuration
├── .gitignore                  # Git ignore rules
├── artisan                     # Artisan CLI
├── composer.json               # PHP dependencies
├── Dockerfile                  # Docker configuration
├── package.json                # Node dependencies
├── phpunit.xml                 # PHPUnit configuration
├── README.md                   # Project readme
└── vite.config.js              # Vite configuration

```

---

## Installation & Setup

### Prerequisites
- PHP >= 8.2
- Composer
- Node.js >= 18.x
- NPM or Yarn
- SQLite or MySQL database

### Step-by-Step Installation

#### 1. Clone the Repository
```bash
git clone <repository-url>
cd ShouryaNapkins
```

#### 2. Install PHP Dependencies
```bash
composer install
```

#### 3. Install Node Dependencies
```bash
npm install
```

#### 4. Environment Configuration
```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

#### 5. Database Setup
```bash
# Create SQLite database (if using SQLite)
touch database/database.sqlite

# Run migrations
php artisan migrate
```

#### 6. Build Assets
```bash
# Development build
npm run dev

# Production build
npm run build
```

#### 7. Start Development Server
```bash
# Option 1: Using composer dev script (recommended)
composer run dev

# This runs concurrently:
# - php artisan serve (web server)
# - php artisan queue:listen (queue worker)
# - php artisan pail (log viewer)
# - npm run dev (Vite dev server)

# Option 2: Separate terminals
# Terminal 1: Start Laravel server
php artisan serve

# Terminal 2: Start Vite dev server
npm run dev
```

#### 8. Access the Application
Open your browser and navigate to:
```
http://localhost:8000
```

---

## Configuration

### Environment Variables

The `.env` file contains all application configuration. Key variables:

```env
# Application
APP_NAME=ShouryaNapkins
APP_ENV=local|production
APP_DEBUG=true|false
APP_URL=http://localhost

# Database
DB_CONNECTION=sqlite
# For MySQL, uncomment and configure:
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=shouryanapkins
# DB_USERNAME=root
# DB_PASSWORD=

# Session
SESSION_DRIVER=database
SESSION_LIFETIME=120

# Queue
QUEUE_CONNECTION=database

# Cache
CACHE_STORE=database

# Mail
MAIL_MAILER=log
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"
```

### Database Configuration

#### Using SQLite (Default)
1. Create database file: `touch database/database.sqlite`
2. Ensure `DB_CONNECTION=sqlite` in `.env`

#### Using MySQL
1. Update `.env`:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=shouryanapkins
DB_USERNAME=root
DB_PASSWORD=your_password
```
2. Create database: `CREATE DATABASE shouryanapkins;`
3. Run migrations: `php artisan migrate`

---

## Features

### 1. Hero Section
- **Video Background:** Autoplay production line video
- **Animated Elements:** Floating particles and gradient shapes
- **Call-to-Action Buttons:** Explore Products, Get Quote
- **Feature Badges:** Eco-Friendly, Premium Quality, Bulk Orders
- **Statistics Display:** 24/7 Production, 100% Quality Check

### 2. Statistics Section
- **Animated Counters:** Count up animation on scroll
- **Key Metrics:**
  - 100+ Happy Customers
  - 50+ Products Range
  - 2+ Years Experience
  - 100% Quality Assurance

### 3. About Section
- **Company Story:** Background and mission
- **Feature Grid:**
  - Eco-Friendly Production
  - Premium Quality (ISO certified)
  - Nationwide Delivery
  - 24/7 Support
- **Image Gallery:** Manufacturing facility images

### 4. Products Section
- **Product Cards:** Interactive cards with hover effects
- **Product Categories:**
  1. **Paper Napkin Tissue**
     - Features: Bulk Packing, Custom Printing, Multiple Layers
  2. **Facial Tissue**
     - Features: Hypoallergenic, Lotion Infused, Ultra Soft
  3. **Ultra Soft Facial Tissue**
     - Features: 3-Ply Strength, Scent Free, Biodegradable
- **Actions:** Get Quote, View Details

### 5. Gallery Section
- **Lightbox Integration:** Fancybox for image viewing
- **Image Categories:**
  - Production Line
  - Quality Check
  - Finished Products

### 6. Contact Section
- **Contact Information:**
  - Email: info@shouryanapkins.com
  - Website: www.shouryanapkins.com
  - Phone: +91 98765 43210
  - Address: Mumbai, Maharashtra
- **Embedded Map:** Google Maps integration
- **Quick Actions:**
  - WhatsApp Now
  - Call Now
  - Email Us
- **Social Media Links:**
  - Instagram: @shourya_napkin_industries
  - Facebook
  - YouTube
  - LinkedIn

### 7. Call-to-Action Section
- **Animated Particles Background**
- **Quote Request Button**

### 8. Responsive Design
- **Mobile-First Approach**
- **Breakpoints:** Mobile, Tablet, Desktop
- **Touch-Friendly:** Optimized for touch devices

### 9. Animations
- **Scroll Animations:** AOS library integration
- **Hover Effects:** Interactive UI elements
- **Smooth Scrolling:** Custom scroll behavior
- **Particle Effects:** Floating animations

---

## Development

### Available Commands

#### Composer Scripts
```bash
# Run all development services concurrently
composer run dev

# Run tests
composer run test

# Setup project (install, migrate, build)
composer run setup
```

#### Artisan Commands
```bash
# Start development server
php artisan serve

# Run queue worker
php artisan queue:listen

# View logs in real-time
php artisan pail

# Clear configuration cache
php artisan config:clear

# Clear all caches
php artisan cache:clear
php artisan view:clear
php artisan route:clear
```

#### NPM Scripts
```bash
# Start Vite development server
npm run dev

# Build for production
npm run build
```

### Code Style

#### PHP (Laravel Pint)
```bash
# Fix code style
./vendor/bin/pint

# Check code style without fixing
./vendor/bin/pint --test
```

#### JavaScript
- Follow ES6+ standards
- Use modern syntax (arrow functions, destructuring, etc.)
- Keep code modular and organized

### Adding New Routes

Edit `routes/web.php`:
```php
Route::get('/example', function () {
    return view('example');
})->name('example');
```

### Creating New Views

Create Blade template in `resources/views/`:
```blade
@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <!-- Your content here -->
@endsection
```

### Adding New Styles

1. Create/edit CSS in `public/css/`
2. Link in Blade template:
```blade
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
@endpush
```

### Adding New JavaScript

1. Create JS file in `resources/js/`
2. Import in `resources/js/app.js`:
```javascript
import './custom.js';
```

---

## Deployment

### Production Checklist

1. **Environment Configuration**
```bash
# Update .env for production
APP_ENV=production
APP_DEBUG=false
APP_URL=https://yourdomain.com
```

2. **Optimize Application**
```bash
# Cache configuration
php artisan config:cache

# Cache routes
php artisan route:cache

# Cache views
php artisan view:cache

# Optimize autoloader
composer install --optimize-autoloader --no-dev
```

3. **Build Assets**
```bash
npm run build
```

4. **Set Permissions**
```bash
chmod -R 755 storage bootstrap/cache
```

5. **Database Migration**
```bash
php artisan migrate --force
```

### Using Docker

A `Dockerfile` is included in the project. To build and run:

```bash
# Build Docker image
docker build -t shouryanapkins .

# Run container
docker run -p 8000:80 shouryanapkins
```

### Server Requirements

- PHP >= 8.2
- Web Server (Apache/Nginx)
- Database (MySQL/PostgreSQL/SQLite)
- Composer
- Node.js & NPM

### Nginx Configuration Example

```nginx
server {
    listen 80;
    server_name yourdomain.com;
    root /path/to/ShouryaNapkins/public;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-Content-Type-Options "nosniff";

    index index.php;

    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    error_page 404 /index.php;

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```

---

## API Reference

Currently, this project is a frontend-focused application without dedicated API endpoints. Routes are defined in `routes/web.php`.

### Current Routes

| Method | URI  | Name | Description |
|--------|------|------|-------------|
| GET    | `/`  | home | Homepage   |

### Future API Endpoints (Planned)

- `POST /api/contact` - Submit contact form
- `POST /api/quote` - Request product quote
- `GET /api/products` - Get product list
- `GET /api/products/{id}` - Get product details

---

## Troubleshooting

### Common Issues

#### 1. "No application encryption key has been set"
```bash
php artisan key:generate
```

#### 2. Blank Page / 500 Error
```bash
# Check logs
tail -f storage/logs/laravel.log

# Clear caches
php artisan config:clear
php artisan cache:clear
php artisan view:clear
```

#### 3. Permission Denied Errors
```bash
chmod -R 755 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

#### 4. Assets Not Loading
```bash
# Rebuild assets
npm run build

# Check public directory permissions
chmod -R 755 public
```

#### 5. Database Connection Failed
- Verify database credentials in `.env`
- Ensure database exists
- Check database service is running

#### 6. Vite Connection Error
```bash
# Restart Vite dev server
npm run dev

# Check if port 5173 is available
```

### Debug Mode

Enable debug mode in `.env`:
```env
APP_DEBUG=true
LOG_LEVEL=debug
```

**⚠️ Warning:** Never enable debug mode in production!

### Getting Help

1. Check Laravel documentation: https://laravel.com/docs
2. Review application logs: `storage/logs/laravel.log`
3. Run diagnostics: `php artisan about`

---

## Performance Optimization

### Caching Strategies

1. **Configuration Cache**
```bash
php artisan config:cache
```

2. **Route Cache**
```bash
php artisan route:cache
```

3. **View Cache**
```bash
php artisan view:cache
```

### Database Optimization

1. **Index Important Columns**
2. **Use Eager Loading** to prevent N+1 queries
3. **Enable Query Caching**

### Asset Optimization

1. **Minify CSS/JS** (automatic in production build)
2. **Optimize Images** before uploading
3. **Use CDN** for static assets
4. **Enable Browser Caching**

---

## Security Best Practices

1. **Keep Dependencies Updated**
```bash
composer update
npm update
```

2. **Use HTTPS** in production
3. **Set Proper File Permissions**
4. **Disable Debug Mode** in production
5. **Use Environment Variables** for sensitive data
6. **Enable CSRF Protection** (enabled by default)
7. **Sanitize User Input**
8. **Regular Security Audits**

---

## Maintenance

### Regular Tasks

1. **Clear Old Logs**
```bash
php artisan log:clear
```

2. **Update Dependencies**
```bash
composer update
npm update
```

3. **Backup Database**
```bash
php artisan backup:run
```

4. **Monitor Disk Space**
5. **Review Application Logs**

---

## Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Run tests: `composer run test`
5. Fix code style: `./vendor/bin/pint`
6. Submit a pull request

---

## License

This project is proprietary software belonging to ShouryaNapkins. All rights reserved.

---

## Contact Information

**ShouryaNapkins**  
Email: info@shouryanapkins.com  
Phone: +91 98765 43210  
Website: www.shouryanapkins.com  
Instagram: @shourya_napkin_industries

**Technical Support**  
For technical issues, contact the development team.

---

## Changelog

### Version 1.0.0 (December 2025)
- Initial release
- Homepage with hero section
- Product showcase
- Contact section with map
- Responsive design
- Animation effects

---

## Acknowledgments

- **Laravel Framework** - The PHP Framework for Web Artisans
- **TailwindCSS** - Utility-first CSS framework
- **Font Awesome** - Icon library
- **Fancybox** - Lightbox library
- **AOS** - Animate On Scroll library

---

**Last Updated:** December 4, 2025  
**Documentation Version:** 1.0.0
