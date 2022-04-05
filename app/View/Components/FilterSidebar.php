<?php

namespace App\View\Components;

use App\Category;
use App\Attribute;
use Illuminate\View\Component;

class FilterSidebar extends Component
{
    public $currentcategory;
    public $previouspost;

    /**
     * Create a new component instance.
     *
     * @return void
     */


    public function __construct()
    {

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

        return view('components.filterSidebar')->with([
            'categories' => $categories,
            'all_attributes' => $all_attributes
        ]);
    }
}
