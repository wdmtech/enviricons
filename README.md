# Enviricons

Environment-specific favicons for your local, development and staging application environments 
in Laravel.

## What does this do?

This package adds various [favicons](http://wikipedia.org/wiki/Favicon) which will help you
differentiate which application environment you are working on when you have several browser tabs open. 

I've made the mistake of working on one environment when I meant to work on a 
different one in the past, so I created this package in order to prevent that from ever happening again! 

## Usage

Publish the assets (the contents of the `/public` folder to your application using

`php artisan asset:publish wdmtech/enviricons`

You may include the default view provided directly in your main blade template like this:
  
`@include('enviricons::enviricons')`

Or, you can publish the view to your application's views folder:

`php artisan view:publish`

## Source .psd

I have included a source `favicon.psd` for you to edit/create new favicons as you see fit. Here is a 
[.ico file photoshop plugin](http://www.telegraphics.com.au/sw/) which you can use to create .ico files in Photoshop.

