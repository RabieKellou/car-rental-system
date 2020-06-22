<?php

namespace App\Http\Controllers;

use App\Car;
use App\Http\Requests\StoreReservation;
use App\Mail\ReservationBill;
use App\Reservation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('reservations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReservation $request)
    {
        $car = Car::findOrFail($request->car_id);
        $pickup_date = Carbon::parse($request->input('pickup_date'));
        $return_date = Carbon::parse($request->input('return_date'));

        if (($nbDays = $return_date->diffInDays($pickup_date)) <= 0) {
            $nbDays = 1;
        }
        $amount =  $nbDays * $car->price;
        $reservation = Reservation::create([
            'amount' => $amount,
            'pickup_date' => $pickup_date,
            'return_date' => $return_date,
            'pickup_loc' => $request->input('pickup_loc'),
            'return_loc' => $request->input('return_loc'),
            'car_id' => $car->id,
            'user_id' => Auth::id()
        ]);
        Mail::to($request->user())->send(new ReservationBill($reservation));
        return redirect()->route('reservations.show', ['reservation' => $reservation->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        // dd($reservation);
        return view('reservations.show', ['reservation' => $reservation]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
