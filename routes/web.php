<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CalculatorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\prelimAngeloController;
use App\Http\Controllers\discountCalculatir;
use App\Http\Controllers\FormController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CategoryController;

Route::get('/dsd', function () {
    return view('welcome');
});


Route::get('/discount', [discountCalculatir::class, 'showHomePage']);
Route::get('/calculater', [discountCalculatir::class, 'calculatediscount'])->name('callcalculater');

Route::get('/loginform2', [FormController::class, 'showLogPage']);
Route::get('/createaccount', function() {
    return view('Form.register');
})->name('createaccount');
Route::get('/login23', function() {
    return view('Form.Login');
})->name('login23');

//
//
//
//19/11/2024
Route::get('/', function() {
    return view('login.login1');
})->name('login1');

Route::get('/register1', function() {
    return view('login.register1');
})->name('register1');



Route::middleware(['auth'])->group(function () {

    //ADMIN ROUTE
    Route::middleware(['role:admin'])->prefix('admin')->name('admin.')->group(function () {
        //route 1

        // Route::get('/main-dashboard', function () {
        //     return view('login.dashboard');
        // })->name('main-dashboard');

        //route 2
        Route::controller(EventController::class)->group(function () {
            Route::get('/main-dashboard', 'index')->name('main-dashboard');
            Route::post('/add_event', 'add_event')->name('add_event');
            Route::put('/update_event/{id}', 'update_event')->name('update_event');
            Route::delete('/delete_event/{id}', 'delete_event')->name('delete_event');

        });

        Route::controller(CategoryController::class)->group(function () {
            Route::get('/category', 'index')->name('category');
            Route::post('/add_category', 'add_category')->name('add_category');
            Route::put('/update_category/{id}', 'update_category')->name('update_category');
            Route::delete('/delete_category/{id}', 'delete_category')->name('delete_category');

        });


    });






    //REGISTRAR ROUTE
    Route::middleware(['role:registrar'])->prefix('registrar')->name('registrar.')->group(function () {

        Route::get('/main-dashboard', function () {
            return view('login.dashboard');
        })->name('main-dashboard');

    });

    //FACULTY ROUTE
    Route::middleware(['role:faculty'])->prefix('faculty')->name('faculty.')->group(function () {

        Route::get('/main-dashboard', function () {
            return view('login.dashboard');
        })->name('main-dashboard');

    });

});

///////
//
//
//








Route::get('/calculator', [CalculatorController::class, 'showCalculatorPage']);
Route::get('/calculate', [CalculatorController::class, 'calculate'])->name('callcalculate');

Route::get('/main', [prelimAngeloController::class, 'showOperatorPage']);


Route::get('/addition', function () {
    return view('prelim-angelo.addition');
})->name('addition');
Route::get('/subtraction', function() {
    return view('prelim-angelo.subtraction');
})->name('subtraction');
Route::get('division', function () {
    return view('prelim-angelo.division');
})->name('division');
Route::get('multiplication', function () {
    return view('prelim-angelo.multiplication');
})->name('multiplication');
Route::get('main', function() {
    return view('prelim-angelo.main');
})->name('main');

Route::post('/calculate-addition', [prelimAngeloController::class, 'calculateAddition'])->name('callcalculateAddition');
Route::post('/calculate-subtraction', [prelimAngeloController::class, 'calculateSubtraction'])->name('callcalculateSubtraction');
Route::post('/calculate-division', [prelimAngeloController::class, 'calculateDivision'])->name('callcalculateDivision');
Route::post('/calculate-multiply', [prelimAngeloController::class, 'calculateMultiply'])->name('callcalculateMultiply');







Route::get('/showLogin', function() {
    return view('MyMiddlewareDemo.login');
})->name('login_form');

Route::post('/showLogin', function() {
    return view('MyMiddlewareDemo.login');
})->middleware('login.middleware');

Route::get('/show/dashboard', function() {
    return view('MyMiddlewareDemo.dashboard');
})->name('gotodashboard');



Route::get('/index', function () {
    return view('mypages.index');
})->name('index');

Route::get('/gallery', function () {
    return view('mypages.gallery');
})->name('gallery');

Route::get('/services', function () {
    return view('mypages.services');
})->name('services');

Route::get('/main', function () {
    return view('prelim-angelo.main');
})->name('main');














Route::get('/daniel2', function ()  {
	return view("daniel2");
})->name('dionard'); //name routes;
Route::get('/hehe' , function () {
    return view("daniel");
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// Route::get('/calculator', [CalculatorController::class, 'showCalculatorPage']);
// Route::get('/calculate', [CalculatorController::class, 'calculate'])->name('callcalculate');

// Route::get('/main', [prelimAngeloController::class, 'showOperatorPage']);

// Route::get('/addition', function () {
//     return view('prelim-angelo.addition');
// })->name('addition');
// Route::get('/subtraction', function() {
//     return view('prelim-angelo.subtraction');
// })->name('subtraction');
// Route::get('division', function () {
//     return view('prelim-angelo.division');
// })->name('division');
// Route::get('multiplication', function () {
//     return view('prelim-angelo.multiplication');
// })->name('multiplication');
// Route::get('main', function() {
//     return view('prelim-angelo.main');
// })->name('main');
