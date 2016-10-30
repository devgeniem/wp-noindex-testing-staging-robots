# wp-noindex-testing-staging-robots

Deny site from `/robots.txt` if it's accessed with `WP_ENV=staging` or `WP_ENV=testing`.

Also deny if this site is accessed with domain that ends like `WP_HIDE_ROBOTS_DOMAINS`.

## Example config
```php
// hides site from robots if its accessed from any geniem.io or example.com subdomain.
define('WP_HIDE_ROBOTS_DOMAINS','geniem.io,example.com');
```
