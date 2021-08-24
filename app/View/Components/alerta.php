<?php

namespace App\View\Components;

use Illuminate\View\Component;

class alerta extends Component
{

    public $mensagem;
    public $status;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($mensagem)
    {
        $this->mensagem = $mensagem;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alerta');
    }
}
