<?php

namespace App\View\Components\user;

use Illuminate\View\Component;

class Nav extends Component
{
    public $mode;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($mode)
    {
        $this->mode = $mode;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.user.nav');
    }
}
