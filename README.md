[![Latest Stable Version](https://poser.pugx.org/wdmtech/enviricons/version)](https://packagist.org/packages/wdmtech/enviricons) 
[![Latest Unstable Version](https://poser.pugx.org/wdmtech/enviricons/v/unstable)](//packagist.org/packages/wdmtech/enviricons) 
[![Total Downloads](https://poser.pugx.org/wdmtech/enviricons/downloads)](https://packagist.org/packages/wdmtech/enviricons)
[![Code Climate](https://codeclimate.com/github/wdmtech/enviricons/badges/gpa.svg)](https://codeclimate.com/github/wdmtech/enviricons)
[![License](https://poser.pugx.org/wdmtech/enviricons/license)](https://packagist.org/packages/wdmtech/enviricons)
![Demonstration screenshot](https://github.com/wdmtech/enviricons/blob/master/demo_screenshot.png)

# Laravel 5 Enviricons

Environment-specific favicons for your `local`, `development`, `staging` and `live` application environments in [Laravel](http://laravel.com) 4.1, 4.2 and 5.x (use the laravel_4_2 branch for older versions)

## What does this do?

This package adds environment-specific [favicons](http://wikipedia.org/wiki/Favicon) which will help you differentiate which application environment you are working on when you have multiple browser tabs open for the same app. 

I&rsquo;ve made the mistake of working on the wrong environment in the past &mdash; so I created this package in order to help prevent that from happening again! 

## Usage

Require this package using composer:

```BASH
composer require wdmtech/enviricons
```

Next, add the following line to your `providers` array in `config/app.php`:

```PHP
Wdmtech\Enviricons\EnviriconsServiceProvider::class,
```

Publish the assets and config to your application using:

```BASH
php artisan vendor:publish --tag=enviricons --force
```

Include the default view provided directly in your main blade template like this:
  
```PHP
@include('enviricons::enviricons')
```


&hellip;or optionally publish the view to your application's views folder using:

```BASH
php artisan vendor:publish --tag=enviricons-optional-view --force
```

You can then modify and include the view in any way you wish.

## Source .psd

I have included a source `favicon.psd` for you to edit/create new favicons as you see fit. Here is a 
[.ico file photoshop plugin](http://www.telegraphics.com.au/sw/) which you can use to create .ico files in Photoshop.

