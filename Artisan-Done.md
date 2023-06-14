php artisan make:model Role -m
php artisan make:migration create_role_user_table
php artisan make:model Travel -m // Travel is irregular, so we need to add 's' by hand
php artisan make:observer TravelObserver --model=Travel  // Remember to register into EventServiceProvider
composer require laravel/sail --dev
php artisan sail:install
sail up -d
sail artisan migrate
php artisan make:model Tour -m
