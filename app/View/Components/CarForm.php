<?php

namespace App\View\Components;

use App\Car;
use App\Category;
use App\Feature;
use Illuminate\View\Component;

class CarForm extends Component
{
    public $action;
    public $editing;
    public $car;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($action, $editing = false, Car $car = null)
    {
        $this->action = $action;
        $this->editing = $editing;
        $this->car = $car;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $data['categories'] = Category::cursor();
        $data['features'] = Feature::cursor();
        // dd($data);
        return view('components.car-form', $data);
    }
}
