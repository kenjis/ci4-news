# CodeIgniter 4 News Tutorial

See <https://codeigniter4.github.io/CodeIgniter4/tutorial/index.html>.

But this code uses [Auto Routing (Improved)](https://codeigniter4.github.io/CodeIgniter4/incoming/routing.html#auto-routing-improved).

## Folder Structure

```
ci4-news/
├── app/
├── tests/
├── composer.json
├── composer.lock
├── public/
│   ├── .htaccess
│   └── index.php
└── vendor/
    └── codeigniter4/
        └── codeigniter4/
```

## Requirements

- PHP 7.4 or later
- `composer` command (See [Composer Installation](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos))
- Git

## How to Use

### Installation

```console
$ git clone https://github.com/kenjis/ci4-news
$ cd ci4-news/
$ git checkout auto-routing
$ composer install
```

### Database Migration and Seeding

Optional, if you use SQLite3 by default.

```console
$ php spark migrate
$ php spark db:seed NewsSeeder
```

### Run PHP built-in Server

```console
$ php spark serve
```

### URLs

| Method | URL                               | Controller       | Description                         |
|--------|-----------------------------------|------------------|-------------------------------------|
| GET    | http://localhost:8080/            | Home::getIndex   | the CodeIgniter Welcome page        |
| GET    | http://localhost:8080/pages       | Pages::getIndex  | the CodeIgniter Welcome page        |
| GET    | http://localhost:8080/pages/home  | Pages::getIndex  | the “home” page                     |
| GET    | http://localhost:8080/pages/about | Pages::getIndex  | the “about” page                    |
| GET    | http://localhost:8080/pages/shop  | Pages::getIndex  | a “404 - File Not Found” error page |
| GET    | http://localhost:8080/news        | News::getIndex   | the news list page                  |
| GET    | http://localhost:8080/news/{slug} | News::getIndex   | the news item page                  |
| GET    | http://localhost:8080/news/create | News::getCreate  | the news create form                |
| POST   | http://localhost:8080/news/create | News::postCreate | the news creation and the result    |

#### Routes

```
+------------+-------------+------+-----------------------------------+----------------+---------------+
| Method     | Route       | Name | Handler                           | Before Filters | After Filters |
+------------+-------------+------+-----------------------------------+----------------+---------------+
| GET(auto)  | /           |      | \App\Controllers\Home::getIndex   |                | toolbar       |
| GET(auto)  | news[/..]   |      | \App\Controllers\News::getIndex   |                | toolbar       |
| GET(auto)  | news/create |      | \App\Controllers\News::getCreate  |                | toolbar       |
| POST(auto) | news/create |      | \App\Controllers\News::postCreate | csrf           | toolbar       |
| GET(auto)  | pages[/..]  |      | \App\Controllers\Pages::getIndex  |                | toolbar       |
+------------+-------------+------+-----------------------------------+----------------+---------------+
```

### Run PHPUnit Tests

```console
$ composer test
```

## Related Projects for CodeIgniter 4.x

### Libraries

- [CodeIgniter 3 to 4 Upgrade Helper](https://github.com/kenjis/ci3-to-4-upgrade-helper)
- [CodeIgniter3-like Captcha](https://github.com/kenjis/ci3-like-captcha)
- [PHPUnit Helper](https://github.com/kenjis/phpunit-helper)
- [CodeIgniter4 Attribute Routes](https://github.com/kenjis/ci4-attribute-routes)
- [CodeIgniter Simple and Secure Twig](https://github.com/kenjis/codeigniter-ss-twig)
- [CodeIgniter4 Viewi Demo](https://github.com/kenjis/ci4-viewi-demo)

### Tutorials

- [CodeIgniter 4 News Tutorial](https://github.com/kenjis/ci4-news)
- [CodeIgniter 4 Validation Tutorial](https://github.com/kenjis/ci4-validation-tutorial)
- [CodeIgniter4 Code Modules Test](https://github.com/kenjis/ci4-modules-test)
- [CodeIgniter 4 File Upload](https://github.com/kenjis/ci4-file-upload)
- [CodeIgniter 4 QueryBuilder Batch Sample](https://github.com/kenjis/ci4-qb-batch-sample)

### Building Development Environment

- [CodeIgniter4 Application Template](https://github.com/kenjis/ci4-app-template)
- [CodeIgniter4 Composer Installer](https://github.com/kenjis/ci4-composer-installer)
- [docker-codeigniter-apache](https://github.com/kenjis/docker-codeigniter-apache)
