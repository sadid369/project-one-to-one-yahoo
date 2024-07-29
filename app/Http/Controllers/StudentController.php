<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $students = Student::with('contact')->get();
    //    $students = Student::withWhereHas('contact',function ($query) {
    //     $query->where('city','Barishal');
    //    })->get();
    //    $students = Student::where('gender','female')->withWhereHas('contact',function ($query) {
    //     $query->where('city','Barishal');
    //    })->get();
    //    $students = Student::where('gender','female')->whereHas('contact',function ($query) {
    //     $query->where('city','Barishal');
    //    })->get();
       return $students;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $gender = fake()->randomElements(['male', 'female'])[0];
        $student = Student::create([
            'name' => fake()->name(gender: $gender),
            'age'=>fake()->numberBetween(18,25),
            'gender'=>$gender
        ]);

        $student->contact()->create([
            'email' => fake()->unique()->email(),
            'phone' => fake()->phoneNumber(),
            'address' => fake()->address(),
            'city' => fake()->city(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
