# CodeIgniter 4 News Tutorial

See <https://codeigniter4.github.io/CodeIgniter4/tutorial/index.html>.

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
$ cd /path/to/ci4-news/
$ composer install
```

### Database Migration and Seeding

```console
$ php spark migrate
$ php spark db:seed NewsSeeder
```

### Run PHP built-in Server

```console
$ php spark serve
```

### Run PHPUnit Tests

```console
$ composer test
```

## Related Projects for CodeIgniter 4.x

- [CodeIgniter4 Application Template](https://github.com/kenjis/ci4-app-template)
- [CodeIgniter4 Attribute Routes](https://github.com/kenjis/ci4-attribute-routes)
- [CodeIgniter Simple and Secure Twig](https://github.com/kenjis/codeigniter-ss-twig)
- [CodeIgniter4 Composer Installer](https://github.com/kenjis/ci4-composer-installer)
- [CodeIgniter4 Viewi Demo](https://github.com/kenjis/ci4-viewi-demo)
- [CodeIgniter 4 Validation Tutorial](https://github.com/kenjis/ci4-validation-tutorial)
- [CodeIgniter4 Code Modules Test](https://github.com/kenjis/ci4-modules-test)
- [CodeIgniter3-like Captcha](https://github.com/kenjis/ci3-like-captcha)
- [PHPUnit Helper](https://github.com/kenjis/phpunit-helper)
- [CodeIgniter 3 to 4 Upgrade Helper](https://github.com/kenjis/ci3-to-4-upgrade-helper)
