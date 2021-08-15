<?php

use App\Http\Controllers\InstagramController;
use App\Http\Controllers\WebsiteController;
use App\Http\Middleware\Localization;
use App\Models\Page;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

Route::get('locale/{locale}', [Localization::class, 'locale'])->whereAlpha('locale')->where('locale','[A-Za-z0-9]{2}')->name('locale');

if (Schema::hasTable('pages')){

    $pages = Page::select(['slug','key'])->active()->get() ?? collect();

    $page = function($key) use ($pages) {
        return $pages->where('key', $key)->first()->slug;
    };

    Route::get('/', [WebsiteController::class, 'homepage'])->name('homepage');

    Route::get( $page('services'), [WebsiteController::class, 'services'])->name('services');
    Route::get($page('services').'/{service:slug}', [WebsiteController::class, 'serviceDetail'])->name('service');

    Route::get( $page('solutions'), [WebsiteController::class, 'solutions'])->name('solutions');
    Route::get($page('solutions').'/{solution:slug}', [WebsiteController::class, 'solutionDetail'])->name('solution');

    Route::get($page('blog').'/{category:slug?}', [WebsiteController::class, 'blog'])->name('blog');
    Route::get($page('blog').'/post/{post:slug}', [WebsiteController::class, 'post'])->name('post');

    Route::get( $page('about'), [WebsiteController::class, 'about'])->name('about');
    Route::get( $page('contact'), [WebsiteController::class, 'contact'])->name('contact');

    Route::get( $page('products'), [WebsiteController::class, 'products'])->name('products');
    Route::get($page('products').'/{product:serial}', [WebsiteController::class, 'productDetail'])->name('product');

    Route::post('contact-form', [WebsiteController::class, 'contactForm'])->name('contact.form');

    Route::group(['prefix' => 'admin'], function () {
        Voyager::routes();
        Route::post('/instagram-update', [InstagramController::class, 'update'])->middleware('admin.user')->name('instagram.update');
        Route::get('/instagram-auth-response', [InstagramController::class, 'complete'])->middleware('admin.user');
    });

    Route::get('sitemap.xml', [WebsiteController::class, 'sitemap']);
    Route::get('robots.txt', [WebsiteController::class, 'robots']);

    Route::get('/{page:slug}', [WebsiteController::class, 'page'])->name('page');

}



