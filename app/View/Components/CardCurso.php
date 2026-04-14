<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardCurso extends Component
{
    public $img;
    public $alt;
    public $curso;
    public $texto;
    public $tempo;
    public $periodo;
    public $link;

    public function __construct($img, $alt, $curso, $texto, $tempo, $periodo, $link)
    {
        $this->img = $img;
        $this->alt = $alt;
        $this->curso = $curso;
        $this->texto = $texto;
        $this->tempo = $tempo;
        $this->periodo = $periodo;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-curso');
    }
}
