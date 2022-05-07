<?php

namespace App\View\Components\home;

use Illuminate\Support\Arr;
use Illuminate\View\Component;

class Portafolio extends Component
{
    public array $items = [];
    public array $tabs = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = [[
            'category' => ['PHP'],
            'title' => 'PHP MVC Micro-Framework',
            'image' => url('/img/php-mvc-framework.png'),
            'description' => 'Micro-Framework que desarrolle para entender mejor el concepto de MVC (Modelo-Vista-Controlador)',
            'github' => 'https://github.com/JuanXB/microFrameworkPHP'
        ],];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.portafolio');
    }
}
