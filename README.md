# Live Test 7

## Task 1: 

Write a Laravel route to handle a GET request for '/about' URL. The route should call the 'AboutController' and the 'index' method.

Route: 
```php
    Route::get("/about", [AboutController::class,"index"]);
```

Url: http://127.0.0.1:8000/about

## Task 2: .

Create a function called 'login' inside the 'UserController' class that takes two parameters: 'email' and 'password'. This function should return a message saying 'Login successful' if the email and password match, and 'Invalid credentials' if they didn't match.


Route: 
```php
    Route::get("/login/{email}/{password}", [UserController::class,"login"]);
```

Login Method: 
```php
    public function login($email, $password): string{
        if ($email === 'masum@billah.com' && $password === '12345678') {
            return 'Login successful';
        }else{
            return 'Invalid credentials';
        }
    }
```

Login Info:
Email: masum@billah.com
Password: 12345678

URL To Browse: 
http://127.0.0.1:8000/login/{email}/{password}

Replace {email} with email
Replace {password} with password