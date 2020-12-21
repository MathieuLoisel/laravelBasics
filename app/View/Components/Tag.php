<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Tag extends Component
{
    public $tags;

    /**
     * tag constructor.
     * @param $tags
     */
    public function __construct($tags)
    {
        $this->tags = $tags;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.tag');
    }
}
