<?php
namespace App\Http\Controllers;
namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
        public function fetch(){
             $student = Student::all();
              if($student->count() > 0){
                return response()->json([
                    "status" =>200,
                    "message" =>$student
                ],200);
              }else{
                return response()->json([
                    "status" =>404,
                    "message" =>"No student found"
                ],404);
              }
        }
         public function create(Request $request){
            $incomingField = $request->validate([
                'name' =>"required",
                'email' =>"required",
                'phone' =>"required",

            ]);
             Student::create($incomingField);

             return response()->json([
                "status" =>200,
                "message" =>"Student Created successfully"
            ],200);
         }
         public function getsingle($id){
            $student = Student::find($id);
            if($student){
                return response()->json([
                    "status" =>200,
                    "message" =>$student
                ],200);
            }else{
                return response()->json([
                    "status" =>404,
                    "message" =>"Student not found"
                ],404);
            }



         }
          public function update(Student $id, Request $request){
            $incomingField = $request->validate([
                'name' =>"required",
                'email' =>"required",
                'phone' =>"required",

            ]);
            //
            $student = Student::find($id);
            if($student){
                $id->update($incomingField);
                return response()->json([
                    "status" =>200,
                    "message" =>"Student update successfully"
                ],200);
            }else{
                return response()->json([
                    "status" =>404,
                    "message" =>"Student id does not exist"
                ],404);
            }



          }
          public function delete( $id){
            $student = Student::find($id);
             if($student){

                $student->delete();
                return response()->json([
                    "status" =>200,
                    "message" =>"Student delete successfully"
                ],200);
             }else{
                return response()->json([
                    "status" =>404,
                    "message" =>"Student id does not exist"
                ],404);
             }

          }
}
