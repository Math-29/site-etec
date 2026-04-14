<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DiferItem extends Component
{
    public $titulo;
    public $descricao;
    public $link;
    public $alt;

    public function __construct($titulo, $descricao, $link, $alt)
    {
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->link = $link;
        $this->alt = $alt;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.difer-item');
    }
}
