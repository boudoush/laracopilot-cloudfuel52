<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\UserManagementController;
use App\Http\Controllers\Admin\AnimalManagementController;
use App\Http\Controllers\Admin\PaymentManagementController;
use App\Http\Controllers\Breeder\BreederDashboardController;
use App\Http\Controllers\Breeder\AnimalController;
use App\Http\Controllers\Breeder\PaymentController;
use App\Http\Controllers\Breeder\QRCodeController;
use App\Http\Controllers\Verifier\VerifierDashboardController;
use App\Http\Controllers\Verifier\ScanController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () { return view('welcome'); });

// Static Pages
Route::get('/services', function () { return view('services'); })->name('services');
Route::get('/about', function () { return view('about'); })->name('about');
Route::get('/contact', function () { return view('contact'); })->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('/privacy', function () { return view('privacy'); })->name('privacy');
Route::get('/terms', function () { return view('terms'); })->name('terms');
Route::get('/legal', function () { return view('legal'); })->name('legal');

// Registration
Route::get('/register', function () { return view('register'); })->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

// Admin Authentication
Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// Admin Dashboard
Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

// Admin User Management
Route::get('/admin/users', [UserManagementController::class, 'index'])->name('admin.users.index');
Route::get('/admin/users/create', [UserManagementController::class, 'create'])->name('admin.users.create');
Route::post('/admin/users', [UserManagementController::class, 'store'])->name('admin.users.store');
Route::get('/admin/users/{id}/edit', [UserManagementController::class, 'edit'])->name('admin.users.edit');
Route::put('/admin/users/{id}', [UserManagementController::class, 'update'])->name('admin.users.update');
Route::delete('/admin/users/{id}', [UserManagementController::class, 'destroy'])->name('admin.users.destroy');

// Admin Animal Management
Route::get('/admin/animals', [AnimalManagementController::class, 'index'])->name('admin.animals.index');
Route::get('/admin/animals/{id}', [AnimalManagementController::class, 'show'])->name('admin.animals.show');
Route::delete('/admin/animals/{id}', [AnimalManagementController::class, 'destroy'])->name('admin.animals.destroy');

// Admin Payment Management
Route::get('/admin/payments', [PaymentManagementController::class, 'index'])->name('admin.payments.index');
Route::get('/admin/payments/{id}', [PaymentManagementController::class, 'show'])->name('admin.payments.show');
Route::put('/admin/payments/{id}/approve', [PaymentManagementController::class, 'approve'])->name('admin.payments.approve');
Route::put('/admin/payments/{id}/reject', [PaymentManagementController::class, 'reject'])->name('admin.payments.reject');

// Breeder Dashboard
Route::get('/breeder/dashboard', [BreederDashboardController::class, 'index'])->name('breeder.dashboard');

// Breeder Animals
Route::get('/breeder/animals', [AnimalController::class, 'index'])->name('breeder.animals.index');
Route::get('/breeder/animals/create', [AnimalController::class, 'create'])->name('breeder.animals.create');
Route::post('/breeder/animals', [AnimalController::class, 'store'])->name('breeder.animals.store');
Route::get('/breeder/animals/{id}', [AnimalController::class, 'show'])->name('breeder.animals.show');
Route::get('/breeder/animals/{id}/edit', [AnimalController::class, 'edit'])->name('breeder.animals.edit');
Route::put('/breeder/animals/{id}', [AnimalController::class, 'update'])->name('breeder.animals.update');
Route::delete('/breeder/animals/{id}', [AnimalController::class, 'destroy'])->name('breeder.animals.destroy');
Route::post('/breeder/animals/{id}/files', [AnimalController::class, 'uploadFile'])->name('breeder.animals.files.upload');
Route::get('/breeder/animals/files/{fileId}/download', [AnimalController::class, 'downloadFile'])->name('breeder.animals.files.download');
Route::delete('/breeder/animals/files/{fileId}', [AnimalController::class, 'deleteFile'])->name('breeder.animals.files.delete');

// Breeder QR Code Generation
Route::get('/breeder/qrcode/preview/{id}', [QRCodeController::class, 'preview'])->name('breeder.qrcode.preview');
Route::get('/breeder/qrcode/generate/{id}', [QRCodeController::class, 'generateSingle'])->name('breeder.qrcode.generate.single');
Route::post('/breeder/qrcode/generate-batch', [QRCodeController::class, 'generateBatch'])->name('breeder.qrcode.generate.batch');

// Breeder Payments (WhatsApp Integration)
Route::get('/breeder/payments', [PaymentController::class, 'index'])->name('breeder.payments.index');
Route::get('/breeder/payments/create/{animalId}', [PaymentController::class, 'create'])->name('breeder.payments.create');

// Verifier Dashboard
Route::get('/verifier/dashboard', [VerifierDashboardController::class, 'index'])->name('verifier.dashboard');

// Verifier Scan
Route::get('/verifier/scan', [ScanController::class, 'index'])->name('verifier.scan');
Route::post('/verifier/scan', [ScanController::class, 'verify'])->name('verifier.scan.verify');
Route::get('/verifier/animal/{qrCode}', [ScanController::class, 'show'])->name('verifier.animal.show');

// Public QR Code Verification (no auth required)
Route::get('/verify/{qrCode}', [ScanController::class, 'publicVerify'])->name('public.verify');