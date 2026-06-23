<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\LandingPage;

Route::get('/', LandingPage::class)->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::get('dashboard/contact-submissions', \App\Livewire\Admin\ContactSubmissionsIndex::class)->name('admin.contact-submissions');
});

require __DIR__.'/settings.php';
