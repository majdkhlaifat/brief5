<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;
use App\Models\House;
class LessonHouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('lesson.addhouse');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        
        // Validate the form data
        $validatedData = $request->validate([
            'house_type' => '',
            'pepole_num' => '',
            'pepole_bed' => '',
            'pepole_bathroom' => '',
            'description' => '',
            'service' => '',
            'extra' => '',
            'house_name' => '',
            'about' => '',
            'location' => '',
            'price' => '',
            'images.*'
        ]);
        
        
    // Get the names of the uploaded images
    $imageNames = [];
    foreach ($request->file('images') as $image) {
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('houseimage'), $imageName);
        $imageNames[] = $imageName;
    }
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('houseimage'), $imageName);
    }
    // Get the existing row or create a new one
    $house = House::firstOrNew(['id' => 1]);

    // Combine the existing image names with the new ones
    $existingImage1 = $house->image2;
    $delimiter = ','; // Choose a delimiter that suits your needs
    $combinedImageNames = $existingImage1 ? $existingImage1 . $delimiter . implode($delimiter, $imageNames) : implode($delimiter, $imageNames);

        $house = new House();
        $lessonId = session('lesson_id');
        $house->type_id = 1 ;
        $house->number_person = $validatedData['pepole_num'];
        $house->number_bed = $validatedData['pepole_bed'];
        $house->number_bathroom = $validatedData['pepole_bathroom'];
        $house->description = $validatedData['description'];
        $house->service = $validatedData['service'];
        $house->extra_service = $validatedData['extra'];
        $house->house_name = $validatedData['house_name'];
        $house->about = $validatedData['about'];
        $house->location = $validatedData['location'];
        $house->price = $validatedData['price'];
        $house->lesson_id =$lessonId;
        $house->image1 = 'houseimage/' . $imageName;
        $house->image2 = $combinedImageNames;

        $house->save();
        return redirect()->route('lessons.index')->with('success', 'Lesson created successfully.');


        // Redirect or perform additional actions as needed
    }

    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
