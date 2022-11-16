<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Movie extends Component
{
    public $test; 
    public $somemovies;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($test, $somemovies)
    {
        $this->test = $test; 
        $this->somemovies = $somemovies; 
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.movie');
    }
}
