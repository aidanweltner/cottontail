# Cottontail Creative WordPress Theme

## Starter Theme: Sage 10 from Roots

Sage 10 is a theme heavily influenced by [Laravel](http://laravel.com/) and the MVC coding framework. I use it on almost all of my custom WordPress projects. 

## Dependencies & plugins

* **Custom Functionality Plugin** - To handle custom post types, taxonomies & othter content-specific functionality
* **[Advanced Custom Fields](https://www.advancedcustomfields.com/resources/)** - To hold custom meta data for posts
* **[TailwindCSS v2](https://github.com/tailwindlabs/tailwindcss)** - A CSS framework used for styling the frontend

## Requirements for development (usually installed globally on my machine)
* [PHP](http://php.net/manual/en/install.php) >= 7.3
* [Composer](https://getcomposer.org/download/)
* [Node.js](http://nodejs.org/) >= 12.0.7 
* [Yarn](https://yarnpkg.com/en/docs/install)


# How to use & develop
## Install Virtual Server for WordPress 
You will need a virtual server for your WordPress instance. [Local by Flywheel](https://localwp.com/) is easy to set up and free.

## Initialize Repo in Root and Pull Starter Theme & Plugins
Initialize your repo in the root of your local WordPress instance. In local that's located in `<instance name>/app/public`

## Appropriately name theme and functionality plugin for the site
Rename `ctc` directory for the appropriate project. Rename the theme in the WordPress backend in `style.css`. Update `browswerSync()` proxy in `webpack.mix.js` to reflect your local development URL. Refer to WordPress docs on [Plugin Development](https://developer.wordpress.org/plugins/) and [Theme Development](https://developer.wordpress.org/themes/) for options in naming. 

## Build packages & modules for theme
Navigate to theme directory and install composer `composer install` and initialize yarn `yarn`. After packages and modules are built, run `yarn build` to build theme assets.

## Activate theme & plugins in the WordPress dashboard
Dashboard is available at `<local dev URL>/wp-admin`.

## Start developing
[WordPress documentation](https://developer.wordpress.org/) answers a lot of questions about the WordPress API. [Advanced Custom Fields documentation](https://www.advancedcustomfields.com/resources/) also provides a lot of insight into more pointed WordPress development. Documentation on Sage 10 is not yet available as of writing but the [Sage discourse](https://discourse.roots.io/) provide a lot of great help with this modern style of theme development. Sage also uses many borrowed functions and plugins from [Laravel](http://laravel.com/docs) and their docs can be helpful.