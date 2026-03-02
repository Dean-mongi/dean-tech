# Dean Tech - Laravel Conversion

This is the Laravel version of the Dean Tech portfolio website, converted from the original PHP version.

## Features

- **Modern Laravel Framework**: Built with Laravel 12
- **Admin Dashboard**: Complete admin panel for managing services, projects, clients, and messages
- **Authentication**: Simple admin authentication system
- **Responsive Design**: Bootstrap 5 with custom styling
- **Database Migrations**: Complete database schema with migrations
- **Eloquent Models**: All models with relationships
- **Blade Templates**: Clean and organized view structure

## Installation

1. **Clone or copy the laravel-version directory**
2. **Install dependencies**:
   ```bash
   composer install
   ```
3. **Environment setup**:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
4. **Database setup**:
   - Update `.env` with your database credentials
   - Run migrations: `php artisan migrate`
   - Seed database: `php artisan db:seed`

## Default Admin Credentials

- **Username**: `admin`
- **Password**: `password`

## Project Structure

```
laravel-version/
├── app/
│   ├── Models/          # Eloquent models
│   └── Http/
│       ├── Controllers/ # Application controllers
│       └── Controllers/Auth/ # Authentication controllers
├── database/
│   ├── migrations/      # Database migrations
│   └── seeders/         # Database seeders
├── resources/
│   ├── views/           # Blade templates
│   │   ├── layouts/     # Main layout
│   │   ├── auth/        # Authentication views
│   │   ├── admin/       # Admin panel views
│   │   └── public/      # Public page views
│   └── css/             # Custom CSS
├── routes/              # Route definitions
└── public/              # Public assets
```

## Pages

### Public Pages
- **Home** (`/`) - Hero section with services preview
- **About** (`/about`) - About page
- **Services** (`/services`) - Services listing with details
- **Portfolio** (`/portfolio`) - Portfolio/projects page
- **Contact** (`/contact`) - Contact page

### Admin Pages
- **Dashboard** (`/admin/dashboard`) - Overview with statistics
- **Services** (`/admin/services`) - Manage services
- **Projects** (`/admin/projects`) - Manage projects
- **Messages** (`/admin/messages`) - View contact messages
- **Clients** (`/admin/clients`) - Manage clients

## Database Schema

The application includes the following tables:
- `admins` - Admin users
- `services` - Service listings
- `clients` - Client information
- `projects` - Project details
- `messages` - Contact form messages
- `service_requests` - Service request tracking

## Original PHP Project

The original PHP files are preserved in the parent directory (`dean tech/`) for reference.

## Technologies Used

- **Backend**: Laravel 12, PHP 8.2+
- **Frontend**: Bootstrap 5, Font Awesome
- **Database**: MySQL/MariaDB
- **Authentication**: Laravel's built-in authentication