# wp-limit-email-notifications

![PHP](https://img.shields.io/badge/PHP-8.0+-777BB4?logo=php)
![WordPress](https://img.shields.io/badge/WordPress-MU--Plugin-21759B?logo=wordpress)
![WP Coding Standards](https://github.com/wvnderlab-agency/wp-limit-email-notifications/actions/workflows/wp-coding-standards.yml/badge.svg)](https://github.com/wvnderlab-agency/wp-limit-email-notifications/actions/workflows/wp-coding-standards.yml)

- [Installation](#installation)
- [Usage](#usage)
- [Development](#development)

## Installation

### Via Composer

```shell
composer require wvnderlab-agency/wp-limit-email-notifications
```

### Via FTP

1. Download the repository zip file.
2. Unzip the file.
3. Upload the unzipped folder to the `/wp-content/muplugins` or `/wp-content/plugins/` directory on your server.
4. Navigate to the 'Plugins' section in your WordPress admin dashboard.
5. Find 'Limit Email Notifications' in the list and click 'Activate'.

### Via WordPress Admin Dashboard

1. Download the repository zip file.
2. Navigate to the 'Plugins' section in your WordPress admin dashboard.
3. Click 'Add New' and then 'Upload Plugin'.
4. Choose the downloaded zip file and click 'Install Now'.
5. After installation, click 'Activate Plugin'.

## Usage

### Filter Hooks

#### wvnderlab/limit-email-notifications/enabled *(Default: true)*

This filter allows you to disable the plugin functionality.

```php
// disable the plugin functionality
add_filter( 'wvnderlab/limit-email-notifications/enabled', '__return_false' );
```

## Development

### Install Dependencies

```shell
composer install
```

### Analyse Code-Quality with WP-Coding-Standards

```shell
composer analyse
```

### Refactor Code along WP-Coding-Standards

```shell
composer refactor
```