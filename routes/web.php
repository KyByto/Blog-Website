<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Blog;

Route::get('/', function () {
    if(auth()->check()) {
        return redirect()->route('blog.index');
    }
    return view('welcome');
});

Route::get('/dashboard', function () {
    $id = auth()->id();

    $blog = Blog::where('user_id' , $id)->get();
    return view('dashboard', ['blogs' => $blog]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::delete('/blogs/{blog_id}' ,[BlogController::class , 'destroy'] )->name('blog.destroy');   

    Route::get('/blogs' ,[BlogController::class , 'index'] )->name('blog.index');
    Route::post('/blogs' ,[BlogController::class , 'store'] )->name('blog.store');
    Route::get('/blogs/create' , [BlogController::class , 'create'])->name('blog.create');
    Route::put('/blogs/{blog_id}' , [BlogController::class , 'update'])->name('blog.update');
    Route::get('/blogs/{blog_id}' ,[BlogController::class , 'show'] )->name('blog.show');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');



    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/blogs/{blog_id}/edit' ,[BlogController::class , 'edit'] )->name('blog.edit');
});






require __DIR__.'/auth.php';
