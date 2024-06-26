<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AppearancesController;
use App\Http\Controllers\AwardsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SendMailController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('index-page');

Route::get('/about', AboutController::class)->name('about-page');

Route::get('/contact', ContactController::class)->name('contact-page');

Route::get('/appearances', AppearancesController::class)->name('appearances-page');

Route::get('/short-videos', VideoController::class)->name('videos-page');

Route::get('/awards-grants', AwardsController::class)->name('awards-page');

Route::get('/stories', StoryController::class)->name('stories-page');

Route::post('/contact-mail', [SendMailController::class, 'contact_mail'])->name('contact.mail');
