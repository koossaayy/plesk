<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Input extends Component
{
    public $name = "hemllo";
    public $type = "hemllo";
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public string $value)
    {

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.input');
    }
}
