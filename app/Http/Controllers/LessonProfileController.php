<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House;
use App\Models\Lesson;
class LessonProfileController extends Controller
{
  
    public function index()
    {
        $lessonId = session('lesson_id');
        $houses = House::where('lesson_id', $lessonId)->get();
        $lesson = Lesson::find($lessonId)->first();
        return view('lesson.profile', compact('houses', 'lesson', 'lessonId'));
    }


    public function create()
    {
        
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        
    }


    public function edit($id)
    {
        $lessonId = session('lesson_id');
        $lesson = Lesson::find($lessonId)->first();
        return view('lesson.edit', compact('lesson', 'lessonId'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => '',
            'address' => '',
            'phone' => '',
            'location' => '',
        ]);
        $lessonId = session('lesson_id');
        // Find the lesson by lessonId
        $lesson = Lesson::findOrFail($lessonId);
    
        // Update the lesson with the form data
        $lesson->user_name = $validatedData['name'];
        $lesson->address = $validatedData['address'];
        $lesson->phone = $validatedData['phone'];
        
        $lesson->save();
    
        // Redirect or do any other necessary action
        return redirect()->back()->with('success', 'Lesson updated successfully');
    }

    public function destroy($id)
    {
        //
    }
}
