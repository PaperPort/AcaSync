<?php
use Illuminate\Support\Facades\Route;
use App\Models\User;

// Main Page
Route::get('/', \App\Livewire\Welcome::class)->name('welcome-page');
Route::get('/login', \App\Livewire\Login::class)->name('login');
Route::get('/register-account',  \App\Livewire\RegisterAccount::class)->name('register-account');
Route::get('/register-workspace',\App\Livewire\RegisterWorkspace::class)->name('register-workspace');
Route::get('/forgot-password',  \App\Livewire\ForgotPassword::class)->name('forgot-password');
Route::get('/change-password',  \App\Livewire\ChangePassword::class)->name('change-password');
Route::get('/privacy-policy',  \App\Livewire\PrivacyPolicy::class)->name('privacy-policy');
Route::get('/terms-of-use',  \App\Livewire\TermsOfUse::class)->name('terms-of-use');
Route::get('/verify-email/{token}', function($token){
    $user = User::where('verification_token', $token)->firstOrFail();
    $user->email_verified_at = now();
    $user->updated_at = now();
    $user->verification_token = null;
    $user->save();
    return redirect()->route('login');
});
// Personal Page : All Role kecuali Admin
Route::get('/personal-landing', \App\Livewire\User\Landing::class)->name('personal-landing');
Route::get('/personal-profile', \App\Livewire\User\Profile::class)->name('personal-profile');
Route::get('/join-workspace', \App\Livewire\User\JoinWorkspace::class)->name('join-workspace');
Route::get('/join-workspace/code', \App\Livewire\User\JoinCode::class)->name('code-join-workspace');

// Dashboard Workspace Page
Route::get('/id-workspace/dashboard', \App\Livewire\User\Dashboard::class)->name('dashboard-workspace');
Route::get('/id-workspace/dashboard-2', \App\Livewire\User\Murid\Dashboard::class)->name('dashboard-murid');

// Admin Area
Route::get('/id-workspace/info-workspace/{view?}', \App\Livewire\User\Admin\InfoWorkspace::class)->name('info-workspace');
Route::get('/id-workspace/anggota/{view?}', \App\Livewire\User\Admin\Anggota::class)->name('anggota-workspace');
Route::get('/id-workspace/role', \App\Livewire\User\Admin\Role::class)->name('role-workspace');
Route::get('/id-workspace/kelas', \App\Livewire\User\Admin\Kelas::class)->name('kelas-workspace');
Route::get('/id-workspace/mata-pelajaran', \App\Livewire\User\Admin\MataPelajaran::class)->name('mapel-workspace');

// Murid Area
Route::get('/id-workspace/id-kelasmapel',\App\Livewire\User\Murid\KelasMapel::class)->name('timeline-kelas-mapel');