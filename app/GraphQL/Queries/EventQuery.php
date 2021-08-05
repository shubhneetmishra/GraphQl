<?php
namespace App\GraphQL\Queries;
use App\Models\Event;
class EventQuery
{
    public function createEvent(){
        if($request->hasFile('student_profile_picture')) {
            $file = $request->file('student_profile_picture');
            $fileName = time() . '.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/student_image');
            $file->move($destinationPath, $fileName);
            $student->student_profile_picture = $fileName;
          }

    }
}