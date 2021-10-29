<?php

namespace App\View\Components;

use Illuminate\View\Component;

class slot extends Component
{
    
    public $ingredients;
    public $resource;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($ingredients, $resource)
    {
        $this->ingredients = $ingredients;
        $this->resource = $resource;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.slot');
    }
}
