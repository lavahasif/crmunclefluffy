
### Mobile
| 1                                                                           | 2                                                                           |
| --------------------------------------------------------------------------- | --------------------------------------------------------------------------- |
| <img src="public/images/IMG-20230302-WA0151.jpg" width="150" height="300"/> | <img src="public/images/IMG-20230302-WA0150.jpg" width="150" height="300"/> |
| <img src="public/images/IMG-20230302-WA0152.jpg" width="150" height="300"/> | <img src="public/images/IMG-20230302-WA0153.jpg" width="150" height="300"/> |

### checkonLive

https://amp.webhoster.tech/
<br/>



@ larvel Authentication ,
Authentication based on ppt

##Core

```php

Route::get('/', [Login::class, 'Index']);
Route::get('/Login', [Login::class, 'login'])->name('login');

Route::group(['prefix' => 'admin'], function () {
    // Routes that require authentication
    Route::group(['middleware' => 'admin'], function () {
        // Only authenticated users may enter...
        Route::get('/dashboard', [AdminController::class, 'Index']);
        Route::get('/newlead', [NewLeadController::class, 'Index'])->name('newlead');
        Route::get('/newlead/add', [NewLeadController::class, 'add'])->name('leadadd');
    });
});

```

### Create Table
php artisan migrate
### Create Seed datatable

php artisan make:seeder UsersTableSeeder

### Execute Datatable
php artisan db:seed
php artisan db:seed --class=UsersTableSeeder

### create model class
php artisan make:model source
### create create migration class
php artisan make:migration create_status_table --create=status

