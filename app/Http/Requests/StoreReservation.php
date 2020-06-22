<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReservation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'pickup_city' => 'bail|required|exists:cities,id',
            'return_loc' => 'bail|required|exists:cities,id',
            'pickup_loc' => 'bail|required|exists:locations,id',
            'return_loc' => 'bail|required|exists:locations,id',
            'pickup_date' => 'bail|required|after_or_equal:' . now()->toDateString(),
            'return_date' => 'bail|required|after_or_equal:' . now()->toDateString(),
            'car_id' => 'bail|required|exists:cars,id'
        ];
    }
}
