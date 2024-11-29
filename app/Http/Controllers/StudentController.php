<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
  public function index(Student $user){
    $users = Student::latest()->paginate(5);
    return view('/students.index' , [
        'users' => $users ,
    ]);
  }  

  public function create(Student $user){
     return view('/students.create');
  }


  public function group(){
        request()->validate(
            [
            'name'     => ['required', 'min:2'],
            'lastname' => ['required', 'min:3'],
            ],
            [
                'name.required' => "Ismingizni kiritishingiz shart!",
                'name.min'=> "Kamida 2ta belgidan iborat bo'loshi kerak!",
                'lastname.required'=> "Familyangizni kiritishingiz shart!",
                'lastname.min'=> "Kamida 3ta belgidan iborat bo'loshi kerak!",
            ]
    );
        

        
        Student::create([
            'name'     => request('name'),
            'lastname' => request('lastname')
        ]);
        return redirect('/students');
 }


 public function show(Student $user){
    return view ('students.show', ['user' => $user]);
 }



 public function edit(Student $user){
    return view ('students.edit', ['user' => $user]);
 }


 public function update(Student $user){
        request()->validate(
            [
            'name'     => ['required', 'min:2'],
            'lastname' => ['required', 'min:3'],
            ]
    );
    $user -> update([
        'name' => request('name'),
        'lastname' => request('lastname')

    ]);
    return redirect('/students/' . $user->id);
    }

    public function delete(Student $user){
        $user -> delete();

        return redirect('/students');
     }
}
