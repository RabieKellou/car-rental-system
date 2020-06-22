<?php

namespace App\View\Components;

use App\Car;
use App\City;
use App\User;
use Illuminate\View\Component;

class ReservationForm extends Component
{
    public $action;
    public $pickup_date;
    public $return_date;
    public $location;
    public $carId;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($carId, $action, $pickup_date = null, $return_date = null, $city = null)
    {
        $this->carId = $carId;
        $this->action = $action;
        $this->pickup_date = $pickup_date;
        $this->return_date = $return_date;
        $this->city = $city;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $data['cities'] = City::cursor();
        return view('components.reservation-form', $data);
    }
}
