<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\VerificationController;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::middleware(RedirectIfAuthenticated::class)->group(function () {
    // Main Page
    Route::get('/', \App\Livewire\Welcome::class)->name('welcome-page');
    Route::get('/login', \App\Livewire\Login::class)->name('login');
    Route::get('/register-account',  \App\Livewire\RegisterAccount::class)->name('register-account');
    Route::get('/register-workspace',\App\Livewire\RegisterWorkspace::class)->name('register-workspace');
    Route::get('/forgot-password',  \App\Livewire\ForgotPassword::class)->name('forgot-password');
    Route::get('/change-password/{token}',  \App\Livewire\ChangePassword::class)->name('change-password');
    Route::get('/privacy-policy',  \App\Livewire\PrivacyPolicy::class)->name('privacy-policy');
    Route::get('/terms-of-use',  \App\Livewire\TermsOfUse::class)->name('terms-of-use');
    Route::get('/verify-email/{token}/{workspace_id?}', [VerificationController::class, 'verify'])->name('verify-email');
    Route::get('/join-code/{workspace_id}/{role_id}', \App\Livewire\User\JoinCode::class)->name('link-join-workspace');
});
Route::middleware(['auth'])->group(function () {
    // All User 
    Route::get('/personal-landing', \App\Livewire\User\Landing::class)->name('personal-landing');
    Route::get('/personal-profile/{view?}', \App\Livewire\User\Profile::class)->name('personal-profile');
    Route::get('/join-workspace', \App\Livewire\User\JoinWorkspace::class)->name('join-workspace');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    // Dashboard Workspace Page
    Route::get('/{workspace_id}/dashboard', \App\Livewire\User\Dashboard::class)->name('dashboard-workspace')->where('user_id', '[A-Za-z0-9]{8}');
    Route::get('/{workspace_id}/{user_id}/landing-workspace', \App\Livewire\User\Murid\Dashboard::class)->name('dashboard-user');


    // Admin Area
    Route::get('/{workspace_id}/info-workspace/{view?}', \App\Livewire\User\Admin\InfoWorkspace::class)->name('info-workspace');
    Route::get('/{workspace_id}/anggota/{view?}/{id?}', \App\Livewire\User\Admin\Anggota::class)->name('anggota-workspace');
    Route::get('/id-workspace/role', \App\Livewire\User\Admin\Role::class)->name('role-workspace');
    Route::get('/{workspace_id}/kelas/{view?}', \App\Livewire\User\Admin\Kelas::class)->name('kelas-workspace');
    Route::get('/id-workspace/mata-pelajaran', \App\Livewire\User\Admin\MataPelajaran::class)->name('mapel-workspace');

    // Murid Area
    Route::get('/{workspace_id}/{user_id}/kelas-{kelas_id}/timeline',\App\Livewire\User\Murid\KelasMapel::class)->name('timeline-kelas-mapel');
});