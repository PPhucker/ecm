<?php

namespace App\View\Components\Buttons;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Href extends Component
{
    public $route;
    /**
     * @var null
     */
    public $icon;
    /**
     * @var null
     */
    public $disabled;
    /**
     * @var null
     */
    public $title;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route, $icon = null, $title = null, $disabled = null)
    {
        $this->route = $route;
        $this->icon = $icon;
        $this->title = $title;
        $this->disabled = $disabled;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View
     */
    public function render()
    {
        return view('components.buttons.href');
    }
}
