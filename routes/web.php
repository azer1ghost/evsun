<?php

use App\Http\Controllers\WebsiteController;
use App\Models\Page;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

if (Schema::hasTable('pages')){

    $pages = Page::select(['slug','key'])->active()->get() ?? collect();

    $page = function($key) use ($pages) {
        return $pages->where('key', $key)->first()->slug;
    };

    Route::get('/', [WebsiteController::class, 'homepage'])->name('homepage');

    Route::get( $page('services'), [WebsiteController::class, 'services'])->name('services');
    Route::get($page('services').'/{service:slug}', [WebsiteController::class, 'serviceDetail'])->name('service');

    Route::get( $page('trainings'), [WebsiteController::class, 'trainings'])->name('trainings');
    Route::get($page('trainings').'/{training:slug}', [WebsiteController::class, 'trainingDetail'])->name('training');

    Route::get($page('blog').'/{category?}', [WebsiteController::class, 'blog'])->name('blog');
    Route::get($page('blog').'/post/{post:slug}', [WebsiteController::class, 'post'])->name('post');

    Route::get( $page('contact'), [WebsiteController::class, 'contact'])->name('contact');

    Route::post('contact-form', [WebsiteController::class, 'contactForm'])->name('contact.form');

    Route::group(['prefix' => 'admin'], function () {
        Voyager::routes();
    });

    Route::get('sitemap.xml', [WebsiteController::class, 'sitemap']);
    Route::get('robots.txt', [WebsiteController::class, 'robots']);

    Route::get('/{page:slug}', [WebsiteController::class, 'page'])->name('page');

}



