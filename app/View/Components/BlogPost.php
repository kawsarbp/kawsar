<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BlogPost extends Component
{
    /**
     * Create a new include instance.
     *
     * @return void
     */
    public $title;
    public function __construct($title)
    {
        $this->title = $title;
    }
    /**
     * Get the view / contents that represent the include.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.blog-post');
    }
}
