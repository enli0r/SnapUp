<?php

namespace App\View\Components;

use App\Category;
use App\Attribute;
use Illuminate\View\Component;

class filterSidebar extends Component
{
    public $currentcategory;
    public $gender;
    public $previouspost;

    /**
     * Create a new component instance.
     *
     * @return void
     */


    public function __construct($currentcategory, $gender, $previouspost)
    {
        $this->currentcategory = $currentcategory;
        $this->gender = $gender;
        $this->previouspost = $previouspost;
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
