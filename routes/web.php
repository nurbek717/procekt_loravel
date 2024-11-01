<?php
//chaqirib olish 
use Illuminate\Support\Facades\Route;
use App\Models\Student;
use App\Models\Car;
use App\Models\Laptop;


Route::get('/', function () {

    
    return view('home');
});

//users da modellar bilanishlash

Route::get('/users', function () {

    $users = Student::all();
    return view('/users' , [
        'users' => $users ,
    ]);
});



Route::get('/user/{id}', function ($id) {
    $user = Student::find($id);
    return view ('user', ['user' => $user]);
});




Route::get('/services', function () {


    $services = Car::all();
    return view('/services' , [
        'services' => $services ,
    ]);
});

// Laptop laptops 

Route::get('/service/{id}', function ($id) {
    $service = Car::find($id);
    return view ('service', ['service' => $service]);
});



Route::get('/portfolio', function () {

    $laptops = Laptop::all();

    return view('/portfolio' , [
        'laptops' => $laptops ,
    ]);
});

Route::get('/laptop/{id}', function ($id) {
    $laptops = Laptop::find($id);
    return view ('laptop', ['laptop' => $laptops]);
});