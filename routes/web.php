<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController; // تأكد من تضمين هذا السطر

// المسار لعرض الصفحة الرئيسية
Route::get('/', function () {
    return view('welcome'); // تأكد من وجود ملف welcome.blade.php في resources/views/
});

// المسار لعرض لوحة التحكم
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// تأكد من عدم وجود مسار آخر بنفس عنوان URL
// إذا كنت بحاجة إلى مسار آخر، استخدم عنوان URL فريد

