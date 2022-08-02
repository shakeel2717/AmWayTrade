<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $type;
    public $name;
    public $placeholder;
    public $attribute;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $placeholder, $attribute = "", $type = "text")
    {
        $this->type = $type;
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->attribute = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
