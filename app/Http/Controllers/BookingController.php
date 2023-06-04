<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
{
    // Validate the form data
    $validatedData = $request->validate([
        'check-in-date' => 'required|date',
        'check-out-date' => 'required|date|after:check-in-date',
        'payment_method' => 'required',
        // Add validation for payment fields if required
    ]);

    // Create a new booking instance
    $booking = new Booking();
    $booking->start_date = $validatedData['check-in-date'];
    $booking->end_date = $validatedData['check-out-date'];
    $booking->house_id = 1;
    $booking->user_id = Auth::id(); // Assuming you have user authentication set up
    $booking->lesson_id = 1;

    // Save the booking to the database
    $booking->save();

    // Create a new payment instance
    $payment = new Payment();
    $payment->booking_id = $booking->id;
    $payment->payment_method = $validatedData['payment_method'];
    // Set other payment information as needed, such as card details, amount, etc.

    // Save the payment to the database
    $payment->save();

    // Optionally, you can redirect the user to a success page or perform other actions
    return redirect()->route('payment');
}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
