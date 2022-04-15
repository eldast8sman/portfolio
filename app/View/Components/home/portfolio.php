<?php

namespace App\View\Components\Home;

use Illuminate\Support\Arr;
use Illuminate\View\Component;

class Portfolio extends Component
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
        $this->items = [
            [
                'category' => ['Laravel', 'TailwindCSS', 'AlpineJS'],
                'title' => 'Portfolio Website with Laravel, TailwindCSS and AlpineJS',
                'image' => url('/img/Resume.PNG'),
                'url' => 'https://resume.omotolaniolurotimi.com'
            ],
            [
                'category' => ['Laravel'],
                'title' => 'Image Resizing API with Laravel, Sanctum, Breeze and Image Intervention',
                'image' => url('/img/ImageResize.PNG'),
                'url' => 'https://imageresize.omotolaniolurotimi.com'
            ],
            [
                'category' => ['PHP', 'Bootstrap'],
                'title' => 'Business Listing Platform for Yenreach.com',
                'image' => url('/img/Yenreach1.PNG'),
                'url' => 'https://yenreach.com'
            ],
            [
                'category' => ['PHP', 'Bootstrap'],
                'title' => 'Website for the Ondo State Ministry of Health',
                'image' => url('/img/ODMOH2.PNG'),
                'url' => 'https://ondostatemoh.gov.ng'
            ],
            [
                'category' => ['PHP', 'Bootstrap'],
                'title' => 'A Multi-Level Marketing Platform for Hollograph Technologies',
                'image' => url('/img/hollotech1.PNG'),
                'url' => 'https://portal.hollotechservices.com'
            ],
            [
                'category' => ['PHP'],
                'title' => 'E-Commerce API Development For Howsales',
                'image' => url('/img/Howsales1.PNG'),
                'url' => 'https://howsales.net'
            ]
        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.portfolio');
    }
}
