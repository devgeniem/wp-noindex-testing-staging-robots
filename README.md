![geniem-github-banner](https://cloud.githubusercontent.com/assets/5691777/14319886/9ae46166-fc1b-11e5-9630-d60aa3dc4f9e.png)
# WP MU-Plugin: Hide Development/Testing enviroments from robots
[![Latest Stable Version](https://poser.pugx.org/devgeniem/wp-noindex-testing-staging-robots/v/stable)](https://packagist.org/packages/devgeniem/wp-noindex-testing-staging-robots) [![Total Downloads](https://poser.pugx.org/devgeniem/wp-noindex-testing-staging-robots/downloads)](https://packagist.org/packages/devgeniem/wp-noindex-testing-staging-robots) [![Latest Unstable Version](https://poser.pugx.org/devgeniem/wp-noindex-testing-staging-robots/v/unstable)](https://packagist.org/packages/devgeniem/wp-noindex-testing-staging-robots) [![License](https://poser.pugx.org/devgeniem/wp-noindex-testing-staging-robots/license)](https://packagist.org/packages/devgeniem/wp-noindex-testing-staging-robots)

Deny site from `/robots.txt` if it's accessed with `WP_ENV=staging` or `WP_ENV=testing`.

Also denys it if the site is accessed with domain that ends with domain mentioned in `WP_HIDE_ROBOTS_DOMAINS`.

## Installation
```
$ composer require devgeniem/wp-noindex-testing-staging-robots
```

## Example config
```php
// hides site from robots if its accessed from any geniem.io or example.com subdomain.
define('WP_HIDE_ROBOTS_DOMAINS','geniem.io,example.com');
```

## Maintainer
[Onni Hakala](https://github.com/onnimonni)
[Liblastic](https://github.com/Liblastic)

## License
MIT
