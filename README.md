# Live Test 09

## Task 1:
Write a single action controller in PHP that prints 'Hello, World!' when accessed.

Route to access:
``` php
class SingleActionController extends Controller
{
    public function __invoke(Request $request)
    {
        return 'Hello, World!';
    }
}
```

## Task-2:

Create a route group  and apply a middleware function 'isAdmin' to all routes within that group.
Create a route group  and apply a middleware function isUser to all routes within that group.

```php
Route::middleware(['isAdmin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
    Route::get('/admin/user-list', [AdminController::class, 'userList']);
    Route::get('/admin/user-role', [AdminController::class, 'userRole']);
    Route::get('/admin/profile', [AdminController::class, 'profile']);
});

Route::middleware(['isUser'])->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'dashboard']);
    Route::get('/user/tasks', [UserController::class, 'tasks']);
    Route::get('/user/profile', [UserController::class, 'profile']);
});

```
