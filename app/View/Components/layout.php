<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Cookie;

class layout extends Component
{
    public $theme = 'light';
    public $selectedTheme = 'system';

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->selectedTheme = Cookie::get('selectedTheme', 'system');

        if($this->selectedTheme != 'system') {
            $this->theme = $this->selectedTheme;
        } else {
            $this->theme = Cookie::get('theme', 'light');
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layout');
    }
}
