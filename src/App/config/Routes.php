<?php


declare(strict_types=1);


namespace App\Config;

use Framework\App;
use App\Controllers\HomeController;

use App\Controllers\AuthController;
use App\Controllers\LoginController;

function registerRoutes(App $app)
{

    $app->get('/', [HomeController::class, 'home']);
    $app->get('/login', [LoginController::class, 'index']);
    $app->get('/register', [AuthController::class, 'index']);
    $app->post('/register', [AuthController::class, 'register']);
}
