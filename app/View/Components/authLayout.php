<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class authLayout extends Component
{
    public $title;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->title ??= config('app.name');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.auth-layout');
    }
}
