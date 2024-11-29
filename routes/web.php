<?php
//chaqirib olish 
use Illuminate\Support\Facades\Route;
use App\Models\Student;
use App\Models\Company;
use App\Models\Laptop;
use App\Http\Controllers\StudentController;



Route::view('/' , 'home');



Route::resource('students', StudentController::class);
Route::resource('laptops', StudentController::class);
// ----------------------------------------------------------------------







Route::get('/services', function () {


    $services = Company::all();
    return view('/services' , [
        'services' => $services ,
    ]);
});

// Laptop laptops 

Route::get('/service/{id}', function ($id) {
    $service = Company::find($id);
    return view ('service', ['service' => $service]);
});



Route::get('/portfolio', function () {

    //  $laptops = Laptop::all();
     $laptops = Laptop::with('company')->get();

    return view('/portfolio' , [
        'laptops' => $laptops ,
    ]);
});

Route::get('/laptop/{id}', function ($id) {
    $laptops = Laptop::find($id);
    return view ('laptop', ['laptop' => $laptops]);
});