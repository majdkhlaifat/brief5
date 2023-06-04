<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\House;
use App\Models\Booking;

class HomeController extends Controller
{

        public function index()
        {
            $houses = House::all();

            return view('home.index', compact('houses'));

        }
        public function showHouses(Request $request)
        {

            $type_id = $request->query('type_id');
            $houses = House::where('type_id', $type_id)->get();
            return view('home.index', compact('houses'));
        }

    public function create()
    {

    }
    public function store(Request $request)
    {

    }

    public function show($id)
    {
        $bookedDates = Booking::pluck('start_date', 'end_date')->toArray();
        $house = House::find($id);
        $comments = Comment::where('house_id', $id)->get();
        $houseId = 1;

        $lessonData = DB::table('houses')
        ->join('lessons', 'houses.lesson_id', '=', 'lessons.id')
        ->select('lessons.*')
        ->where('houses.id', $id)
        ->first();
        return view('home.single', compact('house', 'bookedDates', 'lessonData','comments'));

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
