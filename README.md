# Vuetify Starter

This is a starter template for [Inertia.js](https://inertiajs.com/) applications with [Vuetify 3](https://vuetifyjs.com/).

## Requirements

- PHP 8.0+
- Node.js 20+
- Composer 2

## Installation

```bash
git clone https://github.com/gozonjoedaimar/vuetifystarter.git
cd vuetifystarter
composer install
npm install
cp .env.example .env
touch database/database.sqlite # for getting started only. You should use a real database in production
php artisan key:generate
php artisan migrate --seed
```

## Development

Start the development server with:

```bash
npm run dev
```

This will start the development server on `http://localhost:8080`.
