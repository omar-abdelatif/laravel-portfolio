<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\frontend\MasterController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\TestmonialsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [MasterController::class, 'index']);
Route::get('*', [MasterController::class, 'errorPage']);
Route::get('/blogs', [MasterController::class, 'blogPage']);
Route::get('/about', [MasterController::class, 'aboutPage']);
Route::get('/contact', [MasterController::class, 'contactPage']);
Route::get('/projects', [MasterController::class, 'projectPage']);
Route::get('/services', [MasterController::class, 'servicesPage']);
Route::get('/details/{name}', [MasterController::class, 'projectDetails']);
Route::get('/send-email', [MasterController::class, 'sendEmail']);

Auth::routes(['verify' => true]);

Route::group(['prefix' => 'admin'], function () {
    Route::view('login', 'auth.login');
    Route::middleware(['auth', 'verified'])->group(function () {
        Route::view('about', 'about')->name('about');
        Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
        Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
        Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
        //! Dashboard Routes
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        //! Projects Routes
        Route::get('all_projects', [ProjectController::class, 'index'])->name('projects.index');
        Route::post('store', [ProjectController::class, 'store'])->name('projects.store');
        Route::get('delete_project/{id}', [ProjectController::class, 'destroy'])->name('projects.destroy');
        Route::post('update_project', [ProjectController::class, 'update'])->name('projects.update');
        //! Category Routes
        Route::get('all_categories', [CategoryController::class, 'index'])->name('categories.index');
        Route::post('store_category', [CategoryController::class, 'store'])->name('categories.store');
        Route::post('update_category', [CategoryController::class, 'update'])->name('categories.update');
        Route::get('delete_category/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
        //! Tags Routes
        Route::get('all_tags', [TagsController::class, 'index'])->name('tags.index');
        Route::post('store_tags', [TagsController::class, 'store'])->name('tags.store');
        Route::get('delete_tags/{id}', [TagsController::class, 'destroy'])->name('tags.destroy');
        Route::post('update_tags', [TagsController::class, 'update'])->name('tags.update');
        //! Testmonials Routes
        Route::get('all_testmonials', [TestmonialsController::class, 'index'])->name('testmonials.index');
        Route::post('testmonials_store', [TestmonialsController::class, 'store'])->name('testmonials.store');
        Route::get('testmonials_delete/{id}', [TestmonialsController::class, 'destroy'])->name('testmonials.destroy');
        Route::post('testmonials_update', [TestmonialsController::class, 'update'])->name('testmonials.update');
        //! Blogs Routes
        Route::get('all_blogs', [BlogController::class, 'index'])->name('blogs.index');
        Route::post('store_blogs', [BlogController::class, 'store'])->name('blogs.store');
        Route::get('delete_blogs/{id}', [BlogController::class, 'destroy'])->name('blogs.destroy');
        Route::post('update_blogs', [BlogController::class, 'update'])->name('blogs.update');
        //! Skills Routes
        Route::get('all_skills', [SkillsController::class, 'index'])->name('skills.index');
        Route::post('store_skill', [SkillsController::class, 'store'])->name('skills.store');
        Route::get('delete_skill/{id}', [SkillsController::class, 'destroy'])->name('skills.destroy');
        Route::post('update_skills', [SkillsController::class, 'update'])->name('skills.update');
        //! Services Routes
        Route::get('all_services', [ServiceController::class, 'index'])->name('services.index');
        Route::post('store_services', [ServiceController::class, 'store'])->name('services.store');
        Route::get('delete_services/{id}', [ServiceController::class, 'destroy'])->name('services.destroy');
        Route::post('update_service', [ServiceController::class, 'update'])->name('services.update');
        //! Information Routes
        Route::get('all_infos', [InformationController::class, 'index'])->name('infos.index');
        Route::post('infos_store', [InformationController::class, 'store'])->name('infos.store');
        Route::get('infos_delete/{id}', [InformationController::class, 'destroy'])->name('infos.destroy');
        Route::post('infos_update', [InformationController::class, 'update'])->name('infos.update');
        //! Pages Routes
        Route::get('all_pages', [PagesController::class, 'index'])->name('pages.index');
        Route::post('pages_store', [PagesController::class, 'store'])->name('pages.store');
        Route::get('pages_delete/{id}', [PagesController::class, 'delete'])->name('pages.delete');
        Route::post('pages_update', [PagesController::class, 'update'])->name('pages.update');
    });
});

