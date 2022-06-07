<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes([
    'register' => false,
    'verify' => true
]);
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::group(['as' => 'admin.', 'middleware' => ['auth', 'verified']], function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home');
    Route::post('/', [App\Http\Controllers\Admin\HomeController::class, 'store'])->name('home.save');

    Route::group(['prefix' => 'layout', 'as' => 'layout.'], function () {
        //Home
        Route::get('/home', [App\Http\Controllers\Admin\LayoutHomeController::class, 'index'])->name('home');
        Route::post('/home', [App\Http\Controllers\Admin\LayoutHomeController::class, 'store'])->name('home.save');

        //About Us
        Route::get('/about-us', [App\Http\Controllers\Admin\LayoutAboutUsController::class, 'index'])->name('about-us');
        Route::post('/about-us', [App\Http\Controllers\Admin\LayoutAboutUsController::class, 'store'])->name('about-us.save');

        //Home
        Route::get('/home-content', [App\Http\Controllers\Admin\CmsHomeContentController::class, 'index'])->name('home-content');
        Route::post('/home-content', [App\Http\Controllers\Admin\CmsHomeContentController::class, 'store'])->name('home-content.save');

        Route::get('/home-keyproduct-specialty', [App\Http\Controllers\Admin\CmsHomeKeyProductSpecialtiesController::class, 'index'])->name('home-keyproduct-specialty');
        Route::post('/home-keyproduct-specialty', [App\Http\Controllers\Admin\CmsHomeKeyProductSpecialtiesController::class, 'store'])->name('home-keyproduct-specialty.add');
        Route::get('/home-keyproduct-specialty/{id}', [App\Http\Controllers\Admin\CmsHomeKeyProductSpecialtiesController::class, 'get'])->name('home-keyproduct-specialty.get');
        Route::post('/home-keyproduct-specialty/edit', [App\Http\Controllers\Admin\CmsHomeKeyProductSpecialtiesController::class, 'update'])->name('home-keyproduct-specialty.edit');
        Route::delete('/home-keyproduct-specialty/{id}', [App\Http\Controllers\Admin\CmsHomeKeyProductSpecialtiesController::class, 'destroy'])->name('home-keyproduct-specialty.delete');
        
        Route::get('/home-product', [App\Http\Controllers\Admin\CmsHomeProductController::class, 'index'])->name('home-product');
        Route::post('/home-product', [App\Http\Controllers\Admin\CmsHomeProductController::class, 'store'])->name('home-product.add');
        Route::get('/home-product/{id}', [App\Http\Controllers\Admin\CmsHomeProductController::class, 'get'])->name('home-product.get');
        Route::post('/home-product/edit', [App\Http\Controllers\Admin\CmsHomeProductController::class, 'update'])->name('home-product.edit');
        Route::delete('/home-product/{id}', [App\Http\Controllers\Admin\CmsHomeProductController::class, 'destroy'])->name('home-product.delete');
        
        Route::get('/home-product-specialty', [App\Http\Controllers\Admin\CmsHomeProductSpecialtiesController::class, 'index'])->name('home-product-specialty');
        Route::post('/home-product-specialty', [App\Http\Controllers\Admin\CmsHomeProductSpecialtiesController::class, 'store'])->name('home-product-specialty.add');
        Route::get('/home-product-specialty/{id}', [App\Http\Controllers\Admin\CmsHomeProductSpecialtiesController::class, 'get'])->name('home-product-specialty.get');
        Route::post('/home-product-specialty/edit', [App\Http\Controllers\Admin\CmsHomeProductSpecialtiesController::class, 'update'])->name('home-product-specialty.edit');
        Route::delete('/home-product-specialty/{id}', [App\Http\Controllers\Admin\CmsHomeProductSpecialtiesController::class, 'destroy'])->name('home-product-specialty.delete');

        //About
        Route::get('/about-content', [App\Http\Controllers\Admin\CmsAboutContentController::class, 'index'])->name('about-content');
        Route::post('/about-content', [App\Http\Controllers\Admin\CmsAboutContentController::class, 'store'])->name('about-content.save');

        Route::get('/about-skill', [App\Http\Controllers\Admin\CmsAboutSkillController::class, 'index'])->name('about-skill');
        Route::post('/about-skill', [App\Http\Controllers\Admin\CmsAboutSkillController::class, 'store'])->name('about-skill.add');
        Route::get('/about-skill/{id}', [App\Http\Controllers\Admin\CmsAboutSkillController::class, 'get'])->name('about-skill.get');
        Route::post('/about-skill/edit', [App\Http\Controllers\Admin\CmsAboutSkillController::class, 'update'])->name('about-skill.edit');
        Route::delete('/about-skill/{id}', [App\Http\Controllers\Admin\CmsAboutSkillController::class, 'destroy'])->name('about-skill.delete');
        
        Route::get('/about-specialty', [App\Http\Controllers\Admin\CmsAboutSpecialtyController::class, 'index'])->name('about-specialty');
        Route::post('/about-specialty', [App\Http\Controllers\Admin\CmsAboutSpecialtyController::class, 'store'])->name('about-specialty.add');
        Route::get('/about-specialty/{id}', [App\Http\Controllers\Admin\CmsAboutSpecialtyController::class, 'get'])->name('about-specialty.get');
        Route::post('/about-specialty/edit', [App\Http\Controllers\Admin\CmsAboutSpecialtyController::class, 'update'])->name('about-specialty.edit');
        Route::delete('/about-specialty/{id}', [App\Http\Controllers\Admin\CmsAboutSpecialtyController::class, 'destroy'])->name('about-specialty.delete');

        //Management
        Route::get('/manage-content', [App\Http\Controllers\Admin\CmsManageContentController::class, 'index'])->name('manage-content');
        Route::post('/manage-content', [App\Http\Controllers\Admin\CmsManageContentController::class, 'store'])->name('manage-content.save');
        
        Route::get('/manage-member', [App\Http\Controllers\Admin\CmsManageMemberController::class, 'index'])->name('manage-member');
        Route::post('/manage-member', [App\Http\Controllers\Admin\CmsManageMemberController::class, 'store'])->name('manage-member.add');
        Route::get('/manage-member/{id}', [App\Http\Controllers\Admin\CmsManageMemberController::class, 'get'])->name('manage-member.get');
        Route::post('/manage-member/edit', [App\Http\Controllers\Admin\CmsManageMemberController::class, 'update'])->name('manage-member.edit');
        Route::delete('/manage-member/{id}', [App\Http\Controllers\Admin\CmsManageMemberController::class, 'destroy'])->name('manage-member.delete');
        
        //product
        Route::get('/product-content', [App\Http\Controllers\Admin\CmsProductContentController::class, 'index'])->name('product-content');
        Route::post('/product-content', [App\Http\Controllers\Admin\CmsProductContentController::class, 'store'])->name('product-content.save');
        
        Route::get('/product-product', [App\Http\Controllers\Admin\CmsProductProductController::class, 'index'])->name('product-product');
        Route::post('/product-product', [App\Http\Controllers\Admin\CmsProductProductController::class, 'store'])->name('product-product.add');
        Route::get('/product-product/{id}', [App\Http\Controllers\Admin\CmsProductProductController::class, 'get'])->name('product-product.get');
        Route::post('/product-product/edit', [App\Http\Controllers\Admin\CmsProductProductController::class, 'update'])->name('product-product.edit');
        Route::delete('/product-product/{id}', [App\Http\Controllers\Admin\CmsProductProductController::class, 'destroy'])->name('product-product.delete');

        //Review
        Route::get('/review-content', [App\Http\Controllers\Admin\CmsReviewContentController::class, 'index'])->name('review-content');
        Route::post('/review-content', [App\Http\Controllers\Admin\CmsReviewContentController::class, 'store'])->name('review-content.save');

        Route::get('/review-review', [App\Http\Controllers\Admin\CmsReviewReviewController::class, 'index'])->name('review-review');
        Route::post('/review-review', [App\Http\Controllers\Admin\CmsReviewReviewController::class, 'store'])->name('review-review.add');
        Route::get('/review-review/{id}', [App\Http\Controllers\Admin\CmsReviewReviewController::class, 'get'])->name('review-review.get');
        Route::post('/review-review/edit', [App\Http\Controllers\Admin\CmsReviewReviewController::class, 'update'])->name('review-review.edit');
        Route::delete('/review-review/{id}', [App\Http\Controllers\Admin\CmsReviewReviewController::class, 'destroy'])->name('review-review.delete');
        
        Route::get('/review-customer', [App\Http\Controllers\Admin\CmsReviewCustomerController::class, 'index'])->name('review-customer');
        Route::post('/review-customer', [App\Http\Controllers\Admin\CmsReviewCustomerController::class, 'store'])->name('review-customer.add');
        Route::get('/review-customer/{id}', [App\Http\Controllers\Admin\CmsReviewCustomerController::class, 'get'])->name('review-customer.get');
        Route::post('/review-customer/edit', [App\Http\Controllers\Admin\CmsReviewCustomerController::class, 'update'])->name('review-customer.edit');
        Route::delete('/review-customer/{id}', [App\Http\Controllers\Admin\CmsReviewCustomerController::class, 'destroy'])->name('review-customer.delete');

        //Article
        Route::get('/article-content', [App\Http\Controllers\Admin\CmsArticleContentController::class, 'index'])->name('article-content');
        Route::post('/article-content', [App\Http\Controllers\Admin\CmsArticleContentController::class, 'store'])->name('article-content.save');
        
        //Contact
        Route::get('/contact-content', [App\Http\Controllers\Admin\CmsContactContentController::class, 'index'])->name('contact-content');
        Route::post('/contact-content', [App\Http\Controllers\Admin\CmsContactContentController::class, 'store'])->name('contact-content.save');
        
        //Footer
        Route::get('/footer-content', [App\Http\Controllers\Admin\CmsFooterContentController::class, 'index'])->name('footer-content');
        Route::post('/footer-content', [App\Http\Controllers\Admin\CmsFooterContentController::class, 'store'])->name('footer-content.save');

        //Works
        Route::get('/work', [App\Http\Controllers\Admin\LayoutWorkController::class, 'index'])->name('work');
        Route::post('/work', [App\Http\Controllers\Admin\LayoutWorkController::class, 'store'])->name('work.save');

        Route::get('/work-category', [App\Http\Controllers\Admin\WorkCategoryController::class, 'index'])->name('work-category');
        Route::post('/work-category', [App\Http\Controllers\Admin\WorkCategoryController::class, 'store'])->name('work-category.add');
        Route::get('/work-category/{id}', [App\Http\Controllers\Admin\WorkCategoryController::class, 'get'])->name('work-category.get');
        Route::post('/work-category/edit', [App\Http\Controllers\Admin\WorkCategoryController::class, 'update'])->name('work-category.edit');
        Route::delete('/work-category/{id}', [App\Http\Controllers\Admin\WorkCategoryController::class, 'destroy'])->name('work-category.delete');

        Route::get('/work-list', [App\Http\Controllers\Admin\WorkController::class, 'index'])->name('work-list');
        Route::post('/work-list', [App\Http\Controllers\Admin\WorkController::class, 'store'])->name('work-list.add');
        Route::get('/work-list/{id}', [App\Http\Controllers\Admin\WorkController::class, 'get'])->name('work-list.get');
        Route::post('/work-list/edit', [App\Http\Controllers\Admin\WorkController::class, 'update'])->name('work-list.edit');
        Route::delete('/work-list/{id}', [App\Http\Controllers\Admin\WorkController::class, 'destroy'])->name('work-list.delete');

        //Services
        Route::get('/service', [App\Http\Controllers\Admin\LayoutServiceController::class, 'index'])->name('service');
        Route::post('/service', [App\Http\Controllers\Admin\LayoutServiceController::class, 'store'])->name('service.save');

        Route::get('/service-list', [App\Http\Controllers\Admin\ServiceController::class, 'index'])->name('service-list');
        Route::post('/service-list', [App\Http\Controllers\Admin\ServiceController::class, 'store'])->name('service-list.add');
        Route::get('/service-list/{id}', [App\Http\Controllers\Admin\ServiceController::class, 'get'])->name('service-list.get');
        Route::post('/service-list/edit', [App\Http\Controllers\Admin\ServiceController::class, 'update'])->name('service-list.edit');
        Route::delete('/service-list/{id}', [App\Http\Controllers\Admin\ServiceController::class, 'destroy'])->name('service-list.delete');

        //Clients
        Route::get('/client', [App\Http\Controllers\Admin\LayoutClientController::class, 'index'])->name('client');
        Route::post('/client', [App\Http\Controllers\Admin\LayoutClientController::class, 'store'])->name('client.save');

        Route::get('/client-list', [App\Http\Controllers\Admin\ClientController::class, 'index'])->name('client-list');
        Route::post('/client-list', [App\Http\Controllers\Admin\ClientController::class, 'store'])->name('client-list.add');
        Route::get('/client-list/{id}', [App\Http\Controllers\Admin\ClientController::class, 'get'])->name('client-list.get');
        Route::post('/client-list/edit', [App\Http\Controllers\Admin\ClientController::class, 'update'])->name('client-list.edit');
        Route::delete('/client-list/{id}', [App\Http\Controllers\Admin\ClientController::class, 'destroy'])->name('client-list.delete');

        //Reviews
        Route::get('/review', [App\Http\Controllers\Admin\LayoutReviewController::class, 'index'])->name('review');
        Route::post('/review', [App\Http\Controllers\Admin\LayoutReviewController::class, 'store'])->name('review.save');

        Route::get('/review-list', [App\Http\Controllers\Admin\ReviewController::class, 'index'])->name('review-list');
        Route::post('/review-list', [App\Http\Controllers\Admin\ReviewController::class, 'store'])->name('review-list.add');
        Route::get('/review-list/{id}', [App\Http\Controllers\Admin\ReviewController::class, 'get'])->name('review-list.get');
        Route::post('/review-list/edit', [App\Http\Controllers\Admin\ReviewController::class, 'update'])->name('review-list.edit');
        Route::delete('/review-list/{id}', [App\Http\Controllers\Admin\ReviewController::class, 'destroy'])->name('review-list.delete');

        //Home
        Route::get('/contact', [App\Http\Controllers\Admin\LayoutContactsController::class, 'index'])->name('contact');
        Route::post('/contact', [App\Http\Controllers\Admin\LayoutContactsController::class, 'store'])->name('contact.save');
    });
});

