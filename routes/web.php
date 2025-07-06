<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsletterController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/services', [MainController::class, 'services'])->name('services');
Route::get('/services/{service}', [MainController::class, 'service'])->name('service');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::post('/contact', [MainController::class, 'sendContactForm']);
Route::get('/blog', [MainController::class, 'blog'])->name('blog');
Route::get('/blog/archive/{year}/{month?}', [MainController::class, 'archive'])->name('blog.archive');
Route::get('/blog/{slug}', [MainController::class, 'post'])->name('post');
Route::get('/blog.rss', [MainController::class, 'rss'])->name('blog.rss');
Route::get('/sitemap.xml', [MainController::class, 'sitemap'])->name('sitemap');
Route::get('/portfolio', [MainController::class, 'portfolio'])->name('portfolio');
Route::get('/portfolio/{slug}', [MainController::class, 'project'])->name('project');

// Newsletter routes
Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');
Route::get('/newsletter/unsubscribe/{token}', [NewsletterController::class, 'unsubscribe'])->name('newsletter.unsubscribe');

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
