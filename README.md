## Laravel Cats
[![Latest Stable Version](https://poser.pugx.org/djaxho/laravel-cats/v/stable)](https://packagist.org/packages/djaxho/laravel-cats)
[![License](https://poser.pugx.org/djaxho/laravel-cats/license)](https://packagist.org/packages/djaxho/laravel-cats)

Make programming fun again by printing cats when debugging and dumping data. 
It works in the browser and console (tinker, artisan commands, unit tests).

> ```
>  /\_/\   _
> ( °w° )<((
>  )   (  ))
> (__ __)//              
> ```

Intended to be comical in the beginning, but has proven itself to be a tool used fairly often for drawing the eye to breaks, or data dumps in views when you aren't sure where dumped data will really end up on a page. Or when your terminal is filled with output and you want to know exactly where your dump ended up id it isn't the final item printed to the console. A big 'ol cat lets your eyes find the target immediately.

## Installation

Require this package with composer. It is recommended to only require the package for development.

```shell
composer require djaxho/laravel-cats --dev
```

## Usage

```php
cc($args); // exactly the same as doing dd($args) in laravel, but adds an ascii cat
c($args); // exactly the same as doing dd($args) in laravel, but adds an ascii cat
```

## Motivation
My intention is simple for this package, yet it is of grave importance to humanity: provide alternative helper functions in the laravel development environment that will print an ascii cat before dumping the data using laravel's own dd() and dump() functions