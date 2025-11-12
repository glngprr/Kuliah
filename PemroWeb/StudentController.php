<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = Student::all();
        return view('student.view', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'nim' => 'required|unique:students',
            'name' => 'required',
            'gender' => 'required',
            'domisili' => 'required',
            'angkatan' => 'required',
            'prodi' => 'required',
            'fakultas' => 'required'
        ]);
        Student::create($request->all());
        return redirect()->route('dashboard')->with('succes', 'data mahasiswa berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::findOrFail($id);
        return view('student.edit', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::findOrFail($id);
        return view('student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Student::findOrFail($id);
        
        $request -> validate([
            'nim' => 'required|unique:students',
            'name' => 'required',
            'gender' => 'required',
            'domisili' => 'required',
            'angkatan' => 'required',
            'prodi' => 'required',
            'fakultas' => 'required'
        ]);

        $student -> update($request->all());
        return redirect()->route('dashboard')->with('succes', 'data mahasiswa berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::findOrfail($id);
        $student->delete();

        return redirect()->route('dashboard')->with('succes', 'data mahasiswa berhasil dihapus');
    }
}