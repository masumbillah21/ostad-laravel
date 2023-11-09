# Assignment 7

Assignment - Laravel Structure and Artisan Commands

## Objective:

In this assignment, you will create a basic Laravel application and use artisan commands to generate controllers and routes

## Task:

1. Create a new Laravel application using the command line. Use the necessary Laravel installer command to create the project.

Composer command: ```composer create-project laravel/laravel ostad-laravel```

Laravel Installer: ``` laravel new ostad-laravel```

NOTE: here "ostad-laravel" will be the project name.

2. Once the project is created, use the artisan command to generate a new controller called 'UserController'.

Command: ``` php artisan make:controller UserController ```

3. Next, create a route in the web.php file that maps to a function in the UserController. The function should return a simple message like 'Hello, Laravel!'.

* In UserController.php file (App\Http\Controllers\UserController.php)
    ```php 
    public function index(){
        return "Hello, Laravel!";
    } 
    ```
* In web.php file (routes\web.php)
    ```php 
    Route::get('/', [UserController::class,'index']); 
    ```

Finally, start the Laravel development server and test the route using a web browser.

Command: ``` php artisan serve ```

It will run a server called "[http://127.0.0.1:8000]" to browse laravel project

## Criteria:
1. The Laravel project should be created successfully using the correct artisan command.
2. The UserController should be generated using the appropriate artisan command.
3. The route in the web.php file should be configured correctly and mapped to the UserController function.
4. The UserController function should return the expected message.
5. The route should be accessible and displaying the expected message when tested in a web browser.

