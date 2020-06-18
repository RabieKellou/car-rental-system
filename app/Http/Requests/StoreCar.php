<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCar extends FormRequest
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
            'brand' => 'bail|required',
            'model' => 'bail|required',
            'fuelType' => 'bail|required|in:gasoline,diesel,electric',
            'gearBoxType' => 'bail|required|in:manual,automatic',
            'seatCount' => 'bail|required|integer',
            'doorCount' => 'bail|required|integer',
            'purchase_date' => 'bail|required|before_or_equal:' . now()->toDateString(),
            'price' => 'bail|required|numeric|min:0',
            'category_id' => 'required|integer|exists:categories,id',
            'features' => 'bail|nullable|exists:features,id',
            'car_desc' => 'bail|required|min:20',

        ];
    }
}
