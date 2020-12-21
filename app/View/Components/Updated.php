<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Updated extends Component
{
    public $name;

    public $date;

    /**
     * updated constructor.
     * @param $name
     * @param $date
     */
    public function __construct($date, $name = null)
    {
        $this->date = $date;
        $this->name = $name;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.updated');
    }
}
