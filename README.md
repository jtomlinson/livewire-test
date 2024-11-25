# Setup Instructions
- Clone repo
- `composer install`
- `npm install`
- `php artisan migrate:fresh --seed`
- Open in a browser `/routes`

After visiting `/routes` if you click on a route multiple times
before the page finishes loading or click on two different routes before page finishes loading,
you will see `Uncaught (in promise) Component not found:` in the dev-tools console.
