<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{

    public $title;

    public $subtitle;

    public $items;

    public $needToPluck;

    public $pluckContent;

    /**
     * card constructor.
     * @param $title
     * @param $subtitle
     * @param $items
     * @param $needToPluck
     * @param $pluckContent
     */
    public function __construct($title, $subtitle, $items, $needToPluck = true, $pluckContent = null)
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->items = $items;
        $this->needToPluck = $needToPluck;
        $this->pluckContent = $pluckContent;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.card');
    }
}
