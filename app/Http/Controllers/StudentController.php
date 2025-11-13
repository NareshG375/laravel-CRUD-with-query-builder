<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StudentRequest;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $students = DB::table('students')->orderBy('id','DESC')->paginate(10);

        return view('students.index',compact('students'));
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
    public function store(StudentRequest $request)
    {
        $inserted   = DB::table('students')
                    ->insert([

                        "name" =>$request->name,
                        "email" =>$request->email,
                        "age" =>$request->age,
                        "city" =>$request->city,
                        "created_at"=>now(),
                        "updated_at"=>now(),


                    ]) ;

        if($inserted){
              return redirect()->route('students.index')->with('success',"Student added sucessfully");
            } 
        else {
              return redirect()->route('students.index')->with('error',"Something went wrong!");
            
        }             
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student  = DB::table('students')->find($id);
        if(!$student)
        {
            abort(404, 'Student not found');
        }
        return view('students.show',compact('student'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student  = DB::table('students')->find($id);
        if(!$student)
        {
            abort(404, 'Student not found');
        }
        return view('students.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentRequest $request, string $id)
    {
        $updated  = DB::table("students")
                    ->where('id',$id)
                    ->update([
                        "name" =>$request->name,
                        "email" =>$request->email,
                        "age" =>$request->age,
                        "city" =>$request->city,
                        "updated_at"=>now(),
                    ]);

        if ($updated) {
            return redirect()->route('students.index')->with('success', 'Student updated successfully!');
        } else {
            return redirect()->back()->with('error', 'No changes were made or student not found.');
        }            
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleted  = DB::table("students")->where('id',$id)->delete();
        if($deleted){
             return redirect()->back()->with('success', 'Student deleted successfully!');
        } else {
             return redirect()->back()->with('error', 'Student not found!');

        }
    }
}
