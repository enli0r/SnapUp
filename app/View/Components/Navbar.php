<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class Navbar extends Component
{

    public $reder;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($render)
    {
        $this->render = $render;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {        
        $cart_count = Cart::content()->count();
        return view('components.navbar')->with(compact('cart_count'));
    }
}
