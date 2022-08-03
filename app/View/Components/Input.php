<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $type;
    public $name;
    public $placeholder;
    public $attribute;
    public $value;
    public $label;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $placeholder, $attribute = "", $type = "text", $value = "", $label = "hide")
    {
        $this->type = $type;
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->attribute = $attribute;
        $this->value = $value;
        $this->label = $label;
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
