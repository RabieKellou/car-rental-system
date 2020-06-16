<?php

namespace App\View\Components;

use App\Car;
use App\Category;
use Illuminate\View\Component;

class CarList extends Component
{

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $data['cars'] = Car::with(['features', 'category'])->get();
        $data['categories'] = Category::cursor();
        // dd($data['cars']);
        return view('components.car-list', $data);
    }
}
