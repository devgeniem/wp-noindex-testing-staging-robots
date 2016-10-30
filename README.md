![geniem-github-banner](https://cloud.githubusercontent.com/assets/5691777/14319886/9ae46166-fc1b-11e5-9630-d60aa3dc4f9e.png)
# WP MU-Plugin: Hide Development/Testing enviroments from robots

Deny site from `/robots.txt` if it's accessed with `WP_ENV=staging` or `WP_ENV=testing`.

Also deny if this site is accessed with domain that ends like `WP_HIDE_ROBOTS_DOMAINS`.

## Example config
```php
// hides site from robots if its accessed from any geniem.io or example.com subdomain.
define('WP_HIDE_ROBOTS_DOMAINS','geniem.io,example.com');
```
