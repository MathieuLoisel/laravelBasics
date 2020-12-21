<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Badge extends Component
{
    public $type;

    public $message;

    /**
     * badge constructor.
     * @param $type
     * @param $message
     */
    public function __construct($type, $message)
    {
        $this->type = $type;
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.badge');
    }
}
