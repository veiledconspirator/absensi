<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teacher = Teacher::query(); // query supaya bisa di ubah di bawah-bawah

        $teachers = $teacher->paginate(10); // pagination dari query 

        return view('teacher.index')->with('teachers', $teachers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $datas = new Teacher;
        return view('teacher.create', compact('datas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Teacher;
        $data->induk = $request->induk;
        $data->nama = $request->nama;
        $data->kelas = $request->kelas;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->save();

        return Redirect()->route('teachers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        $teacher = Teacher::find($teacher);

        return view('teachers.index', compact('teachers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        return view('teacher.edit')->with('teacher', $teacher);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {
        $teacher->induk = $request->induk;
        $teacher->nama = $request->nama;
        $teacher->kelas = $request->kelas;
        $teacher->jenis_kelamin = $request->jenis_kelamin;
        $teacher->update();

        return redirect()->route('teachers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        // $teacher = Teacher::findOrFail($teacher);
        $teacher->delete();

        return redirect()->route('teachers.index')->with('success', 'Berhasil Hapus');
    }
}
