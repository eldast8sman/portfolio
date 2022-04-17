<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class VideoTutorials extends Component
{
    public array $videoTutorials = [];
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->videoTutorials = [
            [
                'videoId' => 'pha6SPRVnxA',
                'title' => 'Website for the Ondo State Ministry of Health',
                'description' => 'This is a Short Video showing the features of the Website I developed for the Ondo State Ministry of Health'
            ],
            [
                'videoId' => 'IxL2G-ntKRs',
                'title' => 'Business Listing Platform for Yenreach.com',
                'description' => 'This is a Short Video showing the features of the Website I contributed to it\'s development for Yenreach.com'
            ],
            [
                'videoId' => 'OQYG1QLK-XE',
                'title' => 'Portal for Hollograph Technologies Services',
                'description' => 'A Short Video showing the features of the Portal I developed for Hollograph Technologoes Services.'
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.video-tutorials');
    }
}
