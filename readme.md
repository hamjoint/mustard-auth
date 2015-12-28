## Mustard Authentication module

[![StyleCI](https://styleci.io/repos/44763035/shield?style=flat)](https://styleci.io/repos/44763035)
[![Build Status](https://travis-ci.org/hamjoint/mustard-auth.svg)](https://travis-ci.org/hamjoint/mustard-auth)
[![Total Downloads](https://poser.pugx.org/hamjoint/mustard-auth/d/total.svg)](https://packagist.org/packages/hamjoint/mustard-auth)
[![Latest Stable Version](https://poser.pugx.org/hamjoint/mustard-auth/v/stable.svg)](https://packagist.org/packages/hamjoint/mustard-auth)
[![Latest Unstable Version](https://poser.pugx.org/hamjoint/mustard-auth/v/unstable.svg)](https://packagist.org/packages/hamjoint/mustard-auth)
[![License](https://poser.pugx.org/hamjoint/mustard-auth/license.svg)](https://packagist.org/packages/hamjoint/mustard-auth)

User authentication for [Mustard](http://withmustard.org/), the open source marketplace platform.

### Installation

#### Via Composer (using Packagist)

```sh
composer require hamjoint/mustard-auth
```

Then add the Service Provider to config/app.php:

```php
Hamjoint\Mustard\Auth\Providers\MustardAuthServiceProvider::class
```

### Licence

Mustard is free and gratis software licensed under the [GPL3 licence](https://www.gnu.org/licenses/gpl-3.0). This allows you to use Mustard for commercial purposes, but any derivative works (adaptations to the code) must also be released under the same licence. Mustard is built upon the [Laravel framework](http://laravel.com), which is licensed under the [MIT licence](http://opensource.org/licenses/MIT).
