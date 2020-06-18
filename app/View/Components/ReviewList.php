<?php

namespace App\View\Components;

use App\Review;
use Illuminate\View\Component;

class ReviewList extends Component
{
    public $carId;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($carId)
    {
        $this->carId = $carId;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $data['reviews'] = Review::where('car_id', $this->carId)->with('user')->latest()->get();
        // dd($data['reviews']);
        return view('components.review-list', $data);
    }
}
