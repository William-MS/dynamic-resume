<?php

use app\controllers\site\HomeController;
use app\library\routes\Route;

Route::get('/', [HomeController::class, 'index']);