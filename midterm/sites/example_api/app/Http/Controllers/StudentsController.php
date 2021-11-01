<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// used namespaces
use Illuminate\Support\Facades\Validator;
use App\Models\Student;
use PDO;

class StudentsController extends Controller
{

    public function store(Request $request)
    {
        //validate incoming data
        $validator = Validator::make($request->all(),[
            'firstname' => 'required',
            'lastname' => 'required',
            'address' => 'required'
        ]);

        if($validator->fails()){
            //return data encoded to json with status code of 400 (Bad Request)
            return response()->json(['created' => false, 'errors' => $validator->errors(), 400]);
        }

        // store incoming data to the database
        Student::create($request->all());

        // return data encoded to json with status code of 201 (Created)
        return response()->json(['created' => true, 'message' => 'New Student successfully added to the database'], 201);
    }

    public function find($id)
    {
        $student = Student::find($id);

        if(!$student){
            return response()->json(['found' => false, 'message' => "No Student found with an ID of $id"], 404);
        }

        return response()->json(['found' => true, 'data' => $student]);
    }

}
