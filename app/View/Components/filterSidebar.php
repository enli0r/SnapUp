<?php

namespace App\View\Components;

use App\Category;
use App\Attribute;
use Illuminate\View\Component;

class filterSidebar extends Component
{
    public $url;
    public $gender;


    /**
     * Create a new component instance.
     *
     * @return void
     */


    public function __construct($url, $gender)
    {
        $this->url = $url;
        $this->gender = $gender;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    


    public function render()
    {
        $categories = Category::all();
        $all_attributes = Attribute::all();

        return view('components.filter-sidebar')->with([
            'categories' => $categories,
            'all_attributes' => $all_attributes
        ]);
    }
}
