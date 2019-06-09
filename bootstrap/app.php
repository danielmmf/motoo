<?php

require_once __DIR__.'/../vendor/autoload.php';
$envFile = defined('RUNNING_TESTS') ? '.env.testing' : '.env.';

/*$app = new Laravel\Lumen\Application(
    realpath(__DIR__.'/../')
);
@$actual_link = $_SERVER['PATH_INFO']?$_SERVER['PATH_INFO']:$_SERVER['REQUEST_URI'];
try {
    $nome_app = explode('/', $actual_link);
    $envFile .=$nome_app[1];
    (new Dotenv\Dotenv(__DIR__.'/../',$envFile))->load();
} catch (Dotenv\Exception\InvalidPathException $e) {
    echo $e->getMessage();
}*/

try {
    (new Dotenv\Dotenv(__DIR__ . '/../', $envFile))->load();
} catch (Dotenv\Exception\InvalidPathException $e) {
}
$app = new Laravel\Lumen\Application(
    realpath(__DIR__.'/../')
);
$app->withFacades();
$app->withEloquent();

/*
|--------------------------------------------------------------------------
| Register Container Bindings
|--------------------------------------------------------------------------
|
| Now we will register a few bindings in the service container. We will
| register the exception handler and the console kernel. You may add
| your own bindings here if you like or you can make another file.
|
*/

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

/*
|--------------------------------------------------------------------------
| Register Middleware
|--------------------------------------------------------------------------
|
| Next, we will register the middleware with the application. These can
| be global middleware that run before and after each request into a
| route or middleware that'll be assigned to some specific routes.
|
*/

// $app->middleware([
//    App\Http\Middleware\ExampleMiddleware::class
// ]);

// $app->routeMiddleware([
//     'auth' => App\Http\Middleware\Authenticate::class,
// ]);

/*
|--------------------------------------------------------------------------
| Register Service Providers
|--------------------------------------------------------------------------
|
| Here we will register all of the application's service providers which
| are used to bind services into the container. Service providers are
| totally optional, so you are not required to uncomment this line.
|
*/

// $app->register(App\Providers\AppServiceProvider::class);
// $app->register(App\Providers\AuthServiceProvider::class);
// $app->register(App\Providers\EventServiceProvider::class);
$app->register('Wn\Generators\CommandsServiceProvider');
/*
|--------------------------------------------------------------------------
| Load The Application Routes
|--------------------------------------------------------------------------
|
| Next we will include the routes file so that they can all be added to
| the application. This will provide all of the URLs the application
| can respond to, as well as the controllers that may handle them.
|
*/

$app->router->group([
    'namespace' => 'App\Http\Controllers',
], function ($router) {
    require __DIR__.'/../routes/web.php';
});

return $app;
