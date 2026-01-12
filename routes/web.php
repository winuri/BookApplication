
<?php
//use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\AdminController;
//use App\Http\Controllers\ContentController;
//use App\Http\Controllers\QrController;
?>

<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\QrController;
use App\Http\Controllers\ImageController;

// Public Landing Page
Route::get('/', function () {
    return view('kids'); 
})->name('home');

// Login Routes
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');

// Logout Route
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('logout');

// Protected Dashboard
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('dashboard');

// Protected Content Page
Route::get('/content-management', [ContentController::class, 'index'])->name('content.index');

// Add this line with your other routes
Route::get('/qr-management', [QrController::class, 'index'])->name('qr.index');

// Image Management
Route::get('/admin/edit-image/{key}', [ImageController::class, 'edit'])->name('admin.image.edit');
Route::post('/admin/edit-image/{key}', [ImageController::class, 'update'])->name('admin.image.update');

// ------------------ Public Website ------------------
// Landing page for all users
//Route::get('/', function () {
//    return view('kids'); // Kids landing page
//})->name('home');

// ------------------ Admin Authentication ------------------
// ------------------ Admin Authentication ------------------
// Name this 'login' so Laravel's internal system can find it
//Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('login');
//Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');

// ------------------ Admin Dashboard ------------------
// Ensure this name matches what you use in your Blade files
//Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('dashboard');
// Only logged-in users can access these

// Show login form
//Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');

// Handle login submission
//Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');

// Admin Dashboard (We handle security inside the controller method for now)
// Change this line in web.php
//Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('dashboard');
// Show login form
//Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
// Handle login submission
//Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
// dashboard.blade.php logic
//Route::middleware(['auth'])->group(function () {
    //Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
//});
// Show login form
//Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');

// Handle login submission
//Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');

// Admin Dashboard (We handle security inside the controller method for now)
//Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
// ------------------ Admin Dashboard ------------------
// Protected routes, only accessible after login
//Route::middleware(['auth'])->group(function () {
    //Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
//});

// ------------------ Other Protected Routes ------------------
// Content Management
//Route::middleware(['auth'])->group(function () {
  //  Route::get('/content-management', [ContentController::class, 'index'])->name('content.index');
//});

// QR Management
//Route::middleware(['auth'])->group(function () {
  //  Route::get('/qr-management', [QrController::class, 'index'])->name('qr.index');
//});
