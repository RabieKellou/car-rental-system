<?php

namespace App\Http\Controllers;

use App\Car;
use App\CarFeature;
use App\Http\Requests\StoreCar;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cars.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCar $request)
    {
        // Retrieve the validated input data...
        // dd($request->all());
        $validatedData = $request->validated();

        $car = Car::create($validatedData);
        // dd($car);
        if ($validatedData['features'] ?? false) {
            foreach ($validatedData['features'] as $feature) {
                CarFeature::insert([
                    'car_id' => $car->id,
                    'feature_id' => $feature
                ]);
            }
        }
        return redirect()->route('cars.show', ['car' => $car->id]);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['car'] = Car::with(['features', 'category', 'reviews'])->findOrFail($id);
        return view('cars.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //
    }
}
