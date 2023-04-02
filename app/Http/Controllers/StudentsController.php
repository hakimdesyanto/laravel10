<?php

namespace App\Http\Controllers;

use App\Models\Students;
use App\Http\Requests\StoreStudentsRequest;
use App\Http\Requests\UpdateStudentsRequest;
use Illuminate\Validation\Validator;
// use Illuminate\Http\RedirectResponse;
// use Illuminate\Http\Response;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('students.table')->with(['students' => Students::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentsRequest $request)
    {

        $validate = $request->validated();

        $student = new Students;
        $student->idstudents = $request->idstudents;
        $student->full_name = $request->full_name;
        $student->gender = $request->gender;
        $student->addres = $request->addres;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->save();

        return redirect('students')->with('msg', 'Add New Student Succeed!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Students $students, $idstudents)
    {
        $data = $students->find($idstudents);
        return view('students.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Students $students, $idstudents)
    {
        $data = $students->find($idstudents);
        return view('students.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentsRequest $request, Students $students, $idstudents)
    {
        $data = $students->find($idstudents);
        $data->full_name = $request->full_name;
        $data->gender = $request->gender;
        $data->addres = $request->addres;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->save();

        return redirect('students')->with('msg', 'Data ' . $request->full_name . ' has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Students $students, $idstudents)
    {
        $data = $students->find($idstudents);
        $data->delete();

        return redirect('students')->with('msg', 'Data ' . $data->full_name . ' has been deleted');
    }
}
