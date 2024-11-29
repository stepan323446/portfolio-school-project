# Portfolio Webstie
*Project for school. Primary portfolio: [GitHub](https://github.com/stepan323446/portfolio-site) | [Website](https://steve-dekart.xyz/)*

A personal portfolio website built using HTML, CSS, JavaScript, PHP, and Telegram API. It features sections like "Skills" "Projects" and "Contacts." The website includes a contact form integrated with Telegram API, allowing users to send messages directly to my Telegram account for instant communication.

* [Run and Deploy](#run-and-deploy)
    * [php-fpm](#php-fpm)
    * [nginx](#nginx)
    * [apache](#apache)
* [Pages and Router](#pages-and-router)
* [Config](#config)
* [Data storage](#data-storage)
* [Telegram Bot](#config)

## Run and Deploy

Before launching, be sure to specify the home url (`HOME_URL` variable) for the site in `config.php`. [More details](#config)

### php-fpm

While in the root directory, start the php-fpm server. 
```shell
php -S localhost:8000
```
In this context, `HOME_URL` in the config.php file will be: `http://localhost:8000`

### Nginx

To set up the site, create a new configuration file for Nginx in `/etc/nginx/sites-available/your_config.conf`. Specify the root directory and configure `try_files` along with PHP-FPM to handle .php files.

```nginx
server {
    server_name domain.com www.domain.xyz;
    charset     utf-8;
    root /path/to/your/site/;

    access_log /var/log/nginx/portfolio_vts_access.log;
    error_log /var/log/nginx/portfolio_vts_error.log;

    location / {
        root /path/to/your/site/;
        try_files $uri /portfolio-school-project/index.php$is_args$args;
    }


    # PHP FPM
    location ~ \.php$ {
        include fastcgi_params;
        include fastcgi.conf;

        # fastcgi_pass 127.0.0.1:9000; # using TCP
        fastcgi_pass unix:/run/php/php8.1-fpm.sock; # using socket, replace with your PHP version
    }

```

### Apache

To set up the site with Apache, create a new configuration file for your site in `/etc/apache2/sites-available/your_config.conf`. The configuration should specify the root directory and ensure PHP files are handled correctly.

```apache
<VirtualHost *:80>
    ServerAdmin webmaster@domain.com
    ServerName domain.com
    ServerAlias www.domain.com

    DocumentRoot /path/to/your/site
    DirectoryIndex index.php

    # PHP configuration
    <Directory /path/to/your/site>
        AllowOverride All
        Require all granted
    </Directory>

    # Logging configuration
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
```

Afterwards, activate the site and launch all the necessary modules:

```shell
sudo a2ensite your_config.conf
sudo a2enmod php8.1  # Replace with your PHP version
sudo a2enmod rewrite
```

The project uses a `.htaccess` file for routing and creating more attractive URLs. Ensure that the `.htaccess` file is placed in the root directory of the site, where it will define URL rewriting rules.


## Pages and Router

The website consists of 7 pages (in /app/views), each designed to provide detailed information and a seamless user experience:

| Page Name     | File (/app/views) | Description |
|---|-----|-----------------------|
| Home | `home.php` | The main landing page of the website. |
| Skills | `skills.php` | A page showcasing my skills and expertise. |
| Favorites | `favorites.php` | A page with links to frequently visited sites. |
| Projects | `projects.php` | A portfolio of my projects with descriptions.|
| Education | `educations.php` | Details about my educational background. |
| Contacts | `contact.php` | A contact page with a form integrated with Telegram API. |
| 404 | `404.php` | A custom error page for non-existent routes. |

In the root directory, there is a file named `urls.php`, which contains all the routes and their corresponding names. This file serves as the central routing hub for the website, ensuring clear and organized navigation between pages. 

All routes are handled using a custom `Router` class (*/app/includes.router.php*), which was specifically developed for this project to manage and simplify routing logic.
```php
Router::path('', new HomeController(), 'home');
Router::path('/favorites', new FavoriteController(), 'favorites');
Router::path('/projects', new ProjectsController(), 'projects');
...
```

## Config

The project includes a `config-default.php` template file, which should be copied and renamed to `config.php` before use. 

This configuration file contains all the essential settings for the website, such as the timezone, Telegram bot token, home url, and other critical parameters needed for proper functionality. 

By customizing this file, users can adapt the project to their specific requirements and environment.

```php
<?php
// Server timezone for correct time
define('SERVER_TIMEZONE', 'Europe/Belgrade');

// Telegram bot token for sending messages
define('TELEGRAM_BOT_TOKEN', '<BOT_TOKEN>');

// Home url (without / on the end)
define('HOME_URL', 'http://localhost:8000');

// Link on homepage to your CV
define('CV_URL', 'http://google.com');

// Chat ID for Telegram Bot
define('TELEGRAM_BOT_CHATID', '<CHAT_ID_BOT>');
?>
```

## Data Storage

Since the website does not use a database, all the data is stored in the `/app/models/data/` folder in PHP files. Each file contains specific information that is used to populate the relevant sections of the site.

Here are the data files and their purpose:

| File | Url | Description |
|------|-----|-------------|
| `education_data.php` | */education* | Contains information about the school and education. |
| `projects_data.php` | */projects* | Contains data about projects and portfolio. |
| `skills_data.php` | */skills* | Stores information about the user's skills and abilities. |
| `websites_data.php` | */favorites* | Lists frequently visited websites. |

## Telegram Bot

The project integrates a Telegram bot for **contacts** page. To enable the bot, you'll need to specify your bot's token and chat ID in the `config.php` file.

1. **Get your Telegram Bot Token**:  

To create your own bot, follow these steps:
   - Open Telegram and search for the BotFather.
   - Start a conversation and use the `/newbot` command to create a new bot.
   - BotFather will give you a **Bot Token** after you follow the instructions.

2. **Get your Chat ID**:  

To send messages to your Telegram account, you need to know your **chat ID**. You can find it by interacting with your bot and sending a request to the Telegram API, or you can use a service like `https://api.telegram.org/bot<your-bot-token>/getUpdates` to see messages and extract your chat ID.

3. **Set the Token and Chat ID in config.php**:  

In the `config.php` file, add the following lines with your bot's token and chat ID:

```php
define('TELEGRAM_BOT_TOKEN', '<BOT_TOKEN>');
define('TELEGRAM_BOT_CHATID', '<CHAT_ID_BOT>');
```