# ShouryaNapkins - Technical Architecture

**Version:** 1.0.0  
**Last Updated:** December 4, 2025

---

## Table of Contents

1. [System Overview](#system-overview)
2. [Architecture Layers](#architecture-layers)
3. [Technology Stack](#technology-stack)
4. [Application Flow](#application-flow)
5. [Frontend Architecture](#frontend-architecture)
6. [Backend Architecture](#backend-architecture)
7. [Database Schema](#database-schema)
8. [Asset Pipeline](#asset-pipeline)
9. [Security Architecture](#security-architecture)
10. [Performance Optimization](#performance-optimization)

---

## System Overview

### Application Type
Single-page marketing website for ShouryaNapkins tissue manufacturing company.

### Architecture Pattern
**MVC (Model-View-Controller)** with Laravel framework

### Deployment Model
- **Development:** Local development server
- **Production:** Web server (Nginx/Apache) with PHP-FPM
- **Containerization:** Docker support available

---

## Architecture Layers

```
┌─────────────────────────────────────────────────┐
│              Presentation Layer                  │
│  (Blade Templates, CSS, JavaScript, Images)     │
└─────────────────────────────────────────────────┘
                      ↕
┌─────────────────────────────────────────────────┐
│             Application Layer                    │
│        (Routes, Controllers, Middleware)        │
└─────────────────────────────────────────────────┘
                      ↕
┌─────────────────────────────────────────────────┐
│              Business Logic Layer               │
│           (Models, Services, Helpers)           │
└─────────────────────────────────────────────────┘
                      ↕
┌─────────────────────────────────────────────────┐
│               Data Layer                         │
│            (Eloquent ORM, Database)             │
└─────────────────────────────────────────────────┘
```

---

## Technology Stack

### Backend Stack

| Component | Technology | Version | Purpose |
|-----------|------------|---------|---------|
| **Framework** | Laravel | 12.0 | Web application framework |
| **Language** | PHP | 8.2+ | Server-side programming |
| **ORM** | Eloquent | Built-in | Database abstraction |
| **Template Engine** | Blade | Built-in | View rendering |
| **Package Manager** | Composer | Latest | Dependency management |

### Frontend Stack

| Component | Technology | Version | Purpose |
|-----------|------------|---------|---------|
| **CSS Framework** | TailwindCSS | 4.0.0 | Utility-first styling |
| **JavaScript** | Vanilla JS | ES6+ | Client-side logic |
| **Build Tool** | Vite | 7.0.7 | Fast HMR and bundling |
| **HTTP Client** | Axios | 1.11.0 | AJAX requests |

### UI Libraries

| Library | Version | Purpose |
|---------|---------|---------|
| Font Awesome | 6.4.0 | Icon library |
| AOS | Latest | Scroll animations |
| Fancybox | 3.5.7 | Image lightbox |
| jQuery | Latest | Fancybox dependency |

### Database

| Type | Technology | Purpose |
|------|------------|---------|
| **Default** | SQLite | Development database |
| **Production** | MySQL/PostgreSQL | Production database |

### Development Tools

| Tool | Purpose |
|------|---------|
| Laravel Pint | PHP code style fixer |
| Laravel Pail | Real-time log viewer |
| Concurrently | Run multiple dev servers |
| Artisan | CLI tool |

---

## Application Flow

### Request Lifecycle

```
User Request (HTTP)
    ↓
Public/index.php (Entry Point)
    ↓
Bootstrap Laravel Application
    ↓
Load Service Providers
    ↓
Route Matching (routes/web.php)
    ↓
Middleware Pipeline
    ↓
Controller/Closure Execution
    ↓
Blade View Rendering
    ↓
Response Generation
    ↓
Send Response to User
```

### Current Flow Diagram

```
┌──────────┐
│  Browser │
└─────┬────┘
      │ GET /
      ↓
┌─────────────────┐
│  routes/web.php │
│  Route::get('/') │
└─────┬───────────┘
      │
      ↓
┌──────────────────────┐
│  Closure Function    │
│  return view('home') │
└─────┬────────────────┘
      │
      ↓
┌───────────────────────────┐
│  resources/views/home.blade.php │
└─────┬─────────────────────┘
      │ extends layouts/app
      ↓
┌──────────────────────────────┐
│ resources/views/layouts/app.blade.php │
└─────┬────────────────────────┘
      │
      ↓
┌─────────────────┐
│  HTML Response  │
└─────┬───────────┘
      │
      ↓
┌──────────┐
│  Browser │
│ (Renders) │
└──────────┘
```

---

## Frontend Architecture

### Component Structure

```
Frontend Architecture
│
├── Layouts
│   └── app.blade.php (Master layout)
│
├── Pages
│   └── home.blade.php (Homepage)
│
├── Sections (in home.blade.php)
│   ├── Hero Section
│   ├── Stats Section
│   ├── About Section
│   ├── Products Section
│   ├── Gallery Section
│   ├── Contact Section
│   └── CTA Section
│
├── Assets
│   ├── CSS
│   │   ├── app.css (Global styles)
│   │   └── home.css (Page-specific styles)
│   │
│   ├── JavaScript
│   │   ├── app.js (Entry point)
│   │   ├── bootstrap.js (Axios setup)
│   │   └── scroll.js (Scroll effects)
│   │
│   └── Images
│       ├── video.mp4
│       ├── machine.jpg
│       └── product images
│
└── External Libraries
    ├── Font Awesome (Icons)
    ├── Fancybox (Gallery)
    └── AOS (Animations)
```

### CSS Architecture

```css
/* Layered CSS Structure */

/* 1. Reset & Base */
/* - Normalize styles
   - Base element styles */

/* 2. Layout */
/* - Container widths
   - Grid systems
   - Flexbox utilities */

/* 3. Components */
/* - Hero section
   - Product cards
   - Contact forms
   - Navigation */

/* 4. Utilities */
/* - Spacing helpers
   - Text utilities
   - Color utilities */

/* 5. Animations */
/* - Keyframe definitions
   - Transition effects
   - Scroll animations */
```

### JavaScript Modules

```javascript
// resources/js/app.js
import './bootstrap';
import './scroll';

// Main application initialization
document.addEventListener('DOMContentLoaded', () => {
    // Initialize components
    initializeCounters();
    initializeGallery();
    initializeScrollEffects();
});
```

### State Management

Currently using vanilla JavaScript with DOM manipulation. No state management library.

Future consideration: Vue.js or Alpine.js for reactive components.

---

## Backend Architecture

### MVC Pattern Implementation

```
┌─────────────────────────────────────┐
│            Routes Layer              │
│         (routes/web.php)            │
│  - Route definitions                │
│  - Route groups                     │
│  - Named routes                     │
└────────────┬────────────────────────┘
             ↓
┌─────────────────────────────────────┐
│          Controller Layer            │
│    (app/Http/Controllers/)          │
│  - Request handling                 │
│  - Business logic orchestration     │
│  - Response generation              │
└────────────┬────────────────────────┘
             ↓
┌─────────────────────────────────────┐
│           Model Layer                │
│         (app/Models/)               │
│  - Database interaction             │
│  - Business rules                   │
│  - Relationships                    │
└────────────┬────────────────────────┘
             ↓
┌─────────────────────────────────────┐
│            View Layer                │
│      (resources/views/)             │
│  - Blade templates                  │
│  - UI components                    │
│  - Frontend logic                   │
└─────────────────────────────────────┘
```

### Current Route Structure

```php
// routes/web.php
Route::get('/', function () {
    return view('home');
})->name('home');

// Future routes (planned)
// Route::get('/products', [ProductController::class, 'index']);
// Route::get('/contact', [ContactController::class, 'show']);
// Route::post('/contact', [ContactController::class, 'submit']);
```

### Middleware Stack

Default Laravel middleware:
1. **EncryptCookies** - Encrypt cookies
2. **AddQueuedCookiesToResponse** - Add queued cookies
3. **StartSession** - Start session
4. **ShareErrorsFromSession** - Share validation errors
5. **VerifyCsrfToken** - CSRF protection
6. **SubstituteBindings** - Route model binding

---

## Database Schema

### Current Schema

No custom tables currently. Using Laravel default tables:

```
database/
├── migrations/
│   └── (Standard Laravel migrations)
│
└── database.sqlite
```

### Future Schema (Proposed)

#### Products Table

```sql
CREATE TABLE products (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    slug VARCHAR(255) UNIQUE NOT NULL,
    description TEXT,
    short_description VARCHAR(500),
    image VARCHAR(255),
    price DECIMAL(10, 2),
    features JSON,
    is_featured BOOLEAN DEFAULT 0,
    created_at TIMESTAMP,
    updated_at TIMESTAMP
);
```

#### Inquiries Table

```sql
CREATE TABLE inquiries (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20),
    product_id BIGINT NULL,
    message TEXT,
    status ENUM('new', 'read', 'replied') DEFAULT 'new',
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
    
    FOREIGN KEY (product_id) REFERENCES products(id)
);
```

#### Gallery Table

```sql
CREATE TABLE gallery_images (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255),
    description TEXT,
    image VARCHAR(255) NOT NULL,
    category VARCHAR(100),
    order INT DEFAULT 0,
    created_at TIMESTAMP,
    updated_at TIMESTAMP
);
```

### Database Connections

```php
// config/database.php
'connections' => [
    'sqlite' => [
        'driver' => 'sqlite',
        'database' => env('DB_DATABASE', database_path('database.sqlite')),
        'prefix' => '',
        'foreign_key_constraints' => true,
    ],
    
    'mysql' => [
        'driver' => 'mysql',
        'host' => env('DB_HOST', '127.0.0.1'),
        'port' => env('DB_PORT', '3306'),
        'database' => env('DB_DATABASE', 'shouryanapkins'),
        'username' => env('DB_USERNAME', 'root'),
        'password' => env('DB_PASSWORD', ''),
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
    ],
];
```

---

## Asset Pipeline

### Build Process

```
Source Files                  Build Process              Output
────────────                 ──────────────             ──────

resources/js/app.js    →    Vite Bundle     →    public/build/assets/app.*.js
resources/css/app.css  →    TailwindCSS     →    public/build/assets/app.*.css
                            PostCSS
                            
public/css/home.css    →    (Static)        →    public/css/home.css
public/Images/*        →    (Static)        →    public/Images/*
```

### Vite Configuration

```javascript
// vite.config.js
export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
```

### Asset Loading - Development

```blade
{{-- In layouts/app.blade.php --}}
@vite(['resources/css/app.css', 'resources/js/app.js'])

{{-- Additional page-specific assets --}}
@stack('styles')
@stack('scripts')
```

### Asset Loading - Production

```blade
{{-- Vite generates versioned assets --}}
<link rel="stylesheet" href="/build/assets/app.a1b2c3d4.css">
<script src="/build/assets/app.e5f6g7h8.js"></script>
```

### Image Optimization

Current: Manual optimization before upload
Future: Consider implementing:
- Laravel Intervention Image
- Automatic WebP conversion
- Lazy loading implementation

---

## Security Architecture

### Security Layers

```
┌──────────────────────────────────────┐
│      Web Application Firewall        │
│         (Optional - Cloudflare)      │
└──────────────────┬───────────────────┘
                   ↓
┌──────────────────────────────────────┐
│         HTTPS/SSL Layer              │
│      (TLS 1.2/1.3 Encryption)       │
└──────────────────┬───────────────────┘
                   ↓
┌──────────────────────────────────────┐
│      Laravel Security Features       │
│  - CSRF Protection                   │
│  - XSS Prevention                    │
│  - SQL Injection Prevention          │
│  - Password Hashing (bcrypt)         │
└──────────────────┬───────────────────┘
                   ↓
┌──────────────────────────────────────┐
│      Application Logic               │
│  - Input Validation                  │
│  - Output Escaping                   │
│  - Authorization Checks              │
└──────────────────┬───────────────────┘
                   ↓
┌──────────────────────────────────────┐
│         Database Layer               │
│  - Parameterized Queries             │
│  - Connection Encryption             │
└──────────────────────────────────────┘
```

### Security Features

#### 1. CSRF Protection
```php
// Automatically enabled for all POST/PUT/DELETE routes
<form method="POST">
    @csrf
    <!-- form fields -->
</form>
```

#### 2. XSS Prevention
```blade
{{-- Auto-escaped output --}}
{{ $userInput }}

{{-- Raw output (use carefully) --}}
{!! $trustedHtml !!}
```

#### 3. SQL Injection Prevention
```php
// Eloquent ORM automatically uses prepared statements
DB::table('users')->where('email', $email)->first();
```

#### 4. Environment Variables
```bash
# Sensitive data in .env (never committed)
APP_KEY=base64:...
DB_PASSWORD=secret
```

#### 5. Headers Security
```php
// Middleware to set security headers
- X-Frame-Options: SAMEORIGIN
- X-Content-Type-Options: nosniff
- X-XSS-Protection: 1; mode=block
```

---

## Performance Optimization

### Backend Optimization

#### 1. Configuration Caching
```bash
php artisan config:cache     # Cache config files
php artisan route:cache      # Cache routes
php artisan view:cache       # Cache Blade templates
```

#### 2. Autoloader Optimization
```bash
composer install --optimize-autoloader --no-dev
```

#### 3. OPcache (PHP)
```ini
; php.ini
opcache.enable=1
opcache.memory_consumption=256
opcache.interned_strings_buffer=16
opcache.max_accelerated_files=10000
```

#### 4. Query Optimization
```php
// Eager loading to prevent N+1 queries
$products = Product::with('category', 'images')->get();

// Query caching
Cache::remember('products', 3600, function () {
    return Product::all();
});
```

### Frontend Optimization

#### 1. Asset Minification
```bash
npm run build  # Automatically minifies CSS/JS
```

#### 2. Image Optimization
- Compress images before upload
- Use appropriate formats (WebP for web)
- Implement lazy loading

#### 3. CDN Integration
```blade
{{-- Use CDN for external libraries --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/...">
```

#### 4. Browser Caching
```apache
# .htaccess
<IfModule mod_expires.c>
    ExpiresActive On
    ExpiresByType image/jpg "access plus 1 year"
    ExpiresByType image/jpeg "access plus 1 year"
    ExpiresByType image/png "access plus 1 year"
    ExpiresByType text/css "access plus 1 month"
    ExpiresByType application/javascript "access plus 1 month"
</IfModule>
```

### Performance Metrics

Target metrics:
- **First Contentful Paint:** < 1.8s
- **Largest Contentful Paint:** < 2.5s
- **Time to Interactive:** < 3.8s
- **Cumulative Layout Shift:** < 0.1

---

## Monitoring & Logging

### Logging Strategy

```php
// config/logging.php
'channels' => [
    'stack' => [
        'driver' => 'stack',
        'channels' => ['single', 'daily'],
    ],
    
    'daily' => [
        'driver' => 'daily',
        'path' => storage_path('logs/laravel.log'),
        'level' => 'debug',
        'days' => 14,
    ],
];
```

### Log Levels
1. **Emergency** - System unusable
2. **Alert** - Action must be taken immediately
3. **Critical** - Critical conditions
4. **Error** - Error conditions
5. **Warning** - Warning conditions
6. **Notice** - Normal but significant
7. **Info** - Informational messages
8. **Debug** - Debug messages

### Monitoring Tools (Recommended)

- **Laravel Telescope** - Debug assistant
- **New Relic** - Application performance monitoring
- **Sentry** - Error tracking
- **Google Analytics** - User behavior

---

## Scalability Considerations

### Horizontal Scaling

```
┌────────────┐
│ Load       │
│ Balancer   │
└─────┬──────┘
      │
      ├─────→ ┌─────────────┐
      │       │ Web Server 1 │
      │       └─────────────┘
      │
      ├─────→ ┌─────────────┐
      │       │ Web Server 2 │
      │       └─────────────┘
      │
      └─────→ ┌─────────────┐
              │ Web Server N │
              └─────────────┘
                     ↓
              ┌─────────────┐
              │  Database   │
              │   Server    │
              └─────────────┘
```

### Caching Strategy

```
┌──────────┐
│ Browser  │ ← Browser Cache
└────┬─────┘
     ↓
┌──────────┐
│   CDN    │ ← Edge Cache
└────┬─────┘
     ↓
┌──────────┐
│  Redis/  │ ← Application Cache
│ Memcached│
└────┬─────┘
     ↓
┌──────────┐
│ Database │ ← Query Cache
└──────────┘
```

### Queue Workers

```bash
# Process background jobs
php artisan queue:work --tries=3 --timeout=60

# Supervisor configuration for production
[program:laravel-worker]
command=php /path/to/artisan queue:work
autostart=true
autorestart=true
```

---

## Backup & Recovery

### Backup Strategy

1. **Database Backups**
   - Daily automated backups
   - Retain for 30 days
   - Store off-site

2. **File Backups**
   - Weekly full backups
   - Daily incremental backups
   - Include uploaded images and assets

3. **Code Backups**
   - Git repository (primary)
   - GitHub/GitLab (remote)

### Recovery Plan

1. Restore database from latest backup
2. Restore files from backup
3. Run migrations if needed
4. Clear and rebuild caches
5. Verify functionality

---

## Development Workflow

### Git Branching Strategy

```
main (production)
  ├── develop (staging)
  │   ├── feature/hero-section
  │   ├── feature/contact-form
  │   └── bugfix/mobile-menu
  └── hotfix/critical-issue
```

### CI/CD Pipeline (Recommended)

```
┌────────────┐
│ Git Push   │
└─────┬──────┘
      ↓
┌────────────┐
│  Run Tests │
│ (PHPUnit)  │
└─────┬──────┘
      ↓
┌────────────┐
│ Code Style │
│  (Pint)    │
└─────┬──────┘
      ↓
┌────────────┐
│   Build    │
│  Assets    │
└─────┬──────┘
      ↓
┌────────────┐
│   Deploy   │
│   Server   │
└────────────┘
```

---

## Future Enhancements

### Planned Features

1. **Admin Panel**
   - Product management
   - Inquiry management
   - Analytics dashboard

2. **API Development**
   - RESTful API
   - Product endpoints
   - Contact form API

3. **Advanced Features**
   - Search functionality
   - Multi-language support
   - Customer portal
   - Online ordering

4. **Performance**
   - Redis caching
   - CDN integration
   - Image optimization

---

## Conclusion

This architecture provides a solid foundation for the ShouryaNapkins website with:
- Clear separation of concerns
- Scalability options
- Security best practices
- Performance optimization
- Room for future growth

---

**Last Updated:** December 4, 2025  
**Maintained by:** ShouryaNapkins Development Team
