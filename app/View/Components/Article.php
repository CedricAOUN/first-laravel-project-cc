<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Article extends Component
{
    public $title;
    public $description;
    public $articleId;
    /**
     * Create a new component instance.
     */
    public function __construct($title, $description, $articleId)
    {
        $this->title = $title;
        $this->description = $description;
        $this->articleId = $articleId;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.article');
    }
}
